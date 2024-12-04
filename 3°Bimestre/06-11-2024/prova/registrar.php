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

<div class="shadow-lg p-3 mb-5 mt-5 card w-50 mx-auto">
    <div class="card-body">
        <form  method="GET">
            <div class="mb-3 mt-6">
                <label class="form-label">O que precisa lembrar de fazer?</label>
                <input type="text" class="form-control" name="cpfazer" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 mt-6">
                <label class="form-label">Prioridade</label>
                <select class="form-select" name="cpprioridade">
                    <option value="alta" class="text-danger">Alta</option>
                    <option value="media" class="text-warning">Média</option>
                    <option value="baixa" class="text-primary">Baixa</option>
                </select>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary w-100 mb-3">Cadastrar</button>
                </div>
                <div class="col-md-6">
                    <input class="btn btn-secondary w-100 mb-3" value="Limpar">
                </div>
            </div>
        </form>
    </div>
    <a href="index.php">Voltar</a>
        <div class="text-success">
        <?php 

if(!empty($_GET)){
  echo cadastrar( $_GET['cpfazer'], $_GET['cpprioridade']);
}
?>
        </div>
</div>


  
  
   
</body>
</html>
          


