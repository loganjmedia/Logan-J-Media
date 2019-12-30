<?php
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$sub = $_POST['subject'];
$message = $_POST['message'];
$formcontent = "From: $name \n Message: $message";
$recipient = "loganjmedia@gmail.com";
$subject = "$sub";
$mailheader = "Email: $email \n Telephone: $tel \r\n";
mail ($recipient,$subject,$formcontent,$mailheader) or die ("ERROR!");
echo "Thank You!";
?>