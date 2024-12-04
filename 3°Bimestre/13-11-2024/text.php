rray_push para cadastrar no vetor;

/<?php
session_start(); // Inicia ou recupera a sessão para acessar o log
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Log de Atividades</title>
</head>
<body>
    <h1>Log de Atividades</h1>
    <?php
    if (isset($_SESSION['log']) && count($_SESSION['log']) > 0) {
        foreach ($_SESSION['log'] as $mensagem) {
            echo "<p>$mensagem</p>";
        }
    } else {
        echo "<p>Nenhuma atividade registrada até o momento.</p>";
    }
    ?>
    <hr>
    <a href="index.php">Voltar para o menu principal</a>
</body>
</html>



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
                    <th>Setor</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>
           <tbody>

           <?php
           if (empty($_SESSION['log'])){
               echo '<tr>';
               echo '<td colspan="4">Nenhum Registro </td>';
               echo '<tr>';

            }else{
                foreach(buscar_registros() as $dados){
                   echo '<tr>';
                   echo '<td>'.$dados['nome'].'</td>';
                   echo '<td>'.$dados['cpf'].' </td>';
                   echo '<td>'.$dados['data'].' </td>';
                   echo '<td><a href="index.php?acao=remove&cpf='.$dados['cpf'].'">Saida </a> </td>';
                }
            }

?>
           </tbody>
        </table>
        <a href="index.php">Voltar</a>
</body>
</html>




form --> if(!empty($_GET)){
    <input name = "Botão" value="sale"/>

}



<?php
session_start();

// Inicializa o array de alarmes na sessão, caso ainda não esteja definido
if (!isset($_SESSION['alarmes'])) {
    $_SESSION['alarmes'] = array();
}

// Função para cadastrar um novo alarme
function cadastrarAlarme($nome, $status) {
    // Verifica se o nome e status foram preenchidos
    if (empty($nome) || empty($status)) {
        return 'Nome e status do alarme são obrigatórios.';
    }

    // Cria um novo alarme com um ID único
    $novoAlarme = array(
        'id' => uniqid(),
        'nome' => $nome,
        'status' => $status,
        'data' => date('j/m/y H:i:s')
    );

    // Adiciona o novo alarme ao array na sessão
    $_SESSION['alarmes'][] = $novoAlarme;

    return 'Alarme cadastrado com sucesso!';
}

// Função para listar todos os alarmes
function listarAlarmes() {
    return $_SESSION['alarmes'];
}

// Tratamento do formulário de cadastro de alarmes
$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $status = $_POST['status'] ?? '';
    $mensagem = cadastrarAlarme($nome, $status);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Simulação de Alarmes</title>
</head>
<body>
    <h1>Sistema de Simulação de Alarmes</h1>
    
    <!-- Formulário de cadastro de alarmes -->
    <h2>Cadastrar Novo Alarme</h2>
    <form method="POST" action="">
        <label for="nome">Nome do Alarme:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="status">Status do Alarme:</label>
        <select id="status" name="status" required>
            <option value="Ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
        </select>
        <br>
        <button type="submit">Cadastrar Alarme</button>
    </form>
    
    <!-- Mensagem de retorno ao usuário -->
    <?php if ($mensagem): ?>
        <p><?php echo $mensagem; ?></p>
    <?php endif; ?>
    
    <!-- Lista de alarmes cadastrados -->
    <h2>Lista de Alarmes</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Status</th>
            <th>Data de Cadastro</th>
        </tr>
        <?php foreach (listarAlarmes() as $alarme): ?>
            <tr>
                <td><?php echo $alarme['id']; ?></td>
                <td><?php echo htmlspecialchars($alarme['nome']); ?></td>
                <td><?php echo htmlspecialchars($alarme['status']); ?></td>
                <td><?php echo $alarme['data']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
``
