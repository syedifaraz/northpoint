<?php
if (!empty($_GET['name']) && !empty($_GET['email'])) {
    
    
    $name          = $_GET['name'];    
    $email        = $_GET['email'];  	
    $phone        = $_GET['phone']; 
    $message        = $_GET['message']; 
 
    
    $headers =    "From: $email";
    $headers     = "Reply-To: $email\r\n";
    $headers    .= "Return-Path: info@northpoint.in\r\n";
    $headers 	.= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers    .= "CC: info@northpoint.in\r\n";
    $headers    .= "BCC: info@northpoint.in\r\n";
    $subject     = "Website: $email";    
    $mail                = "
    Name:             ".$name."    
    Email:            ".$email."        
    Phone:            ".$phone."; 
    Query:            ".$message."";
  
  mail("info@northpoint.in", $subject, $mail, $headers);

      //readfile("thank-you.html");    
    //exit;
echo '<div id="flash-msg" class="alert alert-success alert-dismissable" data-aos="fade-down"  role="alert">Thank you! We have received your request</div> 
		<script>$(document).ready(function(){$("#flash-msg").delay(5000).fadeOut("slow");});</script>';
}else{
    //readfile("error.html");}
    echo '<div id="flash-msg" class="alert alert-danger alert-dismissable" data-aos="fade-down"  role="alert">Something Went Wrong Please try again</div>
	<script>$(document).ready(function(){$("#flash-msg").delay(5000).fadeOut("slow");});</script>';
}
?>