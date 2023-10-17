<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Cadastro</title>
</head>
<body>
<?php include 'cabecalho.php'; ?>
    <form action="config_cadastro_login.php" method="post">
        <div class="main-login">
            <div class="right-login">
                <div class="card-login">
                    <h1>CADASTRE-SE</h1>
                    <div class="textfield">
                        <label for="Nome">Nome</label>
                        <input type="text" name="nome" placeholder="Nome">
                    </div>
                    <div class="textfield">
                        <label for="Nome">Sobrenome</label>
                        <input type="text" name="sobrenome" placeholder="Sobrenome">
                    </div>
                    <div class="textfield">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <div class="textfield">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" placeholder="Endereço">
                    </div>
                    <div class="textfield">
                        <label for="data">Data de nascimento</label>
                        <input type="date" name="data" id="data">
                    </div>
                    <div class="sexo">
                        <label for="usuario"><strong>Genero</strong></label>
                        <input type="radio" name="genero" id="feminino" value="feminino">
                        <label for="">Feminino</label>
                        <input type="radio" name="genero"  id="masculino" value="masculino">
                        <label for="">masculino</label>
                    </div>
                    <input type="submit" class="btn-login" name="submit" id="submit" value="CADASTRAR">
                </div>
            </div>
        </div>
    </form>
</body>
</html>