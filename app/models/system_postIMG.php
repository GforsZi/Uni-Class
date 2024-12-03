<?php

class system_postIMG
{
  private $table = "table_post";
  private $db;

  public function __construct()
  {
    $this->db = new database();
  }

  public function getAllPostData()
  {
    $this->db->query("SELECT * FROM " . $this->table . " ORDER BY id DESC");
    $this->db->execute();
    return $this->db->resultSet();
  }

  public function getPostDataByUn($data)
  {
    $this->db->query("SELECT * FROM " . $this->table . " WHERE user_name =:un");
    $this->db->bind("un", $data);
    $this->db->execute();
    return $this->db->resultSet();
  }

  public function getPostDataProfile()
  {
    $username = $_SESSION["dataLogin"]["userName"];
    $this->db->query(
      "SELECT * FROM " . $this->table . " WHERE user_name=:userName"
    );
    $this->db->bind("userName", $username);
    $this->db->execute();
    return $this->db->resultSet();
  }

  public function getPostDataByUser_name($data)
  {
    $userName = $data["userName"];
    $this->db->query("SELECT * FROM " . $this->table . " WHERE user_name=:id");
    $this->db->bind("id", $userName);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getPostDataByUsername($data)
  {
    $userName = $data["user_name"];
    $this->db->query(
      "SELECT * FROM " . $this->table . " WHERE user_name=:userName"
    );
    $this->db->bind("userName", $userName);
    $this->db->execute();
    $result = $this->db->resultSet();

    if ($result == null) {
      session::setImagePost("error");
    } else {
      session::setImagePost($result[0]["imgPost"]);
    }
    return $this->db->rowCount();
  }

  public function postImage()
  {
    $nameFile = $_FILES["imagePost"]["name"];
    $sizeFile = $_FILES["imagePost"]["size"];
    $errorFile = $_FILES["imagePost"]["error"];
    $tmpFile = $_FILES["imagePost"]["tmp_name"];

    $extensionFiles = ["jpg", "jpeg", "png", "webp"];
    $extensionFotos = explode(".", $nameFile);
    $extensionFoto = strtolower(end($extensionFotos));

    if ($errorFile === UPLOAD_ERR_NO_FILE) {
      echo "tidak ada img";
      return false;
      exit();
    }

    if (!in_array($extensionFoto, $extensionFiles)) {
      echo "tidak sesuai";
      return false;
    }

    if ($sizeFile > 1024000) {
      echo "Terlalu besar";
      return false;
    }

    $target = "Resource/postDir/" . $nameFile;
    move_uploaded_file($tmpFile, $target);

    return $nameFile;
  }

  public function updateProfilePostImg($data)
  {
    $user_name = $data["userName"];
    $fotoProfile = $_FILES["fotoProfile"]["name"];

    $this->db->query(
      "UPDATE " .
        $this->table .
        " SET fotoProfile=:fotoProfile WHERE user_name=:UN"
    );
    $this->db->bind("UN", $user_name);
    $this->db->bind("fotoProfile", $fotoProfile);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function insertPostImage($data)
  {
    $user_name = $data["userName"];
    $fotoProfile = $data["fotoProfile"];
    $caption = htmlspecialchars(stripslashes($data["Caption"]));

    $setPost = $this->postImage();
    if ($setPost === false) {
      echo " ada masalah";
      return false;
    } else {
      session::setImagePost($setPost);
      $query =
        "INSERT INTO " .
        $this->table .
        "(user_name, imgPost, caption, likes, fotoProfile) VALUES (:user_name, :imgPost, :caption, 0, :fotoProfile)";
      $this->db->query($query);
      $this->db->bind("user_name", $user_name);
      $this->db->bind("imgPost", $setPost);
      $this->db->bind("caption", $caption);
      $this->db->bind("fotoProfile", $fotoProfile);
      $this->db->execute();

      return $this->db->rowCount();
    }
  }

  public function deletePostImage($data)
  {
    $target = "Resource/postDir/";
    $userName = $data["userName"];
    $img = $data["imgPost"];

    $imgDir = $target . $img;
    if (file_exists($imgDir)) {
      unlink($imgDir);
    } else {
      return false;
      exit();
    }
    $query = "DELETE FROM " . $this->table . " Where user_name = :userName";
    $this->db->query($query);
    $this->db->bind("userName", $userName);
    $this->db->execute();

    return $this->db->rowCount();
  }
}
