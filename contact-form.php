<?php

if(isset($_POST['submit'])){
    $to = "muhammad.49331@iqra.edu.pk";
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $txt = $_POST['message'];
    $headers = "From: " .$email . "\r\r" . 
    "CC: somebodyelse@example.com";

    mail($to,$subject,$txt, $headers);

    header("Location: contact.html");
}

?>