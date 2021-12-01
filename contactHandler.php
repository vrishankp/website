<?php
    include 'header.php';
    
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $comment = $_POST["comment"];
    $headers = "From:no-reply@contact.vrishankp.com";
    $to = "vrishank@vrishankp.com";
    
    $message = "Email: " . $email . "\n" . wordwrap("Message: " . $comment, 70);
    
    $sent = mail($to, $subject, $message, $headers);
    
    if ($sent){
        $_SESSION["sentSuccess"] = true;
    } else {
        $_SESSION["sentError"] = true;
    }
    
    header('Location: contact');

?>