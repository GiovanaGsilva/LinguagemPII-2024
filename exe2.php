<?php

session_start();
echo $_SESSION['nome'];
if(isset($_SESSION['usuario'])){
    echo 'Usuário logado!';
}else
    echo 'Usuário não logado';
    echo '<br>';

    var_dump($_SESSION);
    //verificando tudo que esta dentro da sessao
    echo '<br>';
    echo session_id();
    //mostrar id gerado para session
    echo '<br>';
    echo session_save_path();
    //mostras o caminha que as sessões são armazenadas




?>