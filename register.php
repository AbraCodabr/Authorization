<?php 
    // Подключение к сессии
    session_start();
    if ($_SESSION['user']) {
        header('Location: ../profile.php');
    }
?>
<!-- Регистрация -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <form action="/includes/signup.php" method="post" enctype="multipart/form-data">
        <label >ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое полное имя">
        <label >Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label >Почта</label>
        <input type="email" name="email" placeholder="Введите адресс своей почты">
        <label >Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="passwors" name="password" placeholder="Введите свой пароль">
        <label >Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/index.php">авторизируйтесь!!!</a>
        </p>
        <?php
            if ($_SESSION['massage']) {
                echo '<p class="msg"> ' . $_SESSION['massage'] . '</p>';
            }
            unset($_SESSION['massage']);
        ?>
    </form>
</body>
</html>