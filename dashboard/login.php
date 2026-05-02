<?php
session_start();
include '../config.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $_SESSION['admin'] = true;
        header("Location: login-form.php?success=1");
        exit();
    } else {
        header("Location: login-form.php?error=1");
        exit();
    }
}
?>