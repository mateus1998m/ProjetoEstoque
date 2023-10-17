<?php
    include_once("session.php");
    require_once("config_dbestoque.php");

// Consulta SQL
$sql = "SELECT * FROM estoque";

// Executa a consulta
$result = $conexaodbestoque->query($sql);

// Fecha a conexão com o banco de dados
$conexaodbestoque->close();

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
      <div class="padrao">
        <div class="main-login">
            <div class="right-login">
                <div class="card-login">

                <?php
                // Código PHP para exibir os resultados da consulta aqui
                // Verifica se a consulta retornou resultados
                if ($result->num_rows > 0) {
                    echo "<h1>Resultado da Consulta</h1>";
                    echo "<br></br>";
                    echo "<table>";
                    echo "<tr><th>Pessoa</th><th>Produto</th><th>Quantidade</th><th>Quilo</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td id='resstd'>" . $row["pessoanome"] . "</td>";
                        echo "<td class='ress'>" . $row["produto"] . "</td>";
                        echo "<td>" . $row["quantidade"] . "</td>";
                        echo "<td>" . $row["quilo"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Nenhum resultado encontrado.";
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>