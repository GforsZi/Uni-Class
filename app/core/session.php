<?php
class session
{
  public static function setFlashPage($message, $action, $type, $location)
  {
    $_SESSION["flashRegisterPage"] = [
      "message" => $message,
      "action" => $action,
      "type" => $type,
      "location" => $location,
    ];
  }
  public static function flashPage()
  {
    if (isset($_SESSION["flashRegisterPage"])) {
      echo '
<div class="position-fixed top-0 z-3 bottom-0 end-0 start-0 align-items-center d-flex justify-content-center" style="background-color:rgba(0,0,0,0.4);">
  
<div class="card z-2" style="width: 600px;">
  <div class="card-header">
    Alert
  </div>
  <div class="card-body">
    <h5 class="card-title">' .
        $_SESSION["flashRegisterPage"]["message"] .
        '</h5>
    <p class="card-text">' .
        $_SESSION["flashRegisterPage"]["action"] .
        '</p>
        <div class="modal-footer">
    <a href="' .
        $_SESSION["flashRegisterPage"]["location"] .
        '" class="btn  btn-' .
        $_SESSION["flashRegisterPage"]["type"] .
        '">OKE</a>
        </div>
  </div>
</div>
</div>';
      unset($_SESSION["flashRegisterPage"]);
    }
  }

  public static function setDataLogin($id, $userName, $info, $bio, $fotoProfile)
  {
    $_SESSION["dataLogin"] = [
      "id" => $id,
      "userName" => $userName,
      "info" => $info,
      "bio" => $bio,
      "fotoProfile" => $fotoProfile,
    ];
  }

  public static function unsetDataLogin()
  {
    unset($_SESSION["dataLogin"]);
  }

  public static function dataLogin($case)
  {
    $caseData = $case;
    if (isset($_SESSION["dataLogin"])) {
      switch ($caseData) {
        case "id":
          echo $_SESSION["dataLogin"]["id"];
          break;
        case "userName":
          echo $_SESSION["dataLogin"]["userName"];
          break;
        case "info":
          echo $_SESSION["dataLogin"]["info"];
          break;
        case "bio":
          echo $_SESSION["dataLogin"]["bio"];
          break;
        case "fotoProfile":
          echo $_SESSION["dataLogin"]["fotoProfile"];
          break;
        default:
          echo "undefined";
          break;
      }
    }
  }

  public static function setImagePost($img)
  {
    $_SESSION["imagePost"] = [
      "imgPost" => $img,
    ];
  }

  public static function getImagePost()
  {
    return $_SESSION["imagePost"]["imgPost"];
  }

  public static function unsetImagePost()
  {
    unset($_SESSION["imagePost"]);
  }
}
