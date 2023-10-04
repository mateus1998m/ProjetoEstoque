<?php // Isso indica o início de um bloco de código PHP.

    session_start();// Essa função inicia a sessão do PHP. É necessário chamar essa função antes de usar as variáveis de sessão.

    if (!isset($_SESSION['userlog']) || $_SESSION['userlog'] != true) { // Esta linha verifica se a variável de sessão 'userlog' não está definida ou se o seu valor não é verdadeiro. Isso significa que o usuário não está logado ou a sessão expirou.

    header('Location: /index.html'); //Essa linha redireciona o usuário para a página inicial, que é o arquivo "index.html". O cabeçalho HTTP "Location" é usado para redirecionar o navegador para uma nova página.

    exit; //Essa função interrompe a execução do script PHP. Após o redirecionamento, não há mais necessidade de executar o restante do código.
    }
?>