<?php
session_start();

$connect = mysqli_connect('localhost', 'root', 'root', 'test');

$discount = $_POST['discount'];

$date_start =$_POST['date_start'];
$date_finish =$_POST['date_finish'];
$today=date("Y-m-d H:i:s");


/*
var_dump($tour_name);

var_dump($_FILES['tour_photo']);

*/



mysqli_query($connect, "INSERT INTO `sale`(`id_sale`, `discount`, `date_start`, `date_finish`) VALUES (NULL ,'$discount','$date_start','$date_finish')");
header('Location: /CRUD/uSale/adminSale.php');
?>

