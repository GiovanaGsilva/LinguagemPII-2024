<?php

    //iniciar sessão
    session_start();

    //criar variável na sessão
    $_SESSION['usuario'] = 'Giovana';
    $_SESSION['senha'] = '1234';

    //iniciar variavel na sessão
    echo $_SESSION['usuario'];
    echo $_SESSION['senha'];

?>