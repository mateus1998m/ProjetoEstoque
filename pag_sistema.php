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
    <!-- MENU RESPONSIVO -->
    <header>
      <nav>
        <a class="logo" >Sistema</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="pag_sistema.php">Início</a></li>
          <li><a href="pag_consulta.php">Consulta</a></li>
          <li><a href="pag_informacoes.php">Informação</a></li>
          <li><a href="config_sair.php">Sair</a></li>
        </ul>
      </nav>
  </header>
  <script src="mobile-navbar.js"></script>
  <!-- FIM MENU RESPONSIVO -->

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
            </div>
        </div>
    </main>
</body>
</html>