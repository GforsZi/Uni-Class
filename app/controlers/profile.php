<?php
class profile extends Controller
{
  public function index()
  {
    if (!isset($_SESSION["dataLogin"])) {
      header("location: " . BSCURL . "/login");
      exit();
    }

    function getUsername()
    {
      $username = $dataPost["user_name"];
      return $username;
    }

    $data["judul"] = "Profile";
    $data["main"] = $this->model("main_model");
    $data["post"] = $this->model("system_postIMG")->getPostDataProfile();
    $this->view("templates/header", $data);
    $this->view("profile/index", $data);
    $this->view("templates/footer");
  }
  public function setting()
  {
    if (!isset($_SESSION["dataLogin"])) {
      header("location: " . BSCURL . "/login");
      exit();
    }
    $data["judul"] = "setting";
    $data["post"] = $this->model("system_postIMG")->getPostDataProfile();
    $data["main"] = $this->model("main_model");
    $data["chat"] = $this->model("global_chat");
    $this->view("templates/header", $data);
    $this->view("profile/setting", $data);
    $this->view("templates/footer");
  }

  public function logout()
  {
    session_unset();
    $_SESSION = [];
    session_destroy();

    header("location: " . BSCURL . "/login");
    exit();
  }

  public function updateProfile()
  {
    if (!$this->model("main_model")->unsetOldFotoProfile($_POST) > 0) {
      header("location: " . BSCURL . "/profile");
    }
    if ($this->model("main_model")->setProfile($_POST) > 0) {
      if ($this->model("global_chat")->updateProfileChat($_POST) > 0) {
        if ($this->model("system_postIMG")->updateProfilePostImg($_POST) > 0) {
          header("location: " . BSCURL . "/profile");
        }
      }
      header("location: " . BSCURL . "/profile");
      exit();
    } else {
      header("location: " . BSCURL . "/profile");
      exit();
    }
  }

  public function deletePostProfile()
  {
    if ($this->model("system_postIMG")->deletePostImage($_POST) > 0) {
      session::setImagePost("error");
      header("location: " . BSCURL . "/profile");
      exit();
    } else {
      header("location: " . BSCURL . "/profile");
      exit();
    }
  }

  public function deleteAcount()
  {
    if ($this->model("system_postIMG")->deletePostImage($_POST) > 0) {
      session::setImagePost("error");
    }
    if ($this->model("main_model")->deleteAcountByUsername($_POST) > 0) {
      session_unset();
      $_SESSION = [];
      session_destroy();
      header("location: " . BSCURL . "/login");
      exit();
    } else {
      header("location: " . BSCURL . "/login");
      exit();
    }
  }
}
