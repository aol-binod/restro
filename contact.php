<style type="text/css">
	.form-wrapper{
		background:rgba(0,0,0,0.5);
		padding:20px 30px;
		border-top-left-radius:50px;
		border-bottom-right-radius:50px;
	}
</style>
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
define('TITLE',"CONTACT US | Binod's Fine Dining");

include 'assests/includes/header.php';
?>
<div class="container">
	<div class="col-md-3">
	</div>
	<div class="form-wrapper col-md-6">
<h1>Get In Touch With us</h1>
<?php
//check for header injections
function has_header_injection($str)
   {
   	return preg_match("/[\r\n]/", $str);
   }


 if (isset($_POST['submit'])) 
 {
 	$name = trim($_POST['name']);
 	$email = trim($_POST['email']);
 	$phone = trim($_POST['phone']);
 	$message = $_POST['message'];
 
 //check to see if $name or $email have header injection

 if(has_header_injection($name) || has_header_injection($email)){
 	die();//if true , Kill the script
 }
 if (!$name || !$email || !$phone || !$message){
 	echo "<h4 class=\"bg-alert\"> All Fields Required.</h4><a href=\"contact.php\" class=\"btn btn-danger\">Go Back, Try Again</a>";
 	exit;
 }

//Add the recipient email to a variable
 $to = "aolbinod@gmail.com";

 //create a subject
 $subject = "$name sent you a message via form";

 //construct the message

 $message = "Name: $name\r\n";
 $message .= "Email : $email\r\n";
 $message .= "Phone : $phone\r\n";
 $message .= "Message:\r\n$message";
 //if subscribe checkbox was checked
 if(isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe'){
 	//add a new line to $message
 	$message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
 }
 $message = wordwrap($message,72);
 //set the mail headers into a variable

 $headers = "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
 $headers .= "From : $name <$email>\r\n";
 $headers .= "X-Priority: 1\r\n";
 $headers .= "X-MSMail-Priority :High \r\n";

 //send the email
 mail( $to, $subject, $message, $headers );


?>
<!--Show Success message after email has sent -->
<div class="container">
<h4>Thank you for Contacting Binod's fine Dining</h4>
<p>Please allow 24 hours for response</p>
<h5><a href="index.php" class="btn btn-success">&laquo; Go to Home Page</a></h5>
</div>


<div class="container">
<?php
}
else{


?>
   <form method="post" action="">
   	<div class="form-group">
   		<input type="text" name="name" placeholder="Your name" class="form-control">
   	</div>
   	<div class="form-group">
   		<input type="text" name="email" placeholder="Your Email" class="form-control">
   	</div>
   	<div class="form-group">
   		<input type="text" name="phone" placeholder="Your Phone" class="form-control">
   	</div>
   	<div class="form-group">
   		<textarea class="form-control" name="message"></textarea>
   	</div>
   	<div class="form-group">
   		<center><label class="text-center">Subscribe To News leter</label></center><input type="checkbox" name="subscribe" class="form-control">
   	</div>
   	<div class="form-group">
   		<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
   	</div>
   	
   </form>
   <?php
}
?>

</div>


</div>


	</div>

<?php
include 'assests/includes/footer.php';
?>
