<?php
session_start();
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
    if (empty($password) || strlen($password) < 6) {
        $errors[] = "Password is required and must be at least 6 characters.";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_email'] = $email;
        header("Location: loginform.php");
        exit;
    }

    $_SESSION['user'] = [
        'email' => $email
    ];
    header("Location: products.php");
    exit;
} else {
    header("Location: loginform.php");
    exit;
}