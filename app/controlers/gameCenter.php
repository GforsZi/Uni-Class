<?php
class gameCenter extends Controller
{
  public function index()
  {
    if (!isset($_SESSION["dataLogin"])) {
      header("location: " . BSCURL . "/login");
      exit;
    }
    $data["judul"] = "Game center";
    $this->view("templates/header", $data);
    $this->view("gameCenter/index");
    $this->view("templates/footer");
  }
}