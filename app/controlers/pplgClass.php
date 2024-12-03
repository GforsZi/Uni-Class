<?php
class pplgClass extends Controller
{
  public function index()
  {
    $data["judul"] = "PPLG-Class";
    $this->view("templates/header", $data);
    $this->view("pplgClass/index");
    $this->view("templates/footer");
  }
}
