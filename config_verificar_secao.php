<?php
    // Início do bloco de código PHP
    include_once("session.php");

    // Verifica se o usuário não está logado ou a sessão expirou
    if (!isset($_SESSION['userlog']) || $_SESSION['userlog'] != true) {
        header('Location: /index.html');
        exit;
    }

    // Verifica se as variáveis de sessão 'email' e 'senha' não estão definidas
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        session_unset();
        header('location: /index.html');
    } else {
        $logado = $_SESSION['email'];
    }

    // Restante do código...

    // Fim do bloco de código PHP
?>
