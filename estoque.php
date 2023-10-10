<?php
    require_once("userlog.php");
    require_once("verificar_secao.php");
    //Host
    $dbHost = '127.0.0.2';
    //Nome de acesso ao DB
    $dbUsername = 'root';
    //Senha do DB
    $dbPassword = '';
    //Nome do meu DB  (DB = Data Base ou Banco de Dados)
    $dbName = 'id21340598_estoque';

    // Coneccao com banco de dados - Informacoes como user local e senha do DB
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os valores do formulário
    // NOME VARIAVEL  - NOME FORMULARIO
    $nomepessoa = $_POST['nomepessoa'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $quilo = $_POST['quilo'];
    $data = $_POST['data'];
    $escolha = $_POST['es'];
    $dataEntrada = '0000-00-00';
    $dataSaida = '0000-00-00';

    if ($escolha == "entrada") {
        $dataEntrada = $data;
    } elseif ($escolha == "saida") {
        $dataSaida = $data;
    }

    // Inserir os dados no banco de dados
    //INSER INTO = Nomes das Colunas no DB
    //VALUES = Nome das viariaveis criada com as info do Formulario
    $query = "INSERT INTO estoque (pessoanome, produto, quantidade, quilo, dataentrada, datasaida) VALUES ('$nomepessoa', '$produto', '$quantidade', '$quilo', '$dataEntrada', '$dataSaida')";
    $resultado = mysqli_query($conexao, $query);

    if ($resultado) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($conexao);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Estoque</title>
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
            <li><a href="/Sistema/sistema.html">Início</a></li>
            <li><a href="/Consulta/consulta.html">Consulta</a></li>
            <li><a href="/Informacoes/Informacoes.html">Informação</a></li>
            <li><a href="/sair.php">Sair</a></li>
          </ul>
        </nav>
    </header>
      <script src="/mobile-navbar.js"></script>
      <!-- FIM MENU RESPONSIVO -->

    <!-- Inicio corpo site -->
    <main class="padrao">

    <!-- Inicio Formulario -->
    <form action=""  method="post">
        <div class="main-login">
            <div class="right-login">
                <div class="card-login">
                    <h1 id="estoque">Entrada e Saida de Produltos</h1>
                    <!-- INPUT NOME PESSOA -->
                    <div class="textfield">
                        <label for="nomepessoa">Nome de quem vai dar Entrada ou Saida</label>
                        <input type="text" name="nomepessoa" placeholder="Nome">
                    </div>
                    <!-- Produlto -->
                    <div class="textfield">
                        <label for="produlto">Produlto</label>
                        <input type="text" name="produto" placeholder="Produto">
                    </div>
                    <!-- Quantidade -->
                    <div class="textfield">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" name="quantidade" placeholder="Quantidade">
                    </div>
                    <!-- Quilo -->
                    <div class="textfield">
                        <label for="endereco">Quilo</label>
                        <input type="text" name="quilo" placeholder="Quilo">
                    </div>
                    <!-- Campo DATA -->
                    <div class="textfield">
                        <label for="data">Data</label>
                        <input type="date" name="data" id="data">
                    </div>
                    <div class="e-s">
                        <!-- INPUT DE ENTRADA OU SAIDA -->
                        <input type="radio" name="es" id="entrada" value="entrada" onclick="uncheckSaida()">
                        <label for="entrada" class="radio-label">Entrada</label>

                        <input type="radio" name="es" id="saida" value="saida" onclick="uncheckEntrada()">
                        <label for="saida">Saida</label>

                        <script>
                        function uncheckSaida() {
                            document.getElementById("saida").checked = false;
                        }

                        function uncheckEntrada() {
                            document.getElementById("entrada").checked = false;
                        }
                    </script>

                    </div>
                    <!-- Botao ENVIAR formulario -->
                    <input type="submit" class="btn-login" name="submit" id="submit" value="CADASTRAR">
                </div>
            </div>
        </div>
    </form>
    </main>
    
    
</body>
</html>