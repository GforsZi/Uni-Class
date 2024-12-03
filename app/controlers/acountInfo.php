<?php
class acountInfo extends Controller
{
  public function index()
  {
    if (!isset($_SESSION["dataLogin"])) {
      header("location: " . BSCURL . "/login");
      exit();
    }
    $data["judul"] = "Acount";
    $data["userN"] = $this->model("main_model")->getAllMainData();
    $this->view("templates/header", $data);
    $this->view("acountInfo/index", $data);
    $this->view("templates/footer");
  }

  public function detailAcount($id = "error")
  {
    if (!isset($_SESSION["dataLogin"])) {
      header("location: " . BSCURL . "/login");
      exit();
    }

    if ($id === "error") {
      header("location: " . BSCURL . "/acountInfo");
      exit();
    }
    $data["judul"] = "Detail Acount";
    $data["userN"] = $this->model("main_model")->getMainDataByUn($id);
    $data["post"] = $this->model("system_postIMG")->getPostDataByUn($id);
    $this->view("templates/header", $data);
    $this->view("acountInfo/detailAcount", $data);
    $this->view("templates/footer");
  }
}
