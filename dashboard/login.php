<?php
session_start();
include '../config.php';

if(isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit();
}

if(isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: login-form.php?error=1");
        exit();
    }
}
?>