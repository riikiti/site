<?php
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
session_start();
require_once 'connect.php';
$login = $_SESSION['user']['login'];
$password = md5($_POST['password']);
$password_confirm = md5($_POST['password_confirm']);
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
if (mysqli_num_rows($check_user) > 0) {
    if ($password === $password_confirm ) {
        $path=$_SESSION['user']['avatar'];
        if(isset($_FILES['avatar']['name']) && $_FILES['avatar']['name'] !=""){
            var_dump($_FILES);
            exit(1);
            $path = 'uploads/' . time() . $_FILES['avatar']['name'];
            if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
                $_SESSION['message'] = 'Ошибка при загрузке сообщения';
                header('Location: ../register.php');
            }

        }
        if(isset($_POST['email']) && $_POST['email'] !=""){
            $email = $_POST['email'];
        }
        $change_user = mysqli_query($connect, "UPDATE `users` SET email='$email',password='$password',avatar='$path' WHERE login='$login'");
        if($change_user){
            $_SESSION['user'] = [
                "avatar" => $path ,
                "email" => $email
            ];
        }
        //print_r( $change_user);
        $_SESSION['message'] = 'Date change';
        header('Location: ../profile.php');
        die(1);
    } else {
        $_SESSION['message'] = 'error1';
        header('Location: ../logistic.php');
    }
} else {
    $_SESSION['message'] = 'error2';
    header('Location: ../logistic.php');
}

?>


