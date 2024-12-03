<?php
class register extends Controller
{
  public function index()
  {
    $data["judul"] = "Register";
    $data["main"] = $this->model("main_model");

    $this->view("register/index", $data);
    $this->view("templates/footer");
  }

  public function tambah()
  {
    if ($this->model("main_model")->getUser_nameMainData($_POST) > 0) {
      header("location: " . BSCURL . "/register");
      session::setFlashPage("gagal!", "Username telah dipakai", "failed", BSCURL . "/register");
      exit;
    }
    if ($this->model("main_model")->tambahMainData($_POST) > 0) {
      header("location: " . BSCURL . "/register");
      session::setFlashPage("berhasil!", "Akun berhasil dibuat", "success", BSCURL . "/login");
      exit;
    } else {
      session::setFlashPage("gagal!", "Terdapat kesalahan pada password", "danger", BSCURL . "/register");
      header("location: " . BSCURL . "/register");
      exit;
    }
  }
}
