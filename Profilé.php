<?php
include 'db_connection.php';

$qry = mysqli_query($conn, "SELECT * FROM produits WHERE categorie = 'Profilé' ");

?>


<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Profilés & Accessoiresl </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="shortcut icon" href="favicon.ico">

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/style.css">

  <script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body>
  <div id="fh5co-page">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

      <h1 id="fh5co-logo"><a href="index.html"><img class="imo" src="images/logo.png" alt=" "></a></h1>
      <nav id="fh5co-main-menu" role="navigation">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="produits.php">produits</a></li>
          <li><a href="about.html">QUI SOMMES NOUS?</a></li>
          <li><a href="Contact/Contact.php">contactez-nous</a></li>
        </ul>
      </nav>

      <div class="fh5co-footer">
        <p><small>&copy; 2020 gratimetal.com All Rights Reserved.</span> <span>Designed by
              Lamjad ndour</a> </span> </small></p>
        <ul>
          <li><a href="#"><i class="icon-facebook"></i></a></li>
          <li><a href="#"><i class="icon-twitter"></i></a></li>
          <li><a href="#"><i class="icon-instagram"></i></a></li>
          <li><a href="#"><i class="icon-linkedin"></i></a></li>
        </ul>
      </div>

    </aside>


    <div id="main-content" class="container " class="row animate-box" data-animate-effect="fadeInLeft" class="fh5co-narrow-content">
      <h2 id="categories-title" class="texttop text-center">Profilés & Accessoires</h2>
      <br>
      <div class="row mb-5">
        <div class="col-md-12  ">
          <div class="row mb-5">
            <?php while ($result = mysqli_fetch_array($qry)) {
              $id  = $result['id'];
              $img  = $result['img'];
              $name = $result['name'];
              echo '<div class="col-md-3 col-sm-6 col-xs-12 col-xxs-12">
                          <div class="block-4 text-center border">
                            <figure class="block-3-image">
                              <a href="product-page.php?id=' . $id . '"><img width="250px" height="250px" src="images/Produits/' . $img . '" alt="image du ' . $name . '"></a>
                            </figure>
                            <div class="block-4-text p-4">
                              <p class="mb-0">' . $name . '</p>
                            </div>
                          </div>
                        </div>';
            }
            ?>
          </div>
        </div>
      </div>


      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countTo.js"></script>


      <script src="js/main.js"></script>

</body>

</html>