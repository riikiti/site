<?php
require_once 'connect.php';

$login = $_POST['login'];

$password = md5($_POST['password']);
$password_confirm = md5($_POST['password_confirm']);
if ($password === $password_confirm ) {
    $change_user = mysqli_query($connect, " UPDATE `users` SET password='$password' WHERE login='$login'");
}
  header('Location: ../logistic.php');

?>
