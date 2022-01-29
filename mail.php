<?php

require_once 'vendor/connect.php';
$login = $_POST['login'];

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
$user = mysqli_fetch_assoc($check_user);

$subject = 'Востановление пороля';
$to = $user['email'];
$from = 'kurskiy.ruslan@lab3';
$message = ("url: tur2/vendor/chPass.php?login=$login");


if(mail($to,$subject,$message)){
    $_SESSION['message'] = 'mail send';
    header('Location: ../logistic.php');
}
else{
    $_SESSION['message'] = 'no send';
    header('Location: ../logistic.php');
}


?>