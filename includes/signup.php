<?php
    // Подключение к сессии
    session_start();
    // Подключение к БД
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    // Проверка совместимости password
    if ($password === $password_confirm) {

        $path = 'profile_picture/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['massage'] = 'Ошибка при загрузки фото профиля';
            header('Location: ../register.php');
        }

        mysqli_query($connect, "INSERT INTO `users` (`id`, `fill_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

        $_SESSION['massage'] = 'Регистрация прошла успешно';
        header('Location: ../index.php');
    } else {
        $_SESSION['massage'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }
