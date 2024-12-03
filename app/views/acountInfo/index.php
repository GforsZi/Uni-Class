<body>
  <main>
<div class="d-flex justify-content-center vw-100 vh-100 align-items-center">
 <div class="container bg-light h-75 border border-secondary-subtle rounded m-2 mt-0 mb-0 overflow-scroll">
  <div class="mt-3">
   <form class="d-flex mb-3" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class="overflow-scroll">
      <?php foreach ($data["userN"] as $UserName) { ?>
    <div class="w-100 p-1 bg-body rounded-pill mb-2">
    <a href="<?= BSCURL; ?>/acountInfo/detailAcount/<?= $UserName["user_name"]; ?>" class="d-flex align-items-center text-decoration-none link-dark">
    <img src="<?= BSCURL ?>/Resource/profile_IMG/<?= $UserName[
  "foto_profile"
] ?>" class=" rounded-circle object-fit-cover" width="50px" height="50px">
    <h3 class=" p-2 pt-0 pb-0"><?= $UserName["user_name"] ?></h3>
    </a>
   </div>
   <?php } ?>
    </div>
  </div>
 </div>
</div>
  </main>
</body>