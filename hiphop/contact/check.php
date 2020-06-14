<?php
//print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];
if(trim($email)=='')
$error = 'Type your email';
else if(trim($message)=='')
$error = 'Type your message';
else if(strlen($message) < 10)
$error = 'Your message must be more than 10 characters';

if($error != ''){
    echo $error;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Testing msg")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('flakeonme@gmail.com', $subject, $message, $headers);

header('Location: contact.php');

?>