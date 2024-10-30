<?php
 session_start();
 $registro = empty(($_SESSION['reg']))? $registros = array() : $_SESSION['reg'];
 //verifica se existe na session uma variável chamada ref, caso não exista criar um vetor 
 //vazio, caso sim, pegue os valores armazenados nela. 
 
 function cadastrar_entrada($nome, $cpf){
    global $registros;
    array_push($registros, array(
      'nome'=>$nome,
      'cpf'=>$cpf,
      'data'=>date('j/m/y - H:i:s')
    ));
    $_SESSION['reg']=$registros;
    return 'Cadastrado com sucesso!<br/>';
 }

 function buscar_registros(){
    global $registros;
    return $registros;
    //apenas modifica o acesso da variável registros e retorne ele
 }

 //session
 //funciotions
function registrar_saida($cpf){
   global $registros;
   $pos= array_search($cpf,array_column($registros, 'cpf'));
   if ($pos>=0){
      unset($registros[$pos]);
      $_SESSION['reg'] = $registros;
   }
   return "CPF $cpf removido com sucesso!";
}

function limpar_dados(){
   session_destroy();
   return 'Dados removidos com sucesso!';
}




?>