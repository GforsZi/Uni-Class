<?php
class globalChat extends Controller
{
  public function index()
  {
    if (!isset($_SESSION["dataLogin"])) {
      header("location: " . BSCURL . "/login");
      exit;
    }
    $data["judul"] = "Global chat";
    $data["chat"] = $this->model("global_chat")->getAllChatData();
    $this->view("templates/header", $data);
    $this->view("globalChat/index", $data);
    $this->view("templates/footer");
  }

  public function insertChat()
  {
    if ($this->model("global_chat")->insertChat($_POST) > 0) {
      header("location: " . BSCURL . "/globalChat");
      exit;
    } else {
      header("location: " . BSCURL . "/globalChat");
      exit;
    }
  }
}