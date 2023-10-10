<?php
   
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        
        //incluindo informacao do Banco de dados
        include_once('config.php');
        
        // Armazenar informações do usuário em variáveis de sessão
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //consulta SQL para selecionar registros da tabela "usuarios" onde o email e a senha correspondem aos valores fornecidos pelo usuário.
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        //Esta linha executa a consulta SQL no banco de dados usando a conexão estabelecida no arquivo "config.php". O resultado da consulta é armazenado na variável $result.
        $result = $conexao->query($sql);

        if ($result->num_rows < 1) { //Esta linha verifica se o número de linhas retornadas pela consulta é menor que 1, o que significa que não há registros correspondentes no banco de dados.
            
        } else {//Esta linha é o bloco de código que é executado se o formulário não foi enviado ou se os campos de email e senha estão vazios.

            //Esta linha armazena as variáveis de email e senha na sessão PHP.
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            //
            $_SESSION['userlog'] = true;
            // Esta linha redireciona o usuário para a página "sistema.html" após o login bem-sucedido.
            header('location: sistema.php');
        }

    }else {
        //Esta linha redireciona o usuário de volta para a página de login (index.html) se o formulário não foi enviado ou se os campos de email e senha estão vazios.
        header('location: index.html');
        $_SESSION['userlog'] = false;
    }
?>