<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
// Include config file
require_once "../config2.php";
session_start();
// Define variables and initialize with empty values

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $param_name = $_SESSION['user']['login'];
    $text = $_POST['review'];
    $date =$_POST['date'];
    $state=$_POST['id_state'];
    if($state ==0){
        $state=0;
    }

   // var_dump($date);
    $sql = "INSERT INTO `reviews` (`id_reviews`, `login`,`text` ,`date`,`id_state`) VALUES (NULL ,'".$param_name."', '".$text."','".$date."','". $state."')";
    $addreview = mysqli_query($link, $sql);

    if($addreview !== false){
        header('Location:/index.php');
    }else{
        var_dump($addreview);
    }


}



?>