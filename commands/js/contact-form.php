<?php

if (isset($_POST['submit'])) {
    $discord = $_POST['discord'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "sarabakhishova20@gmail.com";
    $headers = "Email from: ".$email;
    $text = "Discord: ".$discord."\n\n".$message."\n\nContact this user by either emailing them at: ".$email."\nor by contacting them via Discord: ".$discord;

    mail($mailTo, $subject, $text, $headers);
    header("Location: contact.php?mailsend");
}