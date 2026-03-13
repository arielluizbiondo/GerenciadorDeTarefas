<?php
    include 'fuc.php';
    if(!empty($_GET))
    {   
        echo cadastrar($_GET['fazer'], $_GET['Prioridade']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registrar.css">
    <title>Registrar tarefas</title>
</head>
<body>
    <h2>Cadastro de tarefas</h2>
    <fieldset>
        <form action="" method="get">
            <label for="">O que precisa lembrar de fazer?</label><br>
            <input type="text" name="fazer" class="caixaInput">
            <br>
            <label for="">Prioridade</label><br>
            <input type="text" name="Prioridade" class="caixaInput">
            <br>
            <input type="submit" value="cadastrar" name="cadastrar" class="butao">
            <input type="reset" value="Limpar" class="butao">
        </form>
    </fieldset>
    <a href="index.html">Voltar</a>
</body>
</html>