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
<li>
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
<li><a href="newuser.php" class="active">New User </a></li>
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
<h4>User Management</h4>
<h6>Edit/Update User</h6>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>User Name</label>
<input type="text" placeholder="williams1234">
</div>
<div class="form-group">
<label>Email</label>
<input type="text" placeholder="williams1234@example.com">
</div>
<div class="form-group">
<label>Password</label>
<div class="pass-group">
<input type="password" class=" pass-input" value="123456">
<span class="fas toggle-password fa-eye-slash"></span>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Mobile</label>
<input type="text" placeholder="+12163547758 ">
</div>
<div class="form-group">
<label>Role</label>
<select class="select">
<option>Manager</option>
<option>Sales Man</option>
</select>
</div>
<div class="form-group">
<label>Confirm Password</label>
<div class="pass-group">
<input type="password" class=" pass-inputs" value="123456">
<span class="fas toggle-passworda fa-eye-slash"></span>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="form-group uploadedimage">
<label> Profile Picture</label>
<div class="image-upload image-upload-new">
<div class="image-uploads">
<img src="assets/img/customer/customer1.jpg" alt="img">
<div class="productviews">
<div class="productviewscontent">
<div class="productviewsname">
<h2>macbookpro.jpg</h2>
<h3>581kb</h3>
</div>
<a href="javascript:void(0);" class="hideset">x</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
<a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
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

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>