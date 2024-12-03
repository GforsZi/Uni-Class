<?php
class friend extends Controller
{
  public function index()
  {
    $data["judul"] = "Friend";
    $this->view("templates/header", $data);
    $this->view("friend/index");
    $this->view("templates/footer");
  }
}
