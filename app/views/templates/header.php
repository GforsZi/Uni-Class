<!DOCTYPE html>
<html>

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>
</head>
  <link rel="stylesheet" href="<?= BSCURL ?>/Resource/externalCode/bootstrap-5.3.3-dist/css/bootstrap.min.css?v=<?php echo time(); ?>">
<body>
    <nav
      class="navbar position-fixed vw-100 z-3 navbar-expand-lg bg-body-tertiary"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= BSCURL ?>"><h3 class="m-0">
          <img width="32px" src="<?= BSCURL ?>/Resource/IMG/1725175721622.png" alt="">
          Uni-Class</h3></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BSCURL ?>/profile/"
                ><img
                  src="<?= BSCURL ?>/Resource/IMG/user.svg"
                  width="25px"
                  height="25px"
                  class=""
                  alt=""
                />Profile</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="<?= BSCURL ?>/globalChat/"
                ><img src="<?= BSCURL ?>/Resource/IMG/message-square.svg" width="25px" height="25px" class="" alt="" />Global
                chat</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BSCURL ?>/acountInfo/"
                ><img
                  src="<?= BSCURL ?>/Resource/IMG/menu.svg"
                  width="25px"
                  height="25px"
                  class=""
                  alt=""
                />Acount</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>