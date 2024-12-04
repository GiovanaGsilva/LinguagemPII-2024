<?php

//não usa required
    include 'inc/funcoes.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Entrada e Saída</title>
</head>
<body>
    <form>
        <h3> SISTEMA DE ENTRADA E SAIDA</h3>
        <label> Nome </label>
        <input name="cpnome"> <br/>
        <label> CPF</label>
        <input name="cpcpf"> <br/>
        <input type="submit" value="Registrar">
        <input type="reset" value="Limpar"><br/>
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>

<?php 

     if(!empty($_GET)){
       echo cadastrar_entrada($_GET['cpnome'], $_GET['cpcpf']);
     }
?>
