<?php require_once("userlog.php")?>
<?php require_once("verificar_secao.php")?>
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
          <li><a href="Sistema/sistema.html">Início</a></li>
          <li><a href="Consulta/consulta.html">Consulta</a></li>
          <li><a href="Informacoes/Informacoes.html">Informação</a></li>
          <li><a href="sair.php">Sair</a></li>
        </ul>
      </nav>
  </header>
  <script src="mobile-navbar.js"></script>
  <!-- FIM MENU RESPONSIVO -->
      <div class="padrao">
        <div class="right-login">
            <div class="card-login">
                <button class="btn-login" type="button" onclick="window.location.href = 'estoque.php'">Estoque</button>
                <button class="btn-login" type="button" onclick="window.location.href = 'Consulta/consulta.html'">Consulta</button>
            </div>
        </div>
    </div>
</body>
</html>