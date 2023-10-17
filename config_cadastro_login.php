<?php 
    include_once("session.php");

    if(isset($_POST['submit'])) {

        include_once('config_dblogin.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $sexo = $_POST['genero'];
        $data = $_POST['data'];
        $endereco = $_POST['endereco'];
        
        

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email, sexo, data_nasc, endereco) VALUES ('$nome', '$senha','$email', '$sexo', '$data', '$endereco')");


        //Após a execução da consulta SQL, o código verifica se a inserção foi bem-sucedida usando a variável $result. Se a inserção for bem-sucedida, o código usa header('Location: index.html') para redirecionar o usuário para a página "index.html". O exit é usado para interromper a execução do código após o redirecionamento.
        if($result) {
            header('Location: pag_cadastro_finalizado.php');
            exit;
        } else {
            echo "Erro ao inserir os dados no banco de dados.";
        }

    }

?>