<?php
    session_start();
    include_once("conexao.php");

    date_default_timezone_set('America/Sao_paulo');

    $veiculo=filter_input(INPUT_POST, 'veiculo', FILTER_SANITIZE_STRING);
    $placa=filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_EMAIL);
    $ddd=filter_input(INPUT_POST, 'ddd', FILTER_SANITIZE_STRING);
    $tel=filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
    $entrada=filter_input(INPUT_POST, 'entrada', FILTER_SANITIZE_STRING);
    $data=date("Y-m-d");

    $digitos = str_split($placa, 1);

    if (strlen($placa) == 7){
        if ((ctype_alpha($digitos[0])) && (ctype_alpha($digitos[1])) && (ctype_alpha($digitos[2])) && (ctype_digit($digitos[3])) && (ctype_digit($digitos[4])) && (ctype_digit($digitos[5])) && (ctype_digit($digitos[6]))){
            $result_usuario="INSERT INTO veiculos (veiculo, placa, entrada, datahj) VALUES ('$veiculo', '$placa', NOW(), '$data')";
            $resulta_usuario="INSERT INTO contato (ddd, tel) VALUES ('$ddd', '$tel')";
            $resultad_usuario=mysqli_query($conn, $result_usuario);
            $resultado_usuario=mysqli_query($conn, $resulta_usuario);

            if (mysqli_insert_id($conn)){
                $_SESSION['msg']="<div class='mb-5' style='text-align: center'><span style='text-align: center; color: green; font-size: 1.5rem'>Veículo registrado com sucesso" . "!" . "</span></div>";
                header("Location: listar_veiculos.php");
                header("Location: listar_veiculos_func.php");
            } else{
                $_SESSION['msg']="<div style='text-align: center'><span style='text-align: center; color: red; font-size: 1.5rem'>Veículo não foi registrado." . "</span></div>";
                header("Location: registro.php");
                header("Location: registro_func.php");
            }
        } else if ((ctype_alpha($digitos[0])) && (ctype_alpha($digitos[1])) && (ctype_alpha($digitos[2])) && (ctype_digit($digitos[3])) && (ctype_alpha($digitos[4])) && (ctype_digit($digitos[5])) && (ctype_digit($digitos[6]))){
            $result_usuario="INSERT INTO veiculos (veiculo, placa, entrada, datahj) VALUES ('$veiculo', '$placa', NOW(), '$data')";
            $resulta_usuario="INSERT INTO contato (ddd, tel) VALUES ('$ddd', '$tel')";
            $resultad_usuario=mysqli_query($conn, $result_usuario);
            $resultado_usuario=mysqli_query($conn, $resulta_usuario);

            if (mysqli_insert_id($conn)){
                $_SESSION['msg']="<div class='mb-5' style='text-align: center'><span style='text-align: center; color: green; font-size: 1.5rem'>Veículo registrado com sucesso" . "!" . "</span></div>";
                header("Location: listar_veiculos.php");
                header("Location: listar_veiculos_func.php");
            } else{
                $_SESSION['msg']="<div  style='text-align: center'><span style='text-align: center; color: red; font-size: 1.5rem'>Veículo não foi registrado." . "</span></div>";
                header("Location: registro.php");
                header("Location: registro_func.php");
            }
        } else{
            $_SESSION['msg']="<div style='text-align: center'><span style='text-align: center; color: red; font-size: 1.5rem'>Veículo não foi registrado. Placa inválida." . "</span></div>";
            header("Location: registro.php");
            header("Location: registro_func.php");
        }
    } 
?>