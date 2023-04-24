<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="script2.js"></script>
    <title>Horse Parking - LOGIN</title>
</head>
<body style="background-color: #EDEDED;">
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
              <li class="nav-item"><a class="nav-link" id="login" href="#" style="border-radius: 5px; padding-left: 15px; padding-right: 15px; margin-left: 5vh;">LOGIN</a></li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-7" style="margin-top: 15vh; text-align: center">
                <div class="row justify-content-center">
                    <img id="horselogin" class="img-fluid mt-5" src="img/horselogo.png" alt="logo da horse parking" style="width: 30vw; height: 40vh; margin-right: 15vw">
                </div>
            </div>
            <div class="col-md-5 mt-5 mb-5">
                <form action="proc_login.php" method="POST" class="mt-5">
                    <fieldset class="p-5" style="background-color: #2e2a2a; height: 650px;">
                        <div class="form-group mb-5" style="text-align: center;">
                            <h1 class="mb-5 mt-5" style="color: #fff">LOGIN</h1>
                        </div>
                        <?php
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                        ?>
                        <div class="form-group mb-5">
                            <label class="mb-2" for="username" style="color: #fff; font-family: roboto, sans-serif">Username</label>
                            <input type="text" name="username" pattern=".{1,250}" title="Insira 1 ou mais caracteres" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username" style="font-family: roboto, sans-serif; border-color: #c4c4c4; border-style: solid;" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="mb-2" for="senha" style="color: #fff; font-family: roboto, sans-serif">Senha</label>
                            <input type="password" name="senha" pattern=".{8,100}" title="Insira 8 ou mais caracteres" class="form-control" id="senha" placeholder="Senha" style="font-family: roboto, sans-serif; border-color: #c4c4c4; border-style: solid;" oninvalid="InvalidMsgPass(this);" 
                   oninput="InvalidMsgPass(this);" required>
                        </div>
                        <div style="text-align: center;">
                            <button type="submit" class="btn mt-5" style="background-color: #ffc700; font-weight: 500">Enviar</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</body>
</html>