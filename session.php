<!--  -->
<?php
//A função session_status() retorna o estado atual da sessão. Ela pode retornar um dos seguintes valores:
//PHP_SESSION_DISABLED: Indica que as sessões estão desabilitadas no servidor.
//PHP_SESSION_NONE: Indica que não há nenhuma sessão ativa.
//PHP_SESSION_ACTIVE: Indica que uma sessão está ativa.
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>