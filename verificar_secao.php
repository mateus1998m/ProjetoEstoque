<?php
    session_start();

    //Se nao existir uma variavel email e senha na minha secao
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {

        //O comando session_unset() remove todas as variáveis de sessão. Em seguida, o código redireciona o usuário para a página 'index.html' usando header('location: index.html').
        session_unset();
        header('location: /index.html');

    //Se existir
    }else {

        //O comando $logado = $_SESSION['email']; atribui o valor da variável de sessão 'email' à variável $logado.
        $logado = $_SESSION['email'];
    }


?>