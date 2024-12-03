<body>
  <main>
    <nav class="navbar bg-body-tertiary position-fixed bottom-0 vw-100 z-3">
      <div class="container-fluid justify-content-center">
        <button
          class="btn btn-outline-dark"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasBottom"
          aria-controls="offcanvasBottom"
        >
          more fitur
        </button>

        <div
          class="offcanvas offcanvas-bottom"
          tabindex="-1"
          id="offcanvasBottom"
          aria-labelledby="offcanvasBottomLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">
              more
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body container small">
            <div class="container text-center">
              <div class="row row-cols-auto">
                <div class="col">
                  <a href="<?= BSCURL ?>/home/postPage"
                    ><button type="button" class="btn btn-outline-primary">
                      <img
                        src="<?= BSCURL ?>/Resource/IMG/image.svg"
                        class="p-1 rounded w-100 mx-auto"
                        alt="..."
                      /></button
                  ></a>
                </div>
                <div class="col"><a draggable="false" href="<?= BSCURL ?>/codingClass">
                  <button type="button" class="btn btn-outline-primary">
                  <img draggable="false" src="<?= BSCURL ?>/Resource/IMG/code.svg" class="p-1 rounded w-100 mx-auto" alt="">
                  </button>
                  </a></div>
                <div class="col">
                  <a draggable="false" href="<?= BSCURL ?>/gameCenter">
                  <button type="button" class="btn btn-outline-primary">
                  <img draggable="false" src="<?= BSCURL ?>/Resource/IMG/play.svg" class="p-1 rounded w-100 mx-auto" alt="">
                  </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <br /><br /><br />
      <?php foreach ($data["post"] as $dataPost) { ?>
    <div
      class="container d-flex justify-content-center pb-4 mb-4 overflow-y-scroll"
    >
      <div class="card mb-2 w-100">
        <div class="card-body m-0">
          <h5 class="card-title">
            <img
              src="<?= BSCURL ?>/Resource/profile_IMG/<?= $dataPost[
  "fotoProfile"
] ?>"
              class="rounded-circle object-fit-cover"
              width="50px"
              height="50px"
              alt=""
            /><?= ": " . $dataPost["user_name"] ?>
          </h5>
        </div>
        <hr class="mb-1" />
        <img
          src="<?= BSCURL ?>/Resource/postDir/<?= $dataPost["imgPost"] ?>"
          class="w-100 rounded mx-auto object-fit-contain"
          alt="..."
        />
        <hr class="mt-1" />
        <div class="card-body">
          <p class="card-text">
<?= $dataPost["caption"] ?>
          </p>
          <h2 class="card-text text-center">Uni-class</h2>
        </div>
      </div>
    </div>
      <?php } ?>
  </main>
          <?php session::flashPage(); ?>
</body>