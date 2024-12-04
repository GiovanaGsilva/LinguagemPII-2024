
<?php 
     include 'inc/funcoes.php';

     



?>



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
            <h3> Consultar </h3>
        <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>O que fazer</th>
            <th>Data/Hora</th>
            <th>Prioridade</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (empty($_SESSION['tarefas'])) {
            echo '<tr><td colspan="5">Nenhum Registro</td></tr>';
        } else {
            foreach (listar() as $dados) {
                echo '<tr>';
                echo '<td>' . $dados['id'] . '</td>';
                echo '<td>' . $dados['fazer'] . '</td>';
                echo '<td>' . $dados['data'] . '</td>';
                echo '<td>' . $dados['prioridade'] . '</td>';
                echo '<td><a href="index.php?acao=remove&ids=' . $dados['id'] . '">Resolvido</a></td>';
                echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>

        <a href="index.php">Voltar</a>
        <br/>
        <a href="index.php?acao=limpa">Limpar dados</a>

            </div>
            </div>  


        
</body>
</html>
