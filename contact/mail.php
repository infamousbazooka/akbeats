<?php
   $to = "magnusfernandes1295@gmail.com";
   $subject = "Hello Magnus";
   $message = "Name: ".$_POST['name'] ."\nEmail: ".$_POST['email'] ."\nNumber: " . $_POST['cno'] . "\Message: ". $_POST['message'];
   $header = "From:" . $_POST['name']. " \r\n";

   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true ){
	header("Location: ../Contact/");
   }
   else{
   	echo "Failed!!! Please check your internet connection.";
   }
?>