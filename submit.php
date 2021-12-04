<?php

if(isset($POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['inputemail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailto = "keysonkitescap@gmail.com";
    $header = "From: ".$email;
    $emailtext = "A contact form has been completed by: ".$firstname." ".$lastname."\n\n".$message;

    mailto($mailto, $subject, $emailtext, $header);
    header("Location: index.php?mailsend");

}
?>