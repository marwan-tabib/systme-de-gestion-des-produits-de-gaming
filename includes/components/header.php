<?php 
    include('includes/scripts.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/main.css">
    <title><?php echo $title ?></title>
  </head>
  <body>
    <style>
    </style>
    <div class="container-box">
      <!-- Nav Bar - Component -->
      <?php include'includes/components/nav-bar.php'; ?>
      <div class="content-container flex-row d-flex">
        <div class="side-bar-box col-md-2 col-2 bg-white">
          <div class="row bg-light py-3 px-2 my-2 shadow shadow-sm">
            <a href="index.php">
              <span class="icon col-md-3 col-12"><i class="fa fa-lg fa-home"></i></span>
              <span class="page col">Home</span>
            </a>
          </div>
          <div class="row bg-light py-3 px-2 shadow shadow-sm">
            <a href="category.php">
              <span class="icon col-md-3 col-12"><i class="fa-brands fa-lg fa-dribbble"></i></span>
              <span class="page col">Categories</span>
            </a>
          </div>
        </div>
        <div class="content-box col">
          <section class="container">

            <?php if (isset($_SESSION['action'])): ?>
            <div class="<?php echo $_SESSION['action']['class'] ?>" role="alert">
              <strong><?php echo $_SESSION['action']['status'] ?></strong>
                <?php 
                  echo $_SESSION['action']['message']; 
                  unset($_SESSION['action']);
                ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></span>
              </div>
            <?php endif ?>