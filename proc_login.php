<?php
    session_start();
    include_once("conexao.php");

    $login = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
    $senhalogin = base64_encode(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));

    $result_usuario = "SELECT * FROM funcionarios WHERE username = '$login' && senha = '$senhalogin' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);

    if (isset($row_usuario)){
        $_SESSION['msg']="<div class='mb-5' style='text-align: center'><span style='text-align: center; color: green; font-size: 1.5rem'>Seja bem-vindo, " . $row_usuario['username'] . "!" . "</span></div>";
        header("Location: menu_func.php");
    } else {
        $result_adm = "SELECT * FROM adm WHERE username = '$login' && senha = '$senhalogin' LIMIT 1";
        $resultado_adm = mysqli_query($conn, $result_adm);
        $row_adm = mysqli_fetch_assoc($resultado_adm); 

        if(isset($row_adm)){
            $_SESSION['msg']="<div class='mb-5' style='text-align: center'><span style='text-align: center; color: green; font-size: 1.5rem'>Seja bem-vindo, " . $row_adm['username'] . "!" . "</span></div>";
            header("Location: menu.php");
        } else{
            $_SESSION['msg']="<div class='mb-5' style='text-align: center'><span style='text-align: center; color: red; font-size: 1rem'>Falha ao logar. Username ou senha incorretos. " . "</span></div>";
            header("Location: login.php");
        }
    }


