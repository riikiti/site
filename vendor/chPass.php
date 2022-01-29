<?php
echo "<pre style='display: none'>";
var_dump($_GET);
echo "</pre>";
if(isset($_GET['login'])&&$_GET['login'] !=''){
    $login=$_GET['login'];
}


if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- Форма регистрации -->

<form action="passUpdate.php" method="post" enctype="multipart/form-data">
    <h2 style="margin: 10px 0;">Change pass</h2>
    <input type="hidden" name="login" value="<?php echo $login;?>">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <button type="submit">Change</button>

</form>

</body>
</html>