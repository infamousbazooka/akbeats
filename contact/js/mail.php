<?php
   $to = "parijat.traders@gmail.com";
   echo $_POST['info'];
   $subject = $_POST['info'];
   $name = $_POST["name"];
   $message = "Name: " . $name . "\nEmail: " . $_POST['email'] . "\nNumber: " . $_POST['cno'] . "\nHow did you hear about us?: " . $_POST['info'] . "\nComment: " . $_POST['comment'];
   $header = "From:" . $_POST['name']. " \r\n";

   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
     echo json_encode(array("success" => true));
   }
   else
   {
      echo json_encode(array("success" => false));
   }
?>
