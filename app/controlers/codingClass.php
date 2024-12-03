<?php
class codingClass extends Controller
{
  public function index()
  {
    if (!isset($_SESSION["dataLogin"])) {
      header("location: " . BSCURL . "/login");
      exit;
    }
    $data["judul"] = "Coding-Class";
    $this->view("templates/header", $data);
    $this->view("codingClass/index");
    $this->view("templates/footer");
  }
}
