<?php
 session_start();

 if (!$_SESSION['login']) {

    header('Locatio: ../../index.php');
    exit();
 }
 