<?php

    session_start();
    require_once 'connect.php';

    $fio = $_POST['fio'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $ydov = $_POST['ydov'];

    {
        $pass = md5($pass);
        mysqli_query($connect, "INSERT INTO `client` (`id_client`, `fio`, `tel`, `email`, `pass`, `ydov`) VALUES (NULL, '$fio', '$tel', '$email', '$pass', '$ydov')" );

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../order.php');
    } 
?>