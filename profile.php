<?php 
    // Подключение к сессии
    session_start();
    if (!$_SESSION['user']) {
        header('Location: ../index.php');
    }
?>
<!-- Профиль -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <form>
        <img src="<?= $_SESSION['user']['avatar']?>" alt="">
        <h2><?= $_SESSION['user']['full_name']?></h2>
        <a href="#"><?= $_SESSION['user']['email']?></a>
        <a href="includes/logout.php">Выход</a>
    </form>
</body>
</html>