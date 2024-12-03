<?php

class main_model
{

  private $table = "main_model";
  private $db;

  public function __construct()
  {
    $this->db = new database;
  }

  public function getAllMainData()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function getMainDataByUn($data)
  {
    $this->db->query("SELECT * FROM " . $this->table . " WHERE user_name=:un");
    $this->db->bind("un", $data);
    $this->db->execute();
    return $this->db->resultSet();
  }

  public function getUser_nameMainData($data)
  {
    if (!empty($data)) {
      $user_name = $data["user_name"];
      $this->db->query("SELECT * FROM " . $this->table . " WHERE user_name=:user_name");
      $this->db->bind("user_name", $user_name);
      $this->db->execute();

      return $this->db->rowCount();
    } else {
      return false;
    }
  }

  public function deleteAcountByUsername($data)
  {
    $userName = $data["userName"];
    $fotoProfile = ["fotoProfile" => $data["fotoProfile"]];
    $this->db->query("DELETE FROM " . $this->table . " WHERE user_name=:userName");
    $this->db->bind("userName", $userName);
    $this->db->execute();
    $result = $this->db->rowCount();

    if ($result > 0) {
      $this->unsetOldFotoProfile($fotoProfile);
      return $result;
    } else {
      return false;
    }
  }

  public function loginMainData($data)
  {
    if (!empty($data)) {
      $user_name = $data["user_name"];
      $password = $data["password"];
      $this->db->query("SELECT * FROM " . $this->table . " WHERE user_name=:user_name");
      $this->db->bind("user_name", $user_name);
      $this->db->execute();
      $result = $this->db->resultSet();
      if (password_verify($password, $result[0]["password"])) {
        session::setDataLogin($result[0]["id"], $result[0]["user_name"], $result[0]["info"], $result[0]["bio"], $result[0]["foto_profile"]);
      } else {
        return false;
      }
      return $this->db->rowCount();
    } else {
      return false;
    }
  }

  public function tambahMainData($data)
  {
    $password = $data["password"];
    $cnfrmPassword = $data["cfrmpassword"];

    if ($password !== $cnfrmPassword) {
      return false;
      exit;
    }

    $passwordnew = password_hash($password, PASSWORD_DEFAULT);
    if (!empty($data)) {
      $query = "INSERT INTO " . $this->table . "(user_name, password, info, bio, foto_profile) VALUES (:user_name, :password, '', '', 'default_picture/DATA_XP.jpg')";
      $this->db->query($query);
      $this->db->bind("user_name", htmlspecialchars(stripslashes($data["user_name"])));
      $this->db->bind("password", htmlspecialchars(stripslashes($passwordnew)));
      $this->db->execute();

      return $this->db->rowCount();
    } else {
      return false;
      exit;
    }
  }

  public function unsetOldFotoProfile($data)
  {
    $target = "Resource/profile_IMG/";
    $img = $data["fotoProfile"];

    $targetPic = explode("/", $img);
    $resultTargetPic = end($targetPic);

    $imgDir = $target . $resultTargetPic;
    if (file_exists($imgDir)) {
      unlink($imgDir);
      return true;
    } else {
      return "noPicture";
    }
    return true;
  }

  public function setProfile($data)
  {
    $info = htmlspecialchars(stripslashes($data["info"]));
    $bio = htmlspecialchars(stripslashes($data["bio"]));
    $id = $data["id"];
    $user_name = $data["userName"];

    function setFotoProfile()
    {
      $nameFile = $_FILES["fotoProfile"]["name"];
      $sizeFile = $_FILES["fotoProfile"]["size"];
      $errorFile = $_FILES["fotoProfile"]["error"];
      $tmpFile = $_FILES["fotoProfile"]["tmp_name"];
      $target = "Resource/profile_IMG/" . $nameFile;

      $extensionFiles = ["jpg", "jpeg", "png"];
      $extensionFotos = explode(".", $nameFile);
      $extensionFoto = strtolower(end($extensionFotos));

      if ($errorFile === UPLOAD_ERR_NO_FILE) {
        $defaultIMG = "default_picture/DATA_XP.jpg";
        return $defaultIMG;
        exit;
      }

      if (!in_array($extensionFoto, $extensionFiles)) {
        echo "tidak sesuai";
        return false;
      }

      if ($sizeFile > 524000) {
        echo "Terlalu besar";
        return false;
      }

      move_uploaded_file($tmpFile, $target);

      return $nameFile;
    }

    $setFoto = setFotoProfile();
    if ($setFoto === false) {
      echo "ada masalah";
      return false;
    } else {
      $this->db->query("UPDATE " . $this->table . " SET info=:info, bio=:bio, foto_profile=:fotoProfile WHERE id=:id");
      $this->db->bind("info", $info);
      $this->db->bind("bio", $bio);
      $this->db->bind("fotoProfile", $setFoto);
      $this->db->bind("id", $id);
      $this->db->execute();

      if ($this->db->rowCount() > 0) {
        session::unsetDataLogin();

        session::setDataLogin($id, $user_name, $info, $bio, $setFoto);
      } else {
        echo "session bermasalah ";
        return false;
      }

      return $this->db->rowCount();
    }
  }
}
