<?php
// Set response type
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mxolisiphewa5@gmail.com"; // Replace with your real email address
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

    if (mail($to, $subject, $email_body, $headers)) {
        echo json_encode(["message" => "Message sent successfully."]);
    } else {
        http_response_code(500);
        echo json_encode(["message" => "Message could not be sent."]);
    }
} else {
    http_response_code(403);
    echo json_encode(["message" => "Invalid request."]);
}
?>
