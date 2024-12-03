<body>
      <br />
    <div class="container pt-5 mt-md-5 mx-auto">
      <div class="w-100 text-center">
        <img
          src="<?= BSCURL ?>/Resource/profile_IMG/<?= session::dataLogin(
  "fotoProfile"
) ?>"
          class="mt-1 rounded-circle mx-auto object-fit-cover"
          width="150px"
          height="150px"
          alt=""
        />
      </div>
      <div class="my-2">
        <h5 class="card-title text-center"><?= session::dataLogin(
          "userName"
        ) ?></h5>
      </div>
      <div class="card-body">
        <hr />
        <p class="text-center fw-bold mb-2">Setting</p>
        <div class="container w-75">
          <div class="row d-block">
            <div class="dropdown col mb-1">
              <button
                class="btn btn-outline-dark w-100"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <p class="text-start m-0 p-0">Post</p>
              </button>

              <ul class="dropdown-menu">
                <li>
                  <button type="button" class="btn btn-link dropdown-item" data-bs-toggle="modal" data-bs-target="#deletePostModal">
  Delete post
</button>
                </li>
              </ul>
            </div>
            <div class="dropdown col mb-1">
              <button
                class="btn btn-outline-dark w-100"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <p class="text-start m-0 p-0">Acount</p>
              </button>

              <ul class="dropdown-menu">
                <li><a
                class="dropdown-item w-100"
                data-bs-toggle="modal"
                data-bs-target="#modalEdit"
              >
                <p class="text-start m-0 p-0">Edit profile</p>
              </a></li>
              </ul>
            </div>
            <div class="col mb-1">
              <button type="button" class="btn btn-outline-dark w-100" data-bs-toggle="modal" data-bs-target="#logoutModal">
  <p class="text-start m-0 p-0">Logout</p>
</button>
            </div>
          </div>
        </div>
        <hr />
      </div>
      <!-- Modal -->
      <div
        class="modal fade"
        id="modalEdit"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
          <form class="" enctype="multipart/form-data" action="<?= BSCURL ?>/profile/updateProfile" method="post">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Edit Profile
              </h1>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="id" value="<?= session::dataLogin(
                "id"
              ) ?>">
              <input type="hidden" name="fotoProfile" value="<?= session::dataLogin(
                "fotoProfile"
              ) ?>">
              <input type="hidden" name="userName" value="<?= session::dataLogin(
                "userName"
              ) ?>">
              <div class="mb-3">
                  
                <label for="formFileSm" class="form-label">Foto profile</label>
                <input
                  class="form-control form-control-sm"
                  id="formFileSm"
                  name="fotoProfile"
                  value="<?= BSCURL ?>/Resource/profile_IMG/<?= session::dataLogin(
  "fotoProfile"
) ?>"
                  type="file"
                />
              </div>
              <div class="mb-3">
                <label for="infoInput" class="form-label"
                  >Info</label
                >
                <input
                  type="text"
                  id="infoInput"
                  maxlength="15"
                  class="form-control"
                  value="<?= session::dataLogin(
                    "info"
                  ) ?>" type="text" autocomplete="off" name="info"
                />
              </div>
              <div class="mb-3">
                <label for="bioInput" class="form-label"
                  >Bio</label
                >
                <textarea
                  class="form-control"
                  id="bioInput"
                  rows="3"
                  maxlength="30"
                  name="bio" placeholder="New bio" id="formBio"><?= session::dataLogin(
                    "bio"
                  ) ?></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                Close
              </button>
              <button type="submit" class="btn btn-primary">
                Save changes
              </button>
            </div>
          </form>
          </div>
        </div>
      </div>
      
      <div class="modal fade" id="deletePostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
  <form action="<?= BSCURL ?>/profile/deletePostProfile" method="post" class="w-100">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete post img</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <?php foreach ($data["post"] as $dataPost) { ?>
    <div class="p-1 bg-light d-flex align-items-center rounded-pill mb-2">
    <img src="<?= BSCURL ?>/Resource/postDir/<?= $dataPost[
  "imgPost"
] ?>" class=" rounded-circle object-fit-cover" width="50px" height="50px" alt="">
    <h3 class=" p-2 pt-0 pb-0"><?= $dataPost["caption"] ?></h3>
   </div>
   <?php } ?>
            <input type="hidden" name="userName" value="<?= session::dataLogin(
              "userName"
            ) ?>">
            <input type="hidden" name="imgPost" value="<?= session::getImagePost() ?>">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit">
                <p class="text-start m-0 p-0">delete all post</p>
              </button>
      </div>
      </div>
    </div>
    </form>
  </div>
</div>

      <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Log-out</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>apakah anda yakin?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="<?= BSCURL ?>/profile/logout">
                <p class="text-start m-0 p-0">Log-out</p>
              </a>
      </div>
    </div>
  </div>
</div>
    </div>
</body>