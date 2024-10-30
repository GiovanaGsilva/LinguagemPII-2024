<?php

include 'inc/funcoes.php';

?>



<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Entrada e Saída</title>
</head>
<body>
        <h3> Sistema de Entrada e Saída </h3>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data/Hora</th>
                    <th></th>
                </tr>
            </thead>
           <tbody>

           <?php
           if (empty($_SESSION['reg'])){
               echo '<tr>';
               echo '<td colspan="4">Nenhum Registro </td>';
               echo '<tr>';

            }else{
                foreach(buscar_registros() as $dados){
                   echo '<tr>';
                   echo '<td>'.$dados['nome'].'</td>';
                   echo '<td>'.$dados['cpf'].' </td>';
                   echo '<td>'.$dados['data'].' </td>';
                   echo '<td><a href="index.php?acao=remove&'.$dados['cpf'].'">Saida </a> </td>';
                }
            }

?>
           </tbody>
        </table>
        <a href="index.php">Voltar</a>
</body>
</html>



