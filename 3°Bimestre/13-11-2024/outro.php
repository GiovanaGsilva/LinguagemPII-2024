<?php

session_start();

// Inicializa o array de alarmes e o contador de IDs na sessão, caso estejam vazios
$alarmes = empty($_SESSION['alarmes']) ? array() : $_SESSION['alarmes'];

// Função para cadastrar um novo alarme
function cadastrarAlarme($nome, $status) {
    global $alarmes;
    
    array_push($alarmes, array(
        'nome' => $nome,
        'status' => $status,
        'data' => date('j/m/y')
    ));
    
    $_SESSION['alarmes'] = $alarmes; 
    return 'Alarme cadastrado com sucesso!';
}

// Função para listar todos os alarmes
function listarAlarmes() {
    global $alarmes;
    return $alarmes;
}

// Função para remover um alarme pelo ID
function removerAlarme($id) {
    global $alarmes;
    
    // Procura o índice do alarme pelo ID
    $pos = array_search($id, array_column($alarmes, 'id'));
    if ($pos !== false) {
        array_splice($alarmes, $pos, 1);
        $_SESSION['alarmes'] = $alarmes;
        return 'Alarme removido com sucesso!';
    }
    return 'Alarme não encontrado!';
}

// Função para limpar todos os alarmes e


