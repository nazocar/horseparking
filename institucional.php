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
    <title>Horse Parking - INSTITUCIONAL</title>
</head>
<body style="background-color: #EDEDED;">
    <nav class="navbar navbar-expand-lg" style="background-color: #000;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="img/horselogo.png" style="width: 12vh; height: 10vh; margin-bottom: -20px; margin-top: -20px; margin-left: 2vh;" alt="HorseParking logo"></a>
          <button class="navbar-toggler" onclick="removeBg()" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" id="home" aria-current="page" href="index.php" style="color: #fff; margin-left: 5vh;">HOME</a></li>
              <li class="nav-item"><a class="nav-link active" id="inst" href="#" style="color: #ffc700; margin-left: 5vh;">INSTITUCIONAL</a></li>
              <li class="nav-item"><a class="nav-link" id="blog" href="blog.php" style="margin-left: 5vh;">BLOG</a></li>
              <li class="nav-item"><a class="nav-link" id="cont" href="contato.php" style="margin-left: 5vh;">CONTATO</a></li>
              <li class="nav-item"><a class="nav-link" id="mapa" href="mapa.php" style="margin-left: 5vh;">MAPA</a></li>
              <li class="nav-item"><a class="nav-link" id="login" href="login.php" style="border-radius: 5px; padding-left: 15px; padding-right: 15px; margin-left: 5vh;">LOGIN</a></li>
            </ul>
          </div>
        </div>
    </nav>

      <img id="carros" class="img-fluid mb-5" src="img/carros.jpg" alt="imagem de carros estacionados" style="height: 85vh; width: 100vw;">

    <div class="container mb-5">
        <div class="row mb-2">
            <h3 style="color: #ffc700;">A Horse Parking</h3>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p style="font-size: 1.275rem; text-align: justify;">Somos uma empresa especializada em estacionamentos criada no ano de 2023, em que a demanda por locais para estacionar veículos cresce continuamente. Contamos com diversos funcionários preparados e dispostos a ajudar a esclarecer qualquer dúvida de nossos clientes. Adotamos o cavalo como um mascote, representando a agilidade com que realizamos nosso trabalho e atendimento.</p>
            </div>
            <div class="col-lg-6">
                    <p style="font-size: 1.275rem; text-align: justify;">O estacionamento é aberto às 10h e fecha às 23h, não sendo permitida a estadia de nenhum veículo após este horário, sujeito a multa. Possuímos andares de estacionamentos cobertos e descobertos, sendo possível a escolha do motorista de onde posicionar seu veículo.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5" style="background-color: #ffc700;">
        <div class="container">
          <h2 style="font-family: Roboto, sans-serif; font-weight: bold; text-align: center; margin-bottom: 8vh; margin-top: 5vh;">POR QUE ESCOLHER A HORSE PARKING?</h2>
          <div class="row mb-5">
            <div class="col-xxl-4 mb-3">
              <div class="row justify-content-center">
                <h5 class="mb-3" style="text-align: center;">Segurança</h5>
                <p class="mb-3" style="text-align: justify;">Ao estacionar seu veículo na Horse Parking você possui garantia de segurança durante todo seu tempo de estadia. Possuímos sistemas de vigilância e possuímos funcionários rondando o espaço para garantir que nenhum veículo será prejudicado.</p>
              </div>
            </div>
            <div class="col-xxl-4 mb-3">
              <div class="row justify-content-center">
                <h5 class="mb-3" style="text-align: center;">Capacidade</h5>
                <p class="mb-3" style="text-align: justify;">Possuímos 200 vagas disponíveis para estacionamento dos veículos, em estacionamentos cobertos e descobertos.</p>
              </div>
            </div>
            <div class="col-xxl-4 mb-3">
                <div class="row justify-content-center">
                    <h5 class="mb-3" style="text-align: center;">Economia</h5>
                    <p class="mb-3" style="text-align: justify;">Estacionando seu veículo na Horse Parking você economiza seu dinheiro, além de evitar problemas com pagamentos, juros e burocracia.</p>
                </div>
            </div>
          </div>
          <div class="row mb-4">
              <hr style="height: 1px; width: 80%; margin: auto; background-color: #000000; color: #000000; margin-top: -1vh;">
          </div>


          <div class="row justify-content-center">
            <h3 style="font-family: Roboto, sans-serif; font-weight: bold; text-align: center; margin-bottom: 8vh; margin-top: 5vh;">OUTROS BENEFÍCIOS</h3>
          </div>
          <div class="row mb-5">
            <div class="col-xxl-4 mb-5">
              <div class="row justify-content-center">
                <h5 class="mb-3" style="text-align: center;">Atendimento especializado</h5>
              </div>
            </div>
            <div class="col-xxl-4 mb-5">
              <div class="row justify-content-center">
                <h5 class="mb-3" style="text-align: center;">Limpeza do ambiente</h5>
              </div>
            </div>
            <div class="col-xxl-4 mb-5">
              <div class="row justify-content-center">
                <h5 class="mb-3" style="text-align: center;">Agilidade</h5>
              </div>
            </div>
            <div class="col-xxl-4 mb-5">
              <div class="row justify-content-center">
                <h5 class="mb-3" style="text-align: center;">Transparência</h5>
              </div>
            </div>
            <div class="col-xxl-4 mb-5">
              <div class="row justify-content-center">
                <h5 class="mb-3" style="text-align: center;">Excelência</h5>
              </div>
            </div>
            <div class="col-xxl-4 mb-5">
              <div class="row justify-content-center">
                <h5 class="mb-3" style="text-align: center;">Comodidade</h5>
              </div>
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