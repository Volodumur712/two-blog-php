<?php
$servername = "localhost";
    $database = "two_php_blog";
    $username = "root";
    $password = "";
    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $password, $database);
    /*$conn->set_charsot("utf8");*/
    // Проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }