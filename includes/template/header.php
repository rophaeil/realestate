
<?php 
if( empty($_SESSION) && !isset($_SESSION)){
session_start(); 

include("includes/functions/functions.php");


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- --------------css files ------------>
    <link rel="stylesheet" href="layout/css/normalize.css">
    


    <!-- <link rel="stylesheet" href="layout/css/demo.css" /> -->
    <!-- <link rel="stylesheet" href="layout/css/core.css" class="template-customizer-core-css" /> -->
    <!-- <link rel="stylesheet" href="layout/css/theme-default.css" class="template-customizer-theme-css" /> -->
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="layout/css/perfect-scrollbar.css" />

    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="layout/img/logo.png" />
    <!-- Libraries -->
    <link rel="stylesheet" href="includes/libraries/fontawesome/all.min.css">
    <link rel="stylesheet" href="includes/libraries/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="includes/libraries/fontawesome-free-6.0.0-web/css/all.min.css">

<!--------------------------------------------Header & NAV Styling  ------->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="layout/header_nav_styling/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="layout/header_nav_styling/css/animate.css">
    
    <link rel="stylesheet" href="layout/header_nav_styling/css/owl.carousel.min.css">
    <link rel="stylesheet" href="layout/header_nav_styling/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="layout/header_nav_styling/css/magnific-popup.css">

    <link rel="stylesheet" href="layout/header_nav_styling/css/aos.css">

    <link rel="stylesheet" href="layout/header_nav_styling/css/ionicons.min.css">

    <link rel="stylesheet" href="layout/header_nav_styling/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="layout/header_nav_styling/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="layout/header_nav_styling/css/flaticon.css">
    <link rel="stylesheet" href="layout/header_nav_styling/css/icomoon.css">
    <link rel="stylesheet" href="layout/header_nav_styling/css/style.css">
    <link rel="stylesheet" href="layout/css/style.css">

<!--------------------------------------------Header & NAV Styling  ------->
    <title><?php getTitle(); ?></title>
</head>



<body>
