<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "dusanrohar@gmail.com";
    $from = $_POST["email"];
    $message = $_POST["message"];
    $subject = "Nová správa";

    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    $result = mail($to, $subject, $message, $headers);

    if ($result) {
        echo "Správa bola odoslaná!";
    } else {
        echo "Správa nebola odoslaná!";
    }
}
?>
