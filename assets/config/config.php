<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'sistema');

$conn = mysqli_connect(HOST, USER, PASS, DB) or die ('Não foi possivel conectar o banco de dados');
if (!$conn) {
    die("Conection failed:". mysqli_connect_error());
};
