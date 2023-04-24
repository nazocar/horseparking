<?php
    session_start();
    include_once("conexao.php");

    date_default_timezone_set('america/sao_paulo');

    $idveiculo=filter_input(INPUT_GET, 'idveiculo', FILTER_SANITIZE_NUMBER_INT);
    $idcontato=filter_input(INPUT_GET, 'idcontato', FILTER_SANITIZE_NUMBER_INT);

    $result_veiculo = "SELECT * FROM veiculos WHERE idveiculo = '$idveiculo' LIMIT 1";
    $resultado_veiculo = mysqli_query($conn, $result_veiculo);
    $row_veiculo = mysqli_fetch_assoc($resultado_veiculo);

    $hora_entrada = $row_veiculo['entrada'];
    $hora_saida = date("H:i:s");

    $entrou = new DateTime($hora_entrada);
    $saiu = new DateTime($hora_saida);

    $tempo = $saiu->diff($entrou);

    $horas = intval($tempo->format('%H'));
    $minutos = intval($tempo->format('%i'));

    if ($horas == 0){
        if($minutos <= 15){
            $valor = 0.00;
        } else if($minutos >= 16){
            $valor = 27.00;
        } 
    } else if ($horas == 1){
        if($minutos == 0){
            $valor = 27.00;
        } else if ($minutos > 0){
            $valor = 32.00;
        } 
    } else if ($horas == 2){
        if($minutos == 0){
            $valor = 32.00;
        } if ($minutos > 0){
            $valor = 32.00 + 9.00;
        }
    } if ($horas > 2){
        $valor = 32.00 + (($horas - 2) * 9);
    };

    $result_usuario="UPDATE veiculos SET saida = NOW(), valor = '$valor' WHERE idveiculo = '$idveiculo'";
    $resultado_usuario=mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn)){
        $_SESSION['msg']="<div class='mb-5' style='text-align: center'><span style='text-align: center; color: green; font-size: 1.5rem'>Veículo retirado. Valor pago: R$ " . $valor . ",00" . "</span></div>";
        header("Location: listar_veiculos.php"); 
    } else{
        $_SESSION['msg']="<div class='mb-5' style='text-align: center'><span style='text-align: center; color: green; font-size: 1.5rem'>Veículo não foi retirado." . "</span></div>";
        header("Location: listar_veiculos.php"); 
    }
    
?>