<?php 
$companyName = "Binod's Fine Dine";
include "arrays.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo TITLE; ?></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assests/style.css">
</head>
<body id="final-example">
	<div class="main-wrapper">
	<header>
	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="450">
  <div class="container-fluid">
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Binod's Restaurant</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <?php
    include "assests/includes/nav.php";
      ?>
     
    </div>
  </div><!--Container -->
</div><!-- container fluid-->
</nav>
</header>