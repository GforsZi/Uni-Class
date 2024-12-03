<?php

class global_chat
{
  private $table = "global_chat";
  private $db;

  public function __construct()
  {
    $this->db = new database();
  }

  public function getAllChatData()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultSet();
  }

  public function updateProfileChat($data)
  {
    $user_name = $data["userName"];
    $fotoProfile = $_FILES["fotoProfile"]["name"];

    $this->db->query(
      "UPDATE " .
        $this->table .
        " SET foto_profile=:fotoProfile WHERE user_name=:UN"
    );
    $this->db->bind("UN", $user_name);
    $this->db->bind("fotoProfile", $fotoProfile);
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function insertChat($data)
  {
    $user_name = $data["user_name"];
    $fotoProfile = $data["foto_profile"];
    $chatValue = htmlspecialchars(stripslashes($data["chatInput"]));

    $query =
      "INSERT INTO " .
      $this->table .
      " (user_name, chat_value, foto_profile) VALUES (:user_name, :chatValue, :fotoProfile)";
    $this->db->query($query);
    $this->db->bind("user_name", $user_name);
    $this->db->bind("chatValue", $chatValue);
    $this->db->bind("fotoProfile", $fotoProfile);
    $this->db->execute();

    return $this->db->rowCount();
  }
}
