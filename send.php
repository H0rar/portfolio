<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["email"];
    $subject = "Testovací email";
    $message = $_POST["message"];
    $headers = "From: dusanrohar@gmail.com"; // Zadajte svoju emailovú adresu
    $headers .= "Content-type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email bol úspešne odoslaný!";
    } else {
        echo "Nastala chyba pri odosielaní emailu!";
    }
}
?>
