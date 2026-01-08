<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $message = htmlspecialchars($_POST["message"] ?? "");

    if ($name && $email) {
        echo "Děkujeme za zprávu, $name!";
    } else {
        echo "Vyplňte prosím všechna povinná pole.";
    }
}