
<!DOCTYPE html>
<html>
<head>
 
<link rel="stylesheet" type="text/css" href="assests/style.css"> 
</head>
<body>


<section id="banner">

    <div class="main-wrapper">
    <br>
    <div class="container">
      <div class="row">
      <div class="col-md-5 cook">
      	<div class="bg-transparent">
   <h3> The highly Professional and Qualified Chef</h3>
   <p>The Highly Experinced , qualified professional chef around the country are working day night to prepare the best dishes that no one can deny of</p>
</div>
</div>
<div class="col-md-2">
	
	
</div>
   
 
 <div class="col-md-5 waiter">
  <div class="bg-transparent">
       	<h3> The highly Professional and Qualified Chef</h3>
   <p>The Highly Experinced , qualified professional chef around the country are working day night to prepare the best dishes that no one can deny of</p>
       </div>   
 </div>
   
 </div>
 <h1>Welcome to Binod's Fine Dine. Taste the best Dishes in town</h1>
    </div>
  </div>
  </section>
  <?php
//define constant
define('TITLE',"Binod's Fine Dine ");
include 'assests/includes/header.php';

function strip_bad_chars($input )
{
	$output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input );
	return $output;
}
   if(isset($_GET['item']))
   {

	$menuItem = strip_bad_chars($_GET['item']);
	$dish = $menuItems['$menuItem'];
   }
 


?>
<hr>
<div class="container">

	 <h1><?php  echo $dish['title']; ?><span class="price"><sup>$</sup><?php echo $dish['price'];?></span></h1>
	 <p><?php echo $dish['blurb']; ?></p>
	 <br>
	 <p><strong>Suggested beverage: <?php echo $dish['drink']; ?></strong></p>
	 


	</div>

<hr>
<a href="menu.php" class="button previous">&laquo;Go Back to Menu</a>


<?php

include 'assests/includes/footer.php';

?>
