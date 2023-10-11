<?php
    include_once("config_dblogin.php");

    $query = "SELECT nome FROM usuarios WHERE email = '$logado'";
    $result = mysqli_query($conexao, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nomeUsuario = $row['nome'];
    }
    
?>