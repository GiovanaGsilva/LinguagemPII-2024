<?php

 session_start();

$tarefas = empty($_SESSION['tarefas'])? array(): $_SESSION['tarefas'];
$id =  empty($_SESSION['ids'])? 0: $_SESSION['idis'];

//empty = se estiver vazio
//tarefas vai receber um vetor vazio de for verdade
// ?-> se for verdadeiro

function cadastrar ($fazer, $prioridade){
    global $tarefas;
    // tem que por o global para que ele entenda que é o $tarefas que está do lado de fota
    global $ids;
    array_push($tarefas, array(
        'id'=>$ids,
        'fazer'=>$fazer,
        'prioridade'=>$prioridade,

    ));

    $_SESSION['tarefas']=$tarefas;
    $ids++;
    $_SESSION['ids']= $ids;
}

//cadastrar ('arrumar a mala', 'baixa)
?>