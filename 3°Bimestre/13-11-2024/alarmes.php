<?php
session_start();

// Inicializa a sessão de alarmes se ainda não existir
if (!isset($_SESSION['alarmes'])) {
    $_SESSION['alarmes'] = [
        'Alarme 1' => false,
        'Alarme 2' => false,
        'Alarme 3' => false
    ];
}

// Função para alternar o estado de um alarme e registrar no log
function alterarEstadoAlarme($nomeAlarme) {
    $_SESSION['alarmes'][$nomeAlarme] = !$_SESSION['alarmes'][$nomeAlarme];
    registrarLog("O estado de '$nomeAlarme' foi alterado para " . ($_SESSION['alarmes'][$nomeAlarme] ? 'Ativo' : 'Inativo'));
}

// Função para registrar uma mensagem no log
function registrarLog($mensagem) {
    if (!isset($_SESSION['log'])) {
        $_SESSION['log'] = [];
    }
    $_SESSION['log'][] = date('Y-m-d H:i:s') . " - " . $mensagem;
}

// Processa a solicitação de alteração de estado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['alarme'])) {
    alterarEstadoAlarme($_POST['alarme']);
}

// Exibição da página de alarmes
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Alarmes</title>
</head>
<body>
    <h1>Gerenciar Alarmes</h1>
    <h2>Status dos Alarmes</h2>
    <?php
    foreach ($_SESSION['alarmes'] as $nomeAlarme => $estado) {
        echo "<p>$nomeAlarme: " . ($estado ? 'Ativo' : 'Inativo') . "</p>";
        echo "<form method='post' action='alarmes.php'>
                <input type='hidden' name='alarme' value='$nomeAlarme'>
                <button type='submit'>" . ($estado ? 'Desativar' : 'Ativar') . "</button>
              </form>";
    }
    ?>
    <hr>
    <a href="index.php">Voltar para o menu principal</a>
</body>
</html>
