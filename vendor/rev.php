<?php
// отключаем варнинги))) вроде их нету уже
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
//подключаем коннект к бд
require_once "../config2.php";
session_start();
// запускаем сессию

// если метод передачи данных пост то заносим в переменные полученные постом данные
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $param_name = $_SESSION['user']['login'];
    $text = $_POST['review'];
    $date =$_POST['date'];
    $state=$_POST['id_state'];
    // доп проверка она такая но пусть будет наверняка
    if($state ==0){
        $state=0;
    }

   // заносим данные отзыва
    $sql = "INSERT INTO `reviews` (`id_reviews`, `login`,`text` ,`date`,`id_state`) VALUES (NULL ,'".$param_name."', '".$text."','".$date."','". $state."')";
    $addreview = mysqli_query($link, $sql);
// если выполнилось перекинет на главную если нет выдаст ошибку вверху
    if($addreview !== false){
        header('Location:/index.php');
    }else{
        var_dump($addreview);
    }


}



?>