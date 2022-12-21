<?php
require ('config.php');
session_start();

$login = mysqli_real_escape_string($conn, $_POST['login']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT `login`, `nivel`FROM usuarios WHERE login = '{$login}' AND senha = md5('{$password}')";

$execut = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($execut);
$level = $result['nivel'];
$_SESSION['login'] = $result['login'];

$row = mysqli_num_rows($execut);

if ($row == 1) {
    if ($level == 1) {
        $conn->close();
        header('Location:../users/home.php?atcion=dashboard');
        exit();

    }elseif ($level == 2) {
        $conn->close();
        header('Location:../admin/home.php?atcion=dashboard');
        exit();
    }
} else {
    session_destroy();
    $conn->close();
    header('Location:../../index.html?login=1');
    exit();
}