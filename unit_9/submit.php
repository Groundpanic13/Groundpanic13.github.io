<?php 


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailto = "flynn222@live.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have recieved an email from ".$name. ".\n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}



?>