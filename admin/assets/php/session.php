<?php
session_start();
require_once 'assets/php/user.php';
$cuser = new User();

if(!isset($_SESSION['user']))
{
    header("Location: index.php");
    die;
}

$current_email = $_SESSION['user'];

$data = $cuser->currentUser($current_email);
?>