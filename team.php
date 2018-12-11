<link rel="stylesheet" type="text/css" href="assests/style.css">
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
define('TITLE', "Team | Binod's Fine Dine");

include "assests/includes/header.php";




?><div class="container row">
<?php

foreach ($teamMembers as $member) {
  

?>

<div class="col-md-4">
  <img class="img-responsive" src="assests/images/<?php echo $member['img']; ?>.jpg" alt ="<?php echo $member['name']; ?>">
  <h2>Name : <?php echo $member['name']; ?> </h2>
</div>




<?php
}//closing of for each loop
?>
</div>
<br>
<hr>
<?php


include "assests/includes/footer.php";

?>