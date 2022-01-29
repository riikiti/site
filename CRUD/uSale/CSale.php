<?php
session_start();

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
$connect = mysqli_connect('localhost', 'root', 'root', 'test');

$discount = $_POST['discount'];

$date_start =$_POST['date_start'];
$date_finish =$_POST['date_finish'];
$today=date("Y-m-d H:i:s");

var_dump($date_start);
/*
var_dump($tour_name);

var_dump($_FILES['tour_photo']);

*/



mysqli_query($connect, "INSERT INTO `sale`(`id_sale`, `discount`, `date_start`, `date_finish`) VALUES (NULL ,'$discount','$date_start','$date_finish')");
header('Location: /CRUD/uSale/adminSale.php');
?>

