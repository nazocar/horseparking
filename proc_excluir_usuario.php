<?php
    session_start();
    include_once("conexao.php");

    $idfunc = filter_input(INPUT_GET, 'idfunc', FILTER_SANITIZE_NUMBER_INT);
    $idtel = filter_input(INPUT_GET, 'idtel', FILTER_SANITIZE_NUMBER_INT);

    if(!empty($idfunc)){
        $result_usuario = "DELETE a.*, b.* 
        FROM funcionarios a 
        LEFT JOIN telefone_func b 
        ON b.idtel = a.idfunc 
        WHERE a.idfunc = $idfunc";
        $resultado_usuario = mysqli_query($conn, $result_usuario);

        if(mysqli_affected_rows($conn)){
            $_SESSION['msg']="<div class='mb-5' style='text-align: center'><span style='text-align: center; color: green; font-size: 1.5rem'>Usuário deletado com sucesso" . "!" . "</span></div>";
            header("Location: listar_usuarios.php");
        } else{
            $_SESSION['msg']="<div class='mb-5' style='text-align: center'><span style='text-align: center; color: red; font-size: 1.5rem'>Usuário não foi deletado." . "</span></div>";
            header("Location: listar_usuarios.php"); 
        }
    } else{
        $_SESSION['msg']="<div class='mb-5' style='text-align: center'><span style='text-align: center; color: blue; font-size: 1.5rem'>Selecione um usuário." . "</span></div>";
        header("Location: listar_usuarios.php");
    }
?>