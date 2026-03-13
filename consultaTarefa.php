<?php 
    include 'fuc.php';

    if(!empty($_GET))
    {
        if ($_GET['acao']=='remove')
        {
            echo remover($_GET['id']);
        }
        if ($_GET['acao']=='limpar')
        {
            echo limpar();
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/consulta.css">
    <title>Consultar tarefa</title>
</head>
<body>
    <h2>Consultar Tarefas</h2>
    <fieldset>
        <table border="1px solid">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tarefa</th>
                    <th>Data</th>
                    <th>prioridade</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                if (empty($_SESSION['tarefas'])) 
                {
                    echo '<tr>';
                    echo     '<td colspan="4"> Nenhuma tarefa programada </td>'; 
                    echo '</tr>';
                }
                else
                {
                    foreach(listar() as $dados)
                    {
                        echo '<tr>';
                        echo '<td>' . $dados['id']. '</td>';
                        echo '<td>' . $dados['fazer']. '</td>';
                        echo '<td>' . $dados['data']. '</td>';
                        echo '<td>' . $dados['priori']. '</td>';
                        echo '<td><a href="consultaTarefa.php?acao=remove&id='.$dados['id'].'">Resolvido</a></td>';
                        echo '</tr>';
                    }
                }
            ?>
            </tbody>
        </table>
    </fieldset>
    <a href="index.html">Voltar</a>
    <a href="consultaTarefa.php?acao=limpar">Limpar dados</a>
</body>
</html>