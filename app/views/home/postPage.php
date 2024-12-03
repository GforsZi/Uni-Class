<body>
<div class="container">
<div class="row">
 <div class="card col pt-5 vh-100" style="width: 18rem;">
  <img class=" mt-5 card-img-top object-fit-contain border rounded mx-auto" id="preview" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Card title</h5>
  </div>
</div>
<div class="col card col pt-5 vh-100">
 <form class="mt-5" action="<?= BSCURL ?>/home/insertPostImage" method="post" enctype="multipart/form-data">
    <label for="formFileSm" class="form-label">post file</label>
  <input class="form-control form-control-sm" id="img" name="imagePost" type="file">
    <label for="inputPassword2">Caption</label>
    <input autocomplete="off" class="form-control" name="Caption" maxlength="40">
    <input type="hidden" name="id" value="<?= session::dataLogin("id") ?>">
    <input type="hidden" name="userName" value="<?= session::dataLogin(
      "userName"
    ) ?>">
    <input type="hidden" name="fotoProfile" value="<?= session::dataLogin(
      "fotoProfile"
    ) ?>">
    <button type="submit" class="btn btn-primary mt-3 ">Post</button>
</form>
</div>
</div>
</div>
</body>
        <?php session::flashPage(); ?>
<script src="<?= BSCURL ?>/Resource/js/postPage.js?v=<?php echo time(); ?>"></script>