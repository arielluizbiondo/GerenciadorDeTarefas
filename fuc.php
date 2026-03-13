<?php 
    session_start();
    $tarefas = empty($_SESSION['tarefas']) ? array() : $_SESSION['tarefas'];
    $id = empty($_SESSION['id']) ? 0 : $_SESSION['id'];
    
    function cadastrar($fazer, $prioridades)
    {
            global $tarefas;
            global $id;
            array_push($tarefas, array
            (
                'id' => $id,
                'fazer' => $fazer,
                'data' => date('j/m/y'),
                'priori' => $prioridades
                )
            );
            $_SESSION['tarefas']=$tarefas;
            $id++;
            $_SESSION['id'] = $id;
            return 'Cadastrado com sucesso!';
    }//Cadastrando

    function listar()
    {
        global $tarefas;
        return $tarefas;
    }

    function remover($id)
    {
        global $tarefas;
        $pos = array_search($id, array_column($tarefas, 'id'));
        if($pos >=0)
        {
            array_splice($tarefas, $pos, 1);
        }
        $_SESSION['tarefas']=$tarefas;
        return 'Tarefa removida com sucesso!';
    }//remove

    function limpar()
    {
        session_destroy();
        return 'Dados removidos com sucesso!';
    }
