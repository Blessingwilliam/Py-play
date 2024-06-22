<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['loggedin'] = true;
        header('Location: contact_form.html');
    } else {
        echo "Invalid username or password.";
    }
}
?>
