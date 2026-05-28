<?php
session_start();
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $fb_url = $_POST['fb_url'];
    $tw_url = $_POST['tw_url'];
    $ig_url = $_POST['ig_url'];
    if (empty($username) || strlen($username) < 3) $errors[] = "Username must be at least 3 characters.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid Email.";
    if (empty($password) || strlen($password) < 6) $errors[] = "Password must be at least 6 characters.";
    if (empty($phone) || !is_numeric($phone)) $errors[] = "Phone must be a valid number.";
    
    if (!empty($fb_url) && !filter_var($fb_url, FILTER_VALIDATE_URL)) $errors[] = "Invalid Facebook URL.";
    if (!empty($tw_url) && !filter_var($tw_url, FILTER_VALIDATE_URL)) $errors[] = "Invalid Twitter URL.";
    if (!empty($ig_url) && !filter_var($ig_url, FILTER_VALIDATE_URL)) $errors[] = "Invalid Instagram URL.";

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_register'] = [
            'username' => $username,
            'email' => $email,
            'phone' => $phone,
            'fb_url' => $fb_url,
            'tw_url' => $tw_url,
            'ig_url' => $ig_url
        ];
        
        header("Location: registerform.php");
        exit;
    }

    $_SESSION['user'] = [
        'username' => $username,
        'email' => $email,
        'phone' => $phone
    ];
    header("Location: index.php");
    exit;
} else {
    header("Location: registerform.php");
    exit;
}