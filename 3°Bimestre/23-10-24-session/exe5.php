 <?php
session_start();
$cont = empty($_SESSION['contador'])? $_SESSION['contador'] = 3 : $_SESSION['contador'];
//verifique se há alguma variavel na session. Caso não, crie uma chamada de contador
//Com o valor de 3 tentativas. Se já eciste, recupere o valor e jogue na variavel cont



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<div>


<body class="bg-info-subtle">
         <form method="post"> 
                <div class= " shadow-lg p-3 mb-5  card w-25 mx-auto mt-5">
                        <div class = "card-body">
                        <h5 class= "card-title text-center"> LOGIN </h5>
                                <div class= "col">
                                        <div class="row-md-4">
                                                <label>Login</label>
                                                <input name="cplog" class="w-100"> 
                                        </div>
                                        <div class="row-md-4">
                                                <label> Senha</label>
                                                <input type="password" name="cpsenha" class="w-100"> 
                                        </div>
                                        <div class="row-md-4">
                                            <p>Tentativas: <?php echo $cont ?></p>
                                        </div>

                                        <div class="row-md-2">
                                                <br>
                                                <input  class=" btn btn-success w-100" type= "submit" value="Entrar"/> 
                                        </div>
                                      
                                </div>
                         
                        </div>
                </div>
        </form>
    
</body>
</html>

<?php
    if(!empty($_POST)){
         $login = $_POST['cplog'];
         $senha = $_POST['cpsenha'];


         if ($login == 'adm' && $senha =='adm')
            header('Location:principal.php');
         else{

            if($cont >= 0){
                //numero de tentativas é maior que zero?
            $cont--;
            $_SESSION['contador']= $cont;
            header('Location:erro.php');
            } else{
                //o número de tentativas é zero

                header('Location:bloq.php');
            }
            
         }
         if($_GET['acao'] =='s'){
            session_destroy();
         }
    }



?>