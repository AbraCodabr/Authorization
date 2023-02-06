<?php 
    // Подключение сессии
    session_start();
    if ($_SESSION['user']) {
        header('Location: ../profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <!-- Авторизация -->
    <form action="includes/signin.php" method="post">
        <label >Логин</label>
        <input type="login" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="passwors" name="password" placeholder="Введите свой пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегестрируйтесь!!!</a>
        </p>
        <?php
            // Проверка на авторизацию, в случае false выведет сообщение.
            if ($_SESSION['massage']) {
                echo '<p class="msg"> ' . $_SESSION['massage'] . '</p>';
            }
            unset($_SESSION['massage']);
        ?>
    </form>
</body>
</html>