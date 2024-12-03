<body>
    <div class="bg-body vw-100">
      <div class="container pb-2 pt-5 vh-100" id="chatG">
        <div class="mt-md-5 d-flex justify-content-center">
          <h1 class="text-center px-2 w-50 bg-body-secondary d-inline  rounded">
            massage
          </h1>
        </div>
        <?php foreach ($data["chat"] as $chatValue) { ?>
        <div class="d-flex  border align-items-center mt-2 mb-2">
          <img
            src="<?= BSCURL ?>/Resource/profile_IMG/<?= $chatValue[
  "foto_profile"
] ?>"
            class=" mx-1 rounded-circle object-fit-cover"
            width="50px"
            height="50px"
            alt=""
          />
          <div class="d-block w-75 m-0">
            <h2 class="m-0 ps-2"><?= $chatValue["user_name"] ?></h2>
          <p class="ps-1 w-100">
            <?= $chatValue["chat_value"] ?>
          </p>
          </div>
        </div>
        <?php } ?>
      <br><br>
      </div>
      <div class="position-fixed bottom-0 align-self-end">
        <form action="<?= BSCURL ?>/globalChat/insertChat" class="d-inline-flex bg-body vw-100" method="post">
          <span class="input-group-text" id="basic-addon1"
            ><a class="btn btn-outline-dark">&#10084;</a></span
          >
          <input type="text" maxlength="250" name="user_name" hidden value="<?= session::dataLogin(
            "userName"
          ) ?>">
      <input type="text" name="foto_profile" hidden value="<?= session::dataLogin(
        "fotoProfile"
      ) ?>">
          <input
            type="text"
            name="chatInput"
            class="form-control"
            placeholder="Username"
            aria-label="Username"
            aria-describedby="basic-addon1"
          />
          <span class="input-group-text" id="basic-addon1"
            ><button class="btn btn-outline-dark" type="submit">
              Send
            </button></span
          >
        </form>
      </div>
    </div>
</body>
<script src="<?= BSCURL ?>/Resource/js/globalChat.js?v=<?php echo time(); ?>"></script>