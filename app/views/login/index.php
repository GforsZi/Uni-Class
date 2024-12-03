<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login page</title>
  <link rel="stylesheet" href="framework/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
  <link rel="stylesheet" href="<?= BSCURL ?>/Resource/externalCode/bootstrap-5.3.3-dist/css/bootstrap.min.css?v=<?php echo time(); ?>">
  <body>
<section class="vh-100">
  <div class="container h-100">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="">
        <div class=" rounded">
          <div class="card-body text-center">

                <img width="60px" src="<?= BSCURL ?>/Resource/IMG/1725175721622.png" alt="">
            <div class=" mt-md-2 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">
              Login</h2>
              <form class="frmLogin" action="<?= BSCURL ?>/login/login" method="post">

              <div data-mdb-input-init class="form-outline form-white mb-3">
                <input type="text" autocomplete="off" name="user_name" class="form-control form-control-sm" placeholder="UserName" />
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="password" name="password" class="form-control form-control-sm" autocomplete="off" placeholder="Password" />
              </div>

                    <button
                      type="submit"
                      class="btn btn-outline-dark w-100"
                      data-bs-toggle="modal"
                      data-bs-target="#exampleModal"
                    >Login</button>
              </form>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="<?= BSCURL ?>/register" class=" fw-bold">Sign Up</a>
              </p>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
        <?php session::flashPage(); ?>
</section>
  </body>