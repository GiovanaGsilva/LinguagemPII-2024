<?php

/**Faça um programa em PHP em que o usuário tenha apenasa 20s de sessão
 *  para utilizar o sistema. Passado esse tempo, bloquear o seu uso
 */

  // determinar limite de tempo, 20 segubndos para expirar o uso do sitema
 session_start();
 
  $limite = 800;
   //$_SESSION['ult_acesso'] = time();// armazena a data/hora/min que entrei no sistema

  if(isset($_SESSION['ult_acesso'])){
        //verifica se na session existe alguma variavel com o nome ult_acesso(armazena o tempo do ultimo acesso)
        $uso = time() - $_SESSION['ult_acesso'];
        //tempo de uso do sistema =  a quantidade de segundos desde 1/1/70 menos o tempo em segundos armazenado na session
    echo 'Tempo de sessão ativa:'.$uso;
    echo '<br>';
        if ($uso > $limite){
            echo 'Sessão expirada!';
        }else
        echo 'Sessão Ativa!';

    
  }



?>