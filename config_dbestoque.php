<?php
    include_once("session.php");
    //Host
    $dbHost = '127.0.0.2';
    //Nome de acesso ao DB
    $dbUsername = 'root';
    //Senha do DB
    $dbPassword = '';
    //Nome do meu DB  (DB = Data Base ou Banco de Dados)
    $dbName = 'id21340598_estoque';

    // Coneccao com banco de dados - Informacoes como user local e senha do DB
    $conexaodbestoque = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
?>