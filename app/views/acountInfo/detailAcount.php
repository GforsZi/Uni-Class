<body>
    <div class="container pt-4 mx-auto">
      <?php foreach ($data["userN"] as $UserName) { ?>
      <div class="w-100 mt-3">
        <img
          src="<?= BSCURL; ?>/Resource/profile_IMG/<?= $UserName["foto_profile"]; ?>"
          class="mt-4 d-inline-block rounded-circle object-fit-cover"
          width="120px"
          height="120px"
          alt=""
        />
        <div class="align-items-center d-inline-flex">
          <div class="card-title">
            <span class="mx-2 my-0 d-block">
              <h1 class="fw-bolder m-0 fs-1"><?= $UserName["user_name"]; ?></h1>
              <p class="m-0"><?= $UserName["info"]; ?></p>
              <p class="m-0"><?= $UserName["bio"]; ?></p>
            </span>
          </div>
        </div>
      </div>
      <?php } ?>

      <hr />
      <a
        class="btn btn-outline-dark w-100"
        data-bs-toggle="collapse"
        href="#collapsePostimg"
        role="button"
        aria-expanded="false"
        aria-controls="collapsePostimg"
      >
        Post
      </a>
      <div class="collapse" id="collapsePostimg">
        <div class="card card-body">
        <?php foreach ($data["post"] as $dataPost) { ?>
          <div class="container text-center">
            <img
              class="rounded-2 img-thumbnail m-2 mx-0"
              src="<?= BSCURL ?>/Resource/postDir/<?= $dataPost["imgPost"] ?>"
              alt=""
            />
            <h5 class=""><?= $dataPost["caption"] ?></h5>
          </div>
          <hr />
          <?php } ?>
        </div>
      </div>

      <!-- <a
        class="btn btn-outline-dark w-100 mt-4"
        data-bs-toggle="collapse"
        href="#collapseUI"
        role="button"
        aria-expanded="false"
        aria-controls="collapseUI"
      >
        Your Blog
      </a>
      <div class="collapse" id="collapseUI">
        <div class="card card-body">
          Some placeholder content for the collapse component. This panel is
          hidden by default but revealed when the user activates the relevant
          trigger.
        </div>
      </div> -->
    </div>
    <br />
  </main>
</body>