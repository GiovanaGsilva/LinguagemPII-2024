<?php
     include 'inc/funcoes.php';

 if (!empty($_GET))   {
    if ($_GET ['acao']=='limpa'){
       echo limpar();
    }
    if ($_GET['acao']=='remove'){
       echo remover($_GET['ids']);
    }
}
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
<body class="bg-info-subtle"  > 


    <h5 class="text-success text-center mt-5">Gerenciador de Tarefas</h5>

    <div class= "shadow-lg p-3 mb-5 mt-5 card w-50 mx-auto ">
            <div class = "card-body">
                <div class="container text-center">
                    <div class="row">
                      <div class="col">
                        <a href="registrar.php"> Registrar Tarefa</a>
                      </div>
                      <div class="col">
                        <a href="consultar.php">Consultar Tarefa</a>
                      </div>
                    </div>
                
            
                
    </div>
    </div>

</body>
</html>