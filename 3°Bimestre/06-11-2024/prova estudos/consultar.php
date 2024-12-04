<?php

//não usa required
    include 'inc/funcoes.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Gerenciador de tarefas</title>
</head>
<body class="bg-info-subtle" >

<div class= "shadow-lg p-3 mb-5 mt-5 card w-50 mx-auto ">
            <div class = "card-body">
            <form>
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="name" class="form-control" name="cpnome" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="cpf" class="form-label">CPF</label>
    <input type="password" class="form-control" name="cpcpf">
  </div>
  <button type="submit" class="btn btn-primary mb-6">Submit</button>
  <input type="reset" class="btn btn-primary mb-6"value="Limpar"><br/>
        <a href="index.php">Voltar</a>
</body>
</html>
            </div>
</div>


<?php 

     if(!empty($_GET)){
       echo cadastrar_entrada($_GET['cpnome'], $_GET['cpcpf']);
     }
?>
