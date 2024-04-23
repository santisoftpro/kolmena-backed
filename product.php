<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>KOLMERA GROUP</title>
    <!-- Favicon -->
    <link rel="icon" href="kolmena/img/favcon.png">
    <!-- Bundle -->
    <link rel="stylesheet" href="vendor/css/bundle.min.css">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="vendor/css/revolution-settings.min.css">
    <link rel="stylesheet" href="vendor/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="vendor/css/LineIcons.min.css">
    <link rel="stylesheet" href="vendor/css/jquery-ui.bundle.css">
    <link rel="stylesheet" href="vendor/css/select2.min.css">
    <link rel="stylesheet" href="vendor/css/slick-theme.css">
    <link rel="stylesheet" href="vendor/css/slick.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="kolmena/css/settings.css">
    <link rel="stylesheet" type="text/css" href="kolmena/css/navigation.css">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="kolmena/css/style.css">
    <link rel="stylesheet" href="assets/css/singleproduct.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" /> -->
</head>
<style>
  /* Adjust z-index and positioning for the dropdown menu */
  /* Style for the sub-dropdown menu */
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    position: absolute;
    top: 0;
    left: 100%;
    z-index: 1000;
    display: none;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
}

.dropdown-submenu:hover .dropdown-menu {
    display: block;
}


</style>
<body data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">

<!--Preloader-->

<div class="loader" id="loader-fade">
    <div class="position-relative">
        <div class="load">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<!--End Preloader-->


<!--Header Start-->
<header class="cursor-light">

    <!--Navigation-->
    <nav class="navbar navbar-top-default nav-radius navbar-expand-lg pb-0">
        <div class="container">
            <a href="javascript:void(0)" title="Logo" class="logo scroll">
                <!--Logo Default-->
                <img src="kolmena/img/logo.png" alt="logo" class="logo-dark logo-default">
                <img src="kolmena/img/logo.png" alt="logo" class="logo-light logo-scrolled">
            </a>

            <!--Nav Links-->
<!--Nav Links-->
<div class="collapse navbar-collapse">
    <div class="navbar-nav ml-250">
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link" href="index.php#about">About</a>
        <a class="nav-link" href="index.php#work">Projects</a>
        <a class="nav-link" href="index.php#news">Blog</a>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="serviceDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Service
            </a>
            <div class="dropdown-menu" aria-labelledby="serviceDropdown">
                <div class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#" id="subDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Flat Plate Solar Water Heater
                    </a>
                    <div class="dropdown-menu" aria-labelledby="subDropdown">
                        <a class="dropdown-item" href="#">On-Grid Power System</a>
                        <a class="dropdown-item" href="#">Off-Grid Power System</a>
                      
                        <!-- Add more submenu items as needed -->
                    </div>
                </div>
                <div class="dropdown-divider"></div> 
                <div class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle" href="#" id="subDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Evacuated Tube Collector
                    </a>
                    <div class="dropdown-menu" aria-labelledby="subDropdown">
                        <a class="dropdown-item" href="#">Hybrid Power System</a>
                        <a class="dropdown-item" href="#">Pico Power Sytem</a>
                        <!-- Add more submenu items as needed -->
                    </div>
                </div>
                
                <!-- Add more dropdown items as needed -->
            </div>
        </div>
        <a class="nav-link" href="index.php#contactus">Contact</a>
        <a class="nav-link active" href="home-page3.php">Product</a>
    </div>
</div>

<!--Side Menu Button-->
            <a href="javascript:void(0)" class="parallax-btn sidemenu_btn" id="sidemenu_toggle">
                <div class="animated-wrap sidemenu_btn_inner">
                    <div class="animated-element">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </a>
        </div>
    </nav>

    <!--Side Nav-->
    <div class="side-menu hidden">
        <div class="inner-wrapper">
            <span class="btn-close link" id="btn_sideNavClose"></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#work">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#news">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kolmena/news.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contactus">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="home-page3.php">Product</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer text-white w-100">
                <ul class="social-icons-simple">
                    <li><a class="wow fadeInUp facebook-bg-hvr" href="javascript:void(0);"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a class="wow fadeInDown twitter-bg-hvr" href="javascript:void(0);"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a class="wow fadeInUp instagram-bg-hvr" href="javascript:void(0);"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <p class="text-white">&copy; 2024 KOLMENA GROUP. Made With Love by INETWORKA LTD</p>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->
</header>
<br>
<br>
<br>
<section class="bg-white" >
<!-- view product -->

<?php
  require_once './admin/mysqli/db.php';
  $sql = "SELECT * FROM posts WHERE product_id='$_GET[id]'";
  $result = mysqli_query($conn, $sql);
  foreach ($result as $row){
    ?>

 
<div class = "card-wrapper">
    <div class = "card">
      <!-- card left -->
      <div class = "product-imgs">
        <div class = "img-display">
          <div class = "img-showcase">
            <?php 
                foreach(json_decode($row['images']) as $image) {
                ?>
                  <img src = "admin/assets/php/uploads/<?=$image; ?>" alt = "shoe image">
         
            <?php
                }

            ?>
            
          </div>
        </div>
        <div class = "img-select">
        <?php 
        $i=1;
                foreach(json_decode($row['images']) as $image) {
                ?>
          <div class = "img-item">
            <a href = "#" data-id = "<?=$i++;?>">
              <img src = "admin/assets/php/uploads/<?=$image; ?>" alt = "shoe image" width="200" height="200">
            </a>
          </div>
        
         
            <?php
                }

            ?>
         
        </div>
      </div>
      <!-- card right -->
      <div class = "product-content">
        <h4 class = "product-title"><?=$row['productName'] ?></h4>
        <a href = "#" class = "product-link">visit Kolmena Group</a>
        <div class = "product-rating">
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star"></i>
          <i class = "fas fa-star-half-alt"></i>
          <span>4.7(21)</span>
        </div>

        <div class = "product-price">
          <p class = "last-price">Old Price: <span>0</span></p>
          <p class = "new-price">New Price: <span><?=$row['price']?></span></p>
        </div>

        <div class = "product-detail">
          <h2>about this item: </h2>
          <p><?=$row['description'] ?></p>
         
          <ul>
            <li>Category: <span><?= $row['category'] ?></span></li>
            <li>Shipping Area: <span>All over the world</span></li>
            <li>Shipping Fee: <span>Free</span></li>
          </ul>
        </div>

        <div class = "purchase-info">
          <!-- <input type = "number" min = "0" value = "1"> -->
          <button type = "button" class = "btn">
            BankNumber</i>
          </button>
          <button type = "button" class = "btn">1234567890123</button>
        </div>
        <div class = "purchase-info">
          <!-- <input type = "number" min = "0" value = "1"> -->
          <button type = "button" class = "btn">
            MobileMoney</i>
          </button>
          <button type = "button" class = "btn">+250783121222</button>
        </div>

        <div class = "social-links">
          <p>Share At: </p>
          <a href = "#">
            <i class = "fab fa-facebook-f"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-twitter"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-instagram"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-whatsapp"></i>
          </a>
          <a href = "#">
            <i class = "fab fa-pinterest"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php
  }

?>
  </section>

<!--Footer Start-->
<section class="text-center bg-blue m-0">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social">
                    <ul class="list-unstyled text-white">
                      <li><a class="wow fadeInUp facebook-bg-hvr" href="https://www.facebook.com/p/Kolmena-Group-100086357093029/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown twitter-bg-hvr" href="https://twitter.com/kolmenaltd"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInDown linkedin-bg-hvr" href="https://www.linkedin.com/company/kolmena-group-ltd"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp instagram-bg-hvr" href="https://www.instagram.com/kolmenagroup/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <p class="company-about fadeIn text-capitalize">&copy; 2024 kolmena Group ltd. Made With Love By <a href="javascript:void(0);">Inetworka ltd</a></p>
            </div>
        </div>
    </div>
</section>

<!--Footer End-->

<!--G0 Top-->
<div class="go-top"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></div>
<!--End Go Top-->


<!-- JavaScript -->
<script src="vendor/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="vendor/js/jquery.fancybox.min.js"></script>
<script src="vendor/js/owl.carousel.min.js"></script>
<script src="vendor/js/jquery.cubeportfolio.min.js"></script>
<script src="vendor/js/jquery.appear.js"></script>
<script src="vendor/js/wow.min.js"></script>
<script src="vendor/js/flip.js"></script>
<script src="vendor/js/jquery-ui.bundle.js"></script>
<script src="vendor/js/select2.min.js"></script>
<script src="vendor/js/jquery.hoverdir.js"></script>
<script src="vendor/js/hover-item.js"></script>
<script src="vendor/js/slick.min.js"></script>
<script src="vendor/js/parallaxie.min.js"></script>
<script src="vendor/js/isotope.pkgd.min.js"></script>
<script src="vendor/js/particles.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="vendor/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="vendor/js/extensions/revolution.extension.actions.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.migration.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendor/js/extensions/revolution.extension.video.min.js"></script>
<!--contact form-->
<script src="vendor/js/contact_us.js"></script>
<!-- custom script -->
<script src="https://maps.googleapis.com/maps/api/geocode/json?latlng=-1.9567151,30.1155371&key=AIzaSyC6PLYoPLUohNQQFZUL9Ap-xcS_trAivfQ"></script>
<script src="kolmena/js/maps.min.js"></script>
<script src="kolmena/js/script.js"></script>
<script src="assets/js/singleProduct.js"></script>

</body>
</html>

