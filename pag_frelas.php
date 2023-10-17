<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Estoque</title>
</head>
<body>
<?php include 'cabecalho.php'; ?>
  
<form action=""  method="post">
        <div class="main-login">
            <div class="right-login">
                <div class="card-login">
                    <h1 id="estoque">Free</h1>
                    <!-- Nome -->
                    <div class="textfield">
                        <label for="Nomefrelas">Nome</label>
                        <input type="text" name="Nomefrelas" id="Nomefrelas" placeholder="Nome">
                    </div>
                    <!-- Chegada-->
                    <div class="textfield">
                        <label for="Chegada">Chegada</label>
                        <input type="time" name="Chegada" id="Chegada" placeholder="Chegada">
                    </div>
                    <!-- Saida -->
                    <div class="textfield">
                        <label for="Saida">Saida</label>
                        <input type="time" name="Saida" id="Saida" placeholder="Saida">
                    </div>
                    <!-- Campo DATA -->
                    <input type="hidden" name="datafrelas" value="<?php echo date('Y-m-d'); ?>">
                    <!-- Botao ENVIAR formulario -->
                        
                    <?php 
                        if (isset($_POST['submit'])) {
                            $chegada = $_POST['Chegada'];
                            $saida = $_POST['Saida'];
                        
                            // Verificar se os campos de chegada e saída estão preenchidos
                            if (!empty($chegada) && !empty($saida)) {
                                // Converter as strings em objetos de data e hora
                                $chegadaData = DateTime::createFromFormat('H:i', $chegada);
                                $saidaData = DateTime::createFromFormat('H:i', $saida);
                        
                                // Verificar se a conversão foi bem-sucedida
                                if ($chegadaData && $saidaData) {
                                    // Verificar se a saída é anterior à chegada (no dia seguinte)
                                    if ($saidaData < $chegadaData) {
                                        $saidaData->modify('+1 day'); // Adicionar um dia à data de saída
                                    }
                        
                                    // Calcular a diferença entre a chegada e a saída
                                    $diferenca = $chegadaData->diff($saidaData);
                        
                                    // Calcular o valor a receber
                                    $valorPorHora = 10; // Valor por hora
                                    $horasTrabalhadas = $diferenca->h + ($diferenca->i / 60); // Converter a diferença em horas
                                    $valorReceber = $valorPorHora * $horasTrabalhadas;
                        
                                    // Limitar a duas casas decimais
                                    $valorReceber = number_format($valorReceber, 2);
                        
                                    // Exibir a resposta no site
                                    echo '<h1 id="estoque">R$ ' . $valorReceber . '</h1>';
                                } else {
                                    // Exibir uma mensagem de erro caso a conversão falhe
                                    echo '<h1 id="estoque">Formato de hora inválido. Insira as horas no formato HH:MM.</h1>';
                                }
                            } else {
                                // Exibir uma mensagem de erro caso algum campo esteja vazio
                                echo '<h1 id="estoque">Preencha todos os campos de chegada e saída.</h1>';
                            }
                        }
                    ?>
                    <button class="btn-login" type="submit" name="submit" id="submit" >CALCULAR</button>
                    <button class="btn-login" type="button" onclick="window.location.href = 'pag_frelas.php'">Nova Consulta</button>
                    <button class="btn-login" type="button" onclick="window.location.href = 'pag_consultafrelas.php'">Consultar Frelas</button>
                </div>
            </div>
        </div>
    </form>    
</body>
</html>