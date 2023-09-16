<?php
session_start();
include("init.php");

$length = 10;
$user_id =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, $length);


if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    } else {
        echo "Invalid email address";
        exit;
    }
    if (strlen($password) < 5) {
        echo "Password should be upto 5 characters";
        exit;
    }
    $query = mysqli_query($init, "SELECT * FROM general_data WHERE email_address = '$email'");
    $is_it = mysqli_num_rows($query);
    if ($is_it > 0) {
        echo "Account already exists";
        exit;
    } else {
        $query = mysqli_query($init, "INSERT INTO general_data VALUES ('$user_id', '$email', '$password')");
        $_SESSION['user'] = $email;
        echo "Account created successfully";
        exit;
    }
}
if (isset($_POST['email_2'], $_POST['password_2'])) {
    $email = $_POST['email_2'];
    $password = $_POST['password_2'];

    if (strlen($email) < 1 || strlen($password) < 1) {
        echo "Enter valid details";
        exit;
    }

    $query = mysqli_query($init, "SELECT user_id FROM general_data WHERE email_address = '$email' AND password = '$password'");
    $is_it = mysqli_num_rows($query);
    if ($is_it > 0) {
        $_SESSION['user'] = $email;
        echo "Successful";
        exit;
    } else {
        echo "Wrong Info";
    }
}
