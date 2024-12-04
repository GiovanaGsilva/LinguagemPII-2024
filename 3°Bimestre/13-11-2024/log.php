<?php
session_start(); // Inicia ou recupera a sessão para acessar o log
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Log de Atividades</title>
</head>
<body>
    <h1>Log de Atividades</h1>
    <?php
    if (isset($_SESSION['log']) && count($_SESSION['log']) > 0) {
        foreach ($_SESSION['log'] as $mensagem) {
            echo "<p>$mensagem</p>";
        }
    } else {
        echo "<p>Nenhuma atividade registrada até o momento.</p>";
    }
    ?>
    <hr>
    <a href="index.php">Voltar para o menu principal</a>
</body>
</html>
