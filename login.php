<?php
session_start();

$sLogin = $_POST["log"];
$sPassword = $_POST["pass"];

// Задаём переменные для подключения к БД
$link = mysqli_connect("localhost", "root", "root", "master_class.ru");
mysqli_select_db($link, "SELECT DATABASE()");

$query = "SELECT * FROM users WHERE login='$sLogin' AND password='$sPassword'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

if (!empty($row)) {
    $_SESSION['user_data'] = $row;
    header('Location: /./cabinet.php');
} else {
    $_SESSION['fail'] = "Не найден пользователь с таким набором данных. Попробуйте еще раз или зарегистрируйтесь";
    header('Location: /./index.php');
}