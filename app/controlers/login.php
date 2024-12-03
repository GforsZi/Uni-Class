<?php
class login extends Controller
{
  public function index()
  {
    $data["judul"] = "Login";
    $data["main"] = $this->model("main_model");
    $data["psot"] = $this->model("system_postIMG");

    $this->view("login/index");
    $this->view("templates/footer");
  }

  public function login()
  {
    if ($this->model("main_model")->loginMainData($_POST) > 0) {
      if ($this->model("system_postIMG")->getPostDataByUsername($_POST) > 0) {
        header("location: " . BSCURL . "/login");
        session::setFlashPage(
          "berhasil!",
          "Anda berhasil login",
          "success",
          BSCURL . "/home"
        );
      } else {
        header("location: " . BSCURL . "/login");
        session::setFlashPage(
          "berhasil!",
          "Anda berhasil login",
          "success",
          BSCURL . "/home"
        );
      }
    } else {
      header("location: " . BSCURL . "/login");
      session::setFlashPage(
        "gagal!",
        "Terdapat kesalahan pada password dan username",
        "danger",
        BSCURL . "/login"
      );
    }
  }
}
