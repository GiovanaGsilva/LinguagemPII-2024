<?php

session_start();

// Inicializa o array de alarmes e o contador de IDs na sessão, caso estejam vazios
$alertas = empty($_SESSION['alertas']) ? array() : $_SESSION['alertas'];

// Função para cadastrar um novo alarme
function cadastrarAlarme($nome) {
    global $alertas;
    
    array_push($alertas, array(
        'nome' => $nome,
        'data'=>date('j/m/y - H:i:s')
    ));
    
    $_SESSION['alertas'] = $alertas; 
    return 'Cadastrado com sucesso!';
}

// Função para listar todos os alarmes
function listarAlarmes() {
    global $alertas;
    return $alertas;
}

?>