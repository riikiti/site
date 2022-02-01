
<?php
// Process delete operation after confirmation
$connect = mysqli_connect('localhost', 'root', 'root', 'test');
$id=$_GET["id"];
mysqli_query($connect, "DELETE FROM `reviews` WHERE `id_reviews`= '$id'");
header("location:/CRUD/uReviews/adminR.php");
?>

