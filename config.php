<?php
    session_start();
    $dbHost = '127.0.0.2:3306';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'id21340598_usuarios';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
?>
