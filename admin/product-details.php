<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="POS - Bootstrap Admin Template">
<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
<meta name="author" content="Dreamguys - Bootstrap Admin Template">
<meta name="robots" content="noindex, nofollow">
<title>Dreams Pos admin template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div id="global-loader">
<div class="whirly-loader"> </div>
</div>

<div class="main-wrapper">

<!-- header function -->
<?php
include_once './include_pages/header.php'
?>
<!-- end of header function -->


<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
    <ul>
    <li class="active">
    <a href="index.php"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
    </li>
    <li class="submenu">
    <a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Product</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="productlist.php">Product List</a></li>
    <li><a href="addproduct.php">Add Product</a></li>
    <li><a href="categorylist.php">Category List</a></li>
    <li><a href="addcategory.php">Add Category</a></li>
    </ul>
    </li>
    
    
    
    <li class="submenu">
    <a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="newuser.php">New User </a></li>
    <li><a href="userlists.php">Users List</a></li>
    </ul>
    </li>
    <li class="submenu">
    <a href="javascript:void(0);"><img src="assets/img/icons/settings.svg" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
    <ul>
    <li><a href="generalsettings.php">General Settings</a></li>
    <li><a href="emailsettings.php">Email Settings</a></li>
     <li><a href="paymentsettings.php">Payment Settings</a></li>
    <li><a href="currencysettings.html">Currency Settings</a></li>
    <li><a href="grouppermissions.html">Group Permissions</a></li>
    <li><a href="taxrates.html">Tax Rates</a></li>
    </ul>
    </li>
    </ul>
    </div>
    </div>
    </div>
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Product Details</h4>
<h6>Full details of a product</h6>
</div>
</div>

<div class="row">
<div class="col-lg-8 col-sm-12">
<div class="card">
<div class="card-body">
<div class="bar-code-view">
<img src="assets/img/barcode1.png" alt="barcode">
<a class="printimg">
<img src="assets/img/icons/printer.svg" alt="print">
</a>
</div>
<div class="productdetails">
<ul class="product-bar">
<li>
<h4>Product</h4>
<h6>Macbook pro	</h6>
</li>
<li>
<h4>Category</h4>
<h6>Computers</h6>
</li>
<li>
<h4>Sub Category</h4>
<h6>None</h6>
</li>
<li>
<h4>Brand</h4>
<h6>None</h6>
</li>
<li>
<h4>Unit</h4>
<h6>Piece</h6>
</li>
<li>
<h4>SKU</h4>
<h6>PT0001</h6>
</li>
<li>
<h4>Minimum Qty</h4>
<h6>5</h6>
</li>
<li>
<h4>Quantity</h4>
<h6>50</h6>
</li>
<li>
<h4>Tax</h4>
<h6>0.00 %</h6>
</li>
<li>
<h4>Discount Type</h4>
<h6>Percentage</h6>
</li>
<li>
<h4>Price</h4>
<h6>1500.00</h6>
</li>
<li>
<h4>Status</h4>
<h6>Active</h6>
</li>
<li>
<h4>Description</h4>
<h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</h6>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-12">
<div class="card">
<div class="card-body">
<div class="slider-product-details">
<div class="owl-carousel owl-theme product-slide">
<div class="slider-product">
<img src="assets/img/product/product69.jpg" alt="img">
<h4>macbookpro.jpg</h4>
<h6>581kb</h6>
</div>
<div class="slider-product">
<img src="assets/img/product/product69.jpg" alt="img">
<h4>macbookpro.jpg</h4>
<h6>581kb</h6>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>