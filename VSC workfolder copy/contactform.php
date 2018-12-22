<?php

if(isset($_POST['submit'])) {
    $name = $_POST['firstname'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];
    
    $mailTo = "Jihan.zaki@outlook.com";
    $headers = "From: ".$mailfrom;
    $txt = "You've recieved an email from: ".$name.".\n\n".$message;

    mail($mailto, $header, $txt);
    header("Location: first.html?mailsend");
}
?>