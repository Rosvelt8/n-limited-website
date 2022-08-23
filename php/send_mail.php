<?php
$user_name= htmlspecialchars($_POST['name']);
$user_email= htmlspecialchars($_POST['email']);
$user_subject= htmlspecialchars($_POST['subject']);
$user_message= $user_name.": ".htmlspecialchars($_POST['message']);
$email_admin="rostandnoumi@yahoo.co.uk";

$header= array(
    'From'=> $user_email,
    'Reply-To'=> $user_email
);

if(!mail($user_email, $user_subject, $user_message, $header)){
    $error_message= "there was an error sending the email, Try again!"
}
header('location: ../contact.html');