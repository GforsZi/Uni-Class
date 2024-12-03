<?php
class home extends Controller
{
  public function index()
  {
    if (!isset($_SESSION["dataLogin"])) {
      header("location: " . BSCURL . "/login");
      exit();
    }
    $data["judul"] = "Home";
    $data["post"] = $this->model("system_postIMG")->getAllPostData();
    $this->view("templates/header", $data);
    $this->view("home/index", $data);
    $this->view("templates/footer");
  }

  public function postPage()
  {
    if (!isset($_SESSION["dataLogin"])) {
      header("location: " . BSCURL . "/login");
      exit();
    }
    $data["judul"] = "Post";
    $data["post"] = $this->model("system_postIMG");
    $this->view("templates/header", $data);
    $this->view("home/postPage");
    $this->view("templates/footer");
  }

  public function insertPostImage()
  {
    if ($this->model("system_postIMG")->getPostDataByUser_name($_POST) > 0) {
      header("location: " . BSCURL . "/home/postPage");
      session::setFlashPage(
        "gagal!",
        "Postingan anda melebihi kapasitas yang diberikan. Delete postingan sebelumnya untuk dapat memposting",
        "danger",
        BSCURL . "/home/postPage"
      );
      exit();
    }
    if ($this->model("system_postIMG")->insertPostImage($_POST) > 0) {
      header("location: " . BSCURL . "/home");
      session::setFlashPage(
        "berhasil!",
        "Postingan anda telah ditambahkan",
        "success",
        BSCURL . "/home"
      );
      exit();
    } else {
      header("location: " . BSCURL . "/home/postPage");
      session::setFlashPage(
        "gagal!",
        "Pastikan anda mengikuti syarat untuk dapat memposting gambar",
        "danger",
        BSCURL . "/home/postPage"
      );
      exit();
    }
  }
}
