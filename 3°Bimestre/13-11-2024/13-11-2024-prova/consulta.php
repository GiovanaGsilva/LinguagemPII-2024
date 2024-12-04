<?php 
     include 'inc/funcoes.php';

?>



<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Consultar</title>
    
</head>
<body class="bg-info-subtle" >
<div class= "shadow-lg p-3 mb-5 mt-5 card w-50 mx-auto ">
            <div class = "card-body">
            <h3> Consultar Alertas </h3>
        <table class="table">
    <thead>
        <tr>
            <th>Setor</th>
            <th>Data/hora</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (empty($_SESSION['alertas'])) {
            echo '<tr><td colspan="5">Nenhum Registro</td></tr>';
        } else {
            foreach (listarAlarmes() as $dados) {
                echo '<tr>';
                echo '<td>' . $dados['nome'] . '</td>';
                echo '<td>' . $dados['data'] . '</td>';
                
            }
        }
        ?>
    </tbody>
</table>

        <a href="index.php">Voltar</a>
        <br/>

            </div>
            </div>  


        
</body>
</html>