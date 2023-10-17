<?php
    include_once("session.php");
    require_once("config_verificar_secao.php");
    require_once("config_dbestoque.php");
    require_once("config_name.php");

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os valores do formulário
    // NOME VARIAVEL  - NOME FORMULARIO
    $nomepessoa = $nomeUsuario;
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $data = $_POST['data'];
    $escolha = $_POST['es'];
    $dataEntrada = '0000-00-00';
    $dataSaida = '0000-00-00';

    if ($escolha == "entrada") {
        $dataEntrada = $data;
    } elseif ($escolha == "saida") {
        $dataSaida = $data;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Estoque</title>
</head>
<body>
<?php include 'cabecalho.php'; ?>

    <!-- Inicio corpo site -->
    <main class="padrao">

    <!-- Inicio Formulario -->
    <form action=""  method="post">
        <div class="main-login">
            <div class="right-login">
                <div class="card-login">
                    <h1 id="estoque">Entrada e Saida de Produltos</h1>
                    <!-- Produlto -->
                    <div class="textfield">
                        <label for="produto">Produto</label>
                        <select class="textfield" name="produto">
                        <option value="carne">Picanha - UNIDADE</option>
                        <option value="carne">Contra File - Kg</option>
                        <option value="carne">File Mignom - Kg</option>
                        <option value="carne">Acem - Kg</option>
                        <option value="batata">Batata Palito - UNIDADE</option>
                        <option value="batata">Batata Crinckle - UNIDADE</option>
                        <option value="linguica">Linguiça - UNIDADE</option>
                        </select>
                    </div>
                    <!-- Quantidade / Kg -->
                    <div class="textfield">
                        <label for="quantidade">Quantidade / Kg</label>
                        <input type="text" name="quantidade" placeholder="Quantidade">
                    </div>
                    <!-- Campo DATA -->
                    <div class="textfield">
                        <label for="data">Data</label>
                        <input type="date" name="data" id="data" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="e-s">
                        <!-- INPUT DE ENTRADA OU SAIDA -->
                        <input type="radio" name="es" id="entrada" value="entrada" onclick="uncheckSaida()">
                        <label for="entrada" class="radio-label">Entrada</label>

                        <input type="radio" name="es" id="saida" value="saida" onclick="uncheckEntrada()">
                        <label for="saida" class="radio-label">Saida</label>

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
                    <?php 
                        if (isset($_POST['submit'])){
                            if (!empty($produto) && !empty($quantidade) && !empty($escolha)) {
                                $query = "INSERT INTO estoque (pessoanome, produto, quantidade, dataentrada, datasaida) VALUES ('$nomeUsuario', '$produto', '$quantidade', '$dataEntrada', '$dataSaida')";
                                $resultado = mysqli_query($conexaodbestoque, $query);
                                echo '<h1 id="estoque">Sucesso.</h1>';
                            }else {
                                echo '<h1 id="estoque">Complete todos os dados.</h1>';
                            }
                        }
                    ?>
                    <input type="submit" class="btn-login" name="submit" id="submit" value="CADASTRAR">
                    <button class="btn-login" type="button" onclick="window.location.href = 'pag_estoque.php'">NOVO CADASTRO</button>
                </div>
            </div>
        </div>
    </form>
    </main>
    
    
</body>
</html>