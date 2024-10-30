<?php 
     include 'inc/funcoes.php';
     if (!empty($_GET))   {
         if ($_GET ['acao']=='limpa'){
            echo limpar_dados();
         }
     }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Entrada e Saída</title>
</head>
<body>
    <h3>Sistema de Entrada e Saída</h3>
    <a href="entrada.php">Registrar entrada</a> <br/>
    <a href="saida.php">Registrar saída</a> <br/>
    <a href="index.php?acao=limpa">Limpar dados</a>

    
</body>
</html>