<?php   
  
    //--- Header include
    $title = "Home";
    include"includes/components/header.php";

    // Redirect
    if(!isset($_SESSION['user'])){ header('location:login.php'); die(); }
    $products = getproducts($conn);
    $platforms = getPlatforms($conn);

    //--- Body includes
      include'includes/components/statistique.php';
      include"includes/components/model.php"; 
      include"includes/components/products_table.php";

    //--- Footer include
    include"includes/components/footer.php"
  ?>
