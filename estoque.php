<?php
    include 'verificar_login.php';
    //Host
    $dbHost = 'localhost';
    //Nome de acesso ao DB
    $dbUsername = 'id21340598_estoque';
    //Senha do DB
    $dbPassword = 'Mat050298#@';
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
