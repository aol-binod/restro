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
define('TITLE', "Menu | Binod's Fine Dine");

include "assests/includes/header.php";




?>
<div class="container">
<ul class="menu-list list-unstyled">
<?php
foreach($menuItems as $dish => $item){
  ?>
<li> <a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?><sup>$</sup><?php echo $item['price']; ?></a> </li>
<?php 
}
 ?>

</ul>
</div>

<?php


include "assests/includes/footer.php";
?>
</body>
</html>