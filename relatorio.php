<?php
    session_start();
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tabelacarro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>Horse Parking - VEÍCULOS</title>
</head>
<body style="background-color: #EDEDED">
    <nav class="navbar navbar-expand-lg mb-5" style="background-color: #000;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="img/horselogo.png" style="width: 12vh; height: 10vh; margin-bottom: -20px; margin-top: -20px; margin-left: 2vh;" alt="HorseParking logo"></a>
          <button class="navbar-toggler bg-" onclick="removeBg()" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" aria-current="page" id="home" href="index.php" style="color: #fff; margin-left: 5vh;">HOME</a></li>
              <li class="nav-item"><a class="nav-link" id="inst" href="institucional.php" style="margin-left: 5vh;">INSTITUCIONAL</a></li>
              <li class="nav-item"><a class="nav-link" id="blog" href="blog.php" style="margin-left: 5vh;">BLOG</a></li>
              <li class="nav-item"><a class="nav-link" id="cont" href="contato.php" style="margin-left: 5vh;">CONTATO</a></li>
              <li class="nav-item"><a class="nav-link active" id="mapa" href="mapa.php" style="margin-left: 5vh;">MAPA</a></li>
              <li class="nav-item"><a class="nav-link" id="login" href="login.php" style="border-radius: 5px; padding-left: 15px; padding-right: 15px; margin-left: 5vh;">LOGIN</a></li>
            </ul>
          </div>
        </div>
    </nav>
    <div id="tabela" class="container-fluid p-5 mb-5" style="background-color: #2e2a2a; border-radius: 20px; width: 50vw">
        <div class="row mb-5" style="text-align: center">
            <h1 style="color: #fff">RELATÓRIO FINAL</h1>
        </div>
        <div id="tabelapt2" class="container-fluid border border-warning p-5 mb-4" style="background-color: #EDEDED; outline-color: #ffc700; border-radius: 20px">

        <?php

            $query_item = "SELECT COUNT(idveiculo) AS qnt_vel FROM veiculos";
            $result_item = mysqli_query($conn, $query_item);
            $row_item = mysqli_fetch_assoc($result_item);

            echo "<table class='table table-hover table-striped table-bordered'";
            echo "<tr>";
            echo "<th>Quantidade de veículos</th>";
            echo "<th>Valor total</th>";
            echo "</tr>";

                echo "<tr>";
                echo "<td>".$row_item['qnt_vel']."</td>";
                echo "<td>".$_SESSION['msg']."</td>";
                echo "</tr>";
            echo "</table>";
        ?>
            
        </div>
    </div>
</body>
</html>>
</body>
</html>