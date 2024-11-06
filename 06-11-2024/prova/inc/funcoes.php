<?php

 session_start();

$tarefas = empty($_SESSION['tarefas'])? array(): $_SESSION['tarefas'];
$ids =  empty($_SESSION['ids'])? 1: $_SESSION['ids'];

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
        'data'=>date('j/m/y'),
        'prioridade'=>$prioridade,
    ));

    $_SESSION['tarefas']=$tarefas;
    $ids++;
    $_SESSION['ids']= $ids;

    return 'Cadastrado com sucesso';
} //cadastrar ('arrumar a mala', 'baixa)


function listar(){
    global $tarefas;
    return $tarefas;
}//listar




function remover($id ){
    global $tarefas;
    $pos = array_search ($id, array_column($tarefas, 'id'));
    if($pos>=0)
    array_splice($tarefas, $pos, 1);
    $_SESSION['tarefas']=$tarefas;
    return 'Tarefa removida com sucesso!';

}
function limpar(){
    session_destroy();
    return 'Dados removidos com sucesso!';
}//limpar
?>