<?php


// Process delete operation after confirmation
$connect = mysqli_connect('localhost', 'root', 'root', 'test');
$id = $_GET["id"];
mysqli_query($connect, "DELETE FROM `client-state` WHERE `id_cs`= '$id'");
header("location:/CRUD/uCS/adminCS.php");

