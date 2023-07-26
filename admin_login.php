<?php
session_start();
$adminUsername = "admin";
$adminPassword = "password"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $adminUsername && $password === $adminPassword) {
        $_SESSION['admin_logged_in'] = true;

        header('Location: admin_panel.php');
        exit;
    } else {
        echo "Hatalı kullanıcı adı veya şifre!";
    }
}
?>

