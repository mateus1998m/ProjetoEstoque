<?php
  require_once("config_verificar_secao.php");
  require_once("config_name.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Bem Vindo</title>
</head>
<body>
<?php include 'cabecalho.php'; ?>

    <!-- Inicio corpo site -->
    <main class="padrao">
        <div class="main-login">
            <div class="right-login">
                <div class="card-login">
                <?php 
                      echo "<h1>Ola $nomeUsuario!</h1>";
                    ?>
                    <button class="btn-login" type="button" onclick="window.location.href = 'pag_estoque.php'">Estoque</button>
                    <button class="btn-login" type="button" onclick="window.location.href = 'pag_consulta.php'">Consulta</button>
                    <button class="btn-login" type="button" onclick="window.location.href = 'pag_frelas.php'">Frelas</button>          
            </div>
        </div>
    </main>
</body>
</html>