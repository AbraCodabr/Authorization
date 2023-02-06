<?php
    // Подключение к БД
    $connect = mysqli_connect('localhost', 'root', '', 'test');

    // Проверка подключения
    if (!$connect) {
        die('Error connect to DataBase');
    }



