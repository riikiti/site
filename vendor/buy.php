<?php
session_start();
$connect = mysqli_connect('localhost', 'root', 'root', 'test');
$money = (int)$_POST['money'];
$id_state = (int)$_POST['id_state'];
$res_price = (int)$_POST['res_price'];
$id=$_SESSION['user']['id'];
$today=date("Y-m-d H:i:s");
$todayP=date('Y-m-d H:i:s', strtotime("+3 hours"));
if($money>$res_price){
    $money = $money - $res_price;
   mysqli_query($connect, "UPDATE `users` SET `money`='$money' WHERE `id`='$id'");
    mysqli_query($connect, "INSERT INTO `client-state`(`id_cs`, `link`, `date_start`, `date_finish`, `id_state`, `id_client`, `status`) VALUES (NULL ,NULL,'$today','$todayP','$id_state','$id','1')");
    $_SESSION['user']['money']= $money;
       header('location:../profile.php');
       exit();
}
else{
    header('Location: Error.php');
}