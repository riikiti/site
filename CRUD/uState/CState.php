<?php
session_start();

$connect = mysqli_connect('localhost', 'root', 'root', 'test');
$tittle= $_POST['tittle'];
$description = $_POST['description'];
$preview = $_FILES['preview']["name"];
$content = $_FILES['content']["name"];
$sale =$_POST['sale'];
$today=date("Y-m-d H:i:s");
$price =$_POST['price'];

/*
var_dump($tour_name);

var_dump($_FILES['tour_photo']);

*/
$path_preview = 'uploads/' . time() . $_FILES['preview']["name"];
$path_content = 'uploads/' . time() . $_FILES['content']["name"];

move_uploaded_file($_FILES['preview']['tmp_name'], '../../' . $path_preview);
move_uploaded_file($_FILES['content']['tmp_name'], '../../' . $path_content);


mysqli_query($connect, "INSERT INTO `state`(`id_state`, `tittle`, `description`, `preview`, `content`, `date`, `sale`,`price`)
 VALUES (NULL ,'$tittle','$description','$path_preview ','$path_content','$today ','$sale','$price')");
header('Location: /CRUD/UState/adminState.php');
?>

