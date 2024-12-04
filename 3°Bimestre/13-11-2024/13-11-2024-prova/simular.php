<?php


include 'inc/funcoes.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Alarmes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<form > 
<h1>Sistema de Simulação de Alarmes</h1>
        <input type="submit"name="botao" value="sala"/>
        <input type="submit"name="botao" value="garagem"/>
        <input type="submit"name="botao" value="cozinha"/>
        <input type="submit"name="botao" value="quarto"/>
    <hr>
    <a href="index.php">Voltar para o menu principal</a>
</form>

</body>

<?php  

    if(!empty($_GET)){
    if($_GET ['botao']=='sala')
        echo cadastrarAlarme('sala');
  
    if($_GET['botao']=='garagem');
    echo cadastrarAlarme('garagem');
    
    if($_GET['botao']=='quarto');
    echo cadastrarAlarme('quarto');

    
    if($_GET['botao']=='cozinha');
    echo cadastrarAlarme('cozinha');
   
    }
?>
</html>



