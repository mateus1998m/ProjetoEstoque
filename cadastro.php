<?php 
    session_start();

    if(isset($_POST['submit'])) {

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $sexo = $_POST['genero'];
        $data = $_POST['data'];
        $endereco = $_POST['endereco'];
        
        

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, sexo, data_nasc, endereco) VALUES ('$nome', '$senha','$email', '$sexo', '$data', '$endereco')");


        //Após a execução da consulta SQL, o código verifica se a inserção foi bem-sucedida usando a variável $result. Se a inserção for bem-sucedida, o código usa header('Location: index.html') para redirecionar o usuário para a página "outra_pagina.html". O exit é usado para interromper a execução do código após o redirecionamento.
        if($result) {
            header('Location: /index.html');
            exit;
        } else {
            echo "Erro ao inserir os dados no banco de dados.";
        }

    }

?>