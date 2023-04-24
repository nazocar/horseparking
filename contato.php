<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>Horse Parking - CONTATO</title>
</head>

<body style="background-color: #EDEDED;">
    <nav class="navbar navbar-expand-lg mb-2" style="background-color: #000;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="img/horselogo.png" style="width: 12vh; height: 10vh; margin-bottom: -20px; margin-top: -20px; margin-left: 2vh;" alt="HorseParking logo"></a>
          <button class="navbar-toggler" onclick="removeBg()" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" id="home" aria-current="page" href="index.php" style="color: #fff; margin-left: 5vh;">HOME</a></li>
              <li class="nav-item"><a class="nav-link" id="inst" href="institucional.php" style="margin-left: 5vh;">INSTITUCIONAL</a></li>
              <li class="nav-item"><a class="nav-link" id="blog" href="blog.php" style="margin-left: 5vh;">BLOG</a></li>
              <li class="nav-item"><a class="nav-link active" id="cont" href="#" style="color: #ffc700; margin-left: 5vh;">CONTATO</a></li>
              <li class="nav-item"><a class="nav-link" id="mapa" href="mapa.php" style="margin-left: 5vh;">MAPA</a></li>
              <li class="nav-item"><a class="nav-link" id="login" href="login.php" style="border-radius: 5px; padding-left: 15px; padding-right: 15px; margin-left: 5vh;">LOGIN</a></li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container-sm justify-content-center">

            <h1 class="mb-4" style="color: #2e2a2a; font-family: Roboto, sans-serif; font-weight: bold; text-align: center;">FALE CONOSCO</h1>

                <div class="container mb-5" id="form-container" style="background-color:#2E2A2A; border-radius: 10px; width: 30vw; padding-left: 5vw; padding-right: 5vw;"><br>

                    <form action="">
                        <div class="row justify-content-center" style="text-align: center;">
                            <div class="container">
                                <div class="row justify-content-center mb-4">
                                    <label class="mb-2" for="nome" style="color:#FFFFFF;">Nome</label><br>
                                    
                                    <input class="input" type="text" name="nome" id="nome" style="height: 50px; border-radius: 5px; border-color: #c4c4c4; border-style: solid;" required>
                                </div>
                                
                            
                                
                                <div class="row justify-content-center mb-4">
                                    <label class="mb-2" for="email" style="color:#FFFFFF;">E-mail</label><br>
                                    
                                    <input class="input" type="email" name="email" id="email" style="height: 50px; border-radius: 5px; border-color: #c4c4c4; border-style: solid;" required>
                                </div>
                                
                                
                                
                                <div class="row justify-content-center mb-4">
                                    <label class="mb-2" for="telefone" style="color:#FFFFFF;">Telefone</label><br>
                                    
                                    <input class="input" type="tel" name="telefone" id="telefone" style="height: 50px; border-radius: 5px; border-color: #c4c4c4; border-style: solid;" required>
                                </div>
                                
                                
                                
                                <div class="row justify-content-center mb-4">
                                    <label class="mb-2" for="assunto" style="color:#FFFFFF;">Assunto</label><br>
                                    
                                    <input class="input" type="text" name="assunto" id="assunto" style="height: 50px; border-radius: 5px; border-color: #c4c4c4; border-style: solid;" required>
                                </div>
                                
                                
                                
                                <div class="row justify-content-center mb-5">
                                    <label class="mb-2" for="mensagem" style="color:#FFFFFF;">Mensagem</label><br>
                                    
                                    <input class="input" type="text" name="mensagem" id="mensagem" style="height: 190px; border-radius: 5px; border-color: #c4c4c4; border-style: solid;" required>
                                </div>
                                
                                
                                <div class="row justify-content-center mb-3">
                                   <input type="submit" value="Enviar" id="enviarmsg" style="font-weight: 500; width: 70px; height: 4vh; margin-top: -10px; background-color:#FFC700; border-radius: 5px; border: none;"><br><br>
                                </div>

                            </div>
                            

                        </div>
                    </form>
                    
                </div>
            
            </div>

                <div class="container-fluid p-5" style="background-color: #ffc700;">
                    <div class="container">
                        <h5 style="font-family: Roboto, sans-serif; font-weight: bold; text-align: center; margin-bottom: 8vh; margin-top: 5vh;">OU NOS CONTATE ABAIXO:</h5>
                        <div class="row mb-5">
                            <div class="col-md mb-5" style="text-align: center;">
                                <img class="mb-3 img-fluid" src="img/icone_telefone.png" alt="ícone de telefone" width="30px">
                                <h5 class="mb-3">Telefone</h5>
                                <p class="mb-3" id="numerotel">(11) 91234-5678</h5>
                            </div>
                            <div class="col-md mb-5" style="text-align: center;">
                                <img class="mb-3 img-fluid" src="img/icone_email.png" alt="ícone de telefone" width="30px">
                                <h5 class="mb-3">E-mail</h5>
                                <p class="mb-3" id="enderecoemail">horseparking@gmail.com</h5>
                            </div>
                            <div class="col-md mb-5" style="text-align: center;">
                                <img class="mb-3 img-fluid" src="img/icone_whatsapp.png" alt="ícone de telefone" width="30px">
                                <h5 class="mb-3">WhattsApp</h5>
                                <p class="mb-3" id="zap">(11) 98765-4321</h5>
                            </div>
                        </div>
                    </div>
                </div>
                            
            <nav class="container-fluid" style="background-color: #000;">
                <div class="row" style="text-align: center;">
                  <p style="color: #fff; padding-top: 2vh; font-size: 0.875rem;">© HORSE PARKING 2023 - Todos os direitos reservados</p>
                </div>
            </nav>

</body>

</html>





