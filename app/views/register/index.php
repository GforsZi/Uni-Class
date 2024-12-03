<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register page</title>
  <link rel="stylesheet" href="framework/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
  <link rel="stylesheet" href="<?= BSCURL ?>/Resource/externalCode/bootstrap-5.3.3-dist/css/bootstrap.min.css?v=<?php echo time(); ?>">
<body>
    <section class="vh-100">
      <div class="container h-100">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="">
            <div class="rounded">
              <div class="card-body text-center">
                
                <div class="mt-md-2 pb-5">
               <img width="60px" src="<?= BSCURL ?>/Resource/IMG/1725175721622.png" alt="">
                  <h2 class="fw-bold mb-2 text-uppercase">Register
                  </h2>
                  <form action="<?= BSCURL ?>/register/tambah" method="post">
                    <div
                      data-mdb-input-init
                      class="form-outline form-white mb-3"
                    >
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        maxlength="17"
                        name="user_name"
                        required="on"
                        autocomplete="off"
                        placeholder="UserName"
                      />
                    </div>

                    <div
                      data-mdb-input-init
                      class="form-outline form-white mb-4"
                    >
                      <input
                        type="password"
                        id="typePasswordX"
                        class="form-control mb-1 form-control-sm"
                        maxlength="200"
                        name="password"
                        required="on"
                        autocomplete="off"
                        placeholder="Password"
                      />
                      <input
                        type="password"
                        id="typePasswordX"
                        class="form-control form-control-sm"
                        name="cfrmpassword"
                        placeholder="confirm Password"
                        maxlength="200"
                        autocomplete="off"
                        required="on"
                      />
                    </div>

                    <button
                      type="submit"
                      class="btn btn-outline-dark w-100"
                    >
                      Register
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php session::flashPage(); ?>
    </section>
</body>