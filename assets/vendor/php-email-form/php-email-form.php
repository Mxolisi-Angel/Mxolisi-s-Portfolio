<?php
$to_email = "mxolisiphewa5@gmail.com";
$subject = "Send email via PHP";
$body = "Hi this is a test email sent by PHP script";
$headers ="From: mxolisiphewa5@gmail.com";

if(mail($to_email, $subject, $body, $headers)){
    echo "Email Sent to".$to_email."...";
}

else{
    echo "Email sending failed";
}


?>