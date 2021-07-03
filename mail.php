<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "gowthammadhusuthanan067@gmail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@theclvr.com" . "\r\n" .
"CC: gowthammadhusuthanan067@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

?>