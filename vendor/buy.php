<?php
session_start();
//сессия
$connect = mysqli_connect('localhost', 'root', 'root', 'test');
//коннект + все нужные переменные постом в инт чтоб проще было работать
$money = (int)$_POST['money'];
$id_state = (int)$_POST['id_state'];
$res_price = (int)$_POST['res_price'];
$content = $_POST['content'];
$id=$_SESSION['user']['id'];
// все ссылки работают 3 часа поэтому добавляем к дате покупки 3 часа это и есть когда перестанет выводится в профиле ссылка
$today=date("Y-m-d H:i:s");
$todayP=date('Y-m-d H:i:s', strtotime("+3 hours"));
// ну и сама покупка если денег достаточно о мы покупаем
if($money>=$res_price){
    // вычиаем цену
    $money = $money - $res_price;
    // изменяем деньги пользователя в таблице
   mysqli_query($connect, "UPDATE `users` SET `money`='$money' WHERE `id`='$id'");
   //добавляем в таблицу клиент-статья
    mysqli_query($connect, "INSERT INTO `client-state`(`id_cs`, `link`, `date_start`, `date_finish`, `id_state`, `id_client`, `status`) VALUES (NULL ,'$content','$today','$todayP','$id_state','$id','1')");
   //вычитаем из сессионных денег чтоб не было бага не вычита денег
    $_SESSION['user']['money']= $money;
       header('location:../profile.php');
       exit();
}
else{
    // если денег не хватает выдает что денег нее хавтает и переносим на страницу с сообщением
    header('Location: Error.php');
}