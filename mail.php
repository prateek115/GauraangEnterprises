<?php
//get data from form  

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email= $_POST['email'];
$number= $_POST['number'];
$area= $_POST['area'];
$message= $_POST['subject'];
$to = "youremail@mail.com";
$subject = "Mail From website";
$txt ="FName = ". $name ."\r\n LName = " . $lname . "\r\n  Email = " . $email . "\r\n  Number = " . $number . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>