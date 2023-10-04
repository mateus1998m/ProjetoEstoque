<?php 
    session_start();
    include_once 'config.php';
    include 'verificar_login.php';

    //$logado = $_SESSION['email'];
    $sql = "SELECT * FROM estoque ORDER BY id DESC";
    $result = $conexao->query($sql);

    print_r($result);


?>