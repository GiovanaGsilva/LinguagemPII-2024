<?php
session_start(); // Inicia a sessão para armazenar o estado dos alarmes

// Verifica se a sessão de alarmes já existe, caso contrário, inicializa com alarmes inativos
if (!isset($_SESSION['alarmes'])) {
    $_SESSION['alarmes'] = [
        'Alarme 1' => false,
        'Alarme 2' => false,
        'Alarme 3' => false
    ];
}

// Funções principais do sistema

// Função para ativar ou desativar um alarme
function alterarEstadoAlarme($nomeAlarme) {
    $_SESSION['alarmes'][$nomeAlarme] = !$_SESSION['alarmes'][$nomeAlarme];
    registrarLog("O estado de '$nomeAlarme' foi alterado para " . ($_SESSION['alarmes'][$nomeAlarme] ? 'Ativo' : 'Inativo'));
}

// Função para registrar log de atividade
function registrarLog($mensagem) {
    if (!isset($_SESSION['log'])) {
        $_SESSION['log'] = [];
    }
    $_SESSION['log'][] = date('Y-m-d H:i:s') . " - " . $mensagem;
}

// Função para exibir o estado atual dos alarmes
function exibirEstadoAlarmes() {
    foreach ($_SESSION['alarmes'] as $nomeAlarme => $estado) {
        echo "<p>$nomeAlarme: " . ($estado ? 'Ativo' : 'Inativo') . "</p>";
        echo "<form method='post' action='index.php'>
                <input type='hidden' name='alarme' value='$nomeAlarme'>
                <button type='submit'>" . ($estado ? 'Desativar' : 'Ativar') . "</button>
              </form>";
    }
}

// Função para exibir o log de atividades
function exibirLog() {
    echo "<h3>Log de Atividades</h3>";
    if (isset($_SESSION['log']) && count($_SESSION['log']) > 0) {
        foreach ($_SESSION['log'] as $mensagem) {
            echo "<p>$mensagem</p>";
        }
    } else {
        echo "<p>Sem atividades registradas.</p>";
    }
}

// Processamento da requisição para alterar o estado do alarme
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['alarme'])) {
    alterarEstadoAlarme($_POST['alarme']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel de Controle de Alarmes</title>
</head>
<body>
    <h1>Painel de Controle de Alarmes</h1>
    <h2>Estado dos Alarmes</h2>
    <?php exibirEstadoAlarmes(); ?>
    
    <hr>

    <?php exibirLog(); ?>
</body>
</html>



