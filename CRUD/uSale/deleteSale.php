<?php


ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
// Process delete operation after confirmation
$connect = mysqli_connect('localhost', 'root', 'root', 'test');
$id = $_GET["id"];
mysqli_query($connect, "DELETE FROM `sale` WHERE `id_sale`= '$id'");
header("location:/CRUD/uSale/adminSale.php");


