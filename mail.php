<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    $EmailTo = "elijaharhinful8@gmail.com";
    $Subject = "New Message Received From Edna Frimpong Website";

    // prepare email body text
    $Fields = "Name: $name\n";
    $Fields .= "Email: $email\n";
    $Fields .= "Message: $message\n";

    // send email
    $success = mail($EmailTo, $Subject, $Fields, "From:" . $email);

    if ($success) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request method.";
}
?>
