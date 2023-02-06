<?php
    // Подключение к сессии
    session_start();
    // Подключение к БД 
    require_once 'connect.php';
 
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Проверка на существование профиля
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    if (mysqli_num_rows($check_user) > 0) {
        
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['fill_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
        ];
        header('Location: ../profile.php');

    } else {
        $_SESSION['massage'] = 'Не верный логин или пароль';
        header('Location: ../index.php');
    }
?>