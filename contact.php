<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'Potential Client';
    $email_subject = 'New Message';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Phone: $phone.\n".
                  "Message: $message.\n";

    $to ="ghabiman@icloud.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");

?>