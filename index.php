<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>Horse Parking - HOME</title>
</head>
<body style="background-color: #EDEDED;">
    <nav id="nav" class="navbar navbar-expand-lg" style="background-color: #000;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="img/horselogo.png" style="width: 12vh; height: 10vh; margin-bottom: -20px; margin-top: -20px; margin-left: 2vh;" alt="HorseParking logo"></a>
          <button class="navbar-toggler" onclick="removeBg()" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="#" style="color: #ffc700; margin-left: 5vh;">HOME</a></li>
              <li class="nav-item"><a class="nav-link" id="inst" href="institucional.php" style="margin-left: 5vh;">INSTITUCIONAL</a></li>
              <li class="nav-item"><a class="nav-link" id="blog" href="blog.php" style="margin-left: 5vh;">BLOG</a></li>
              <li class="nav-item"><a class="nav-link" id="cont" href="contato.php" style="margin-left: 5vh;">CONTATO</a></li>
              <li class="nav-item"><a class="nav-link" id="mapa" href="mapa.php" style="margin-left: 5vh;">MAPA</a></li>
              <li class="nav-item"><a class="nav-link" id="login" href="login.php" style="border-radius: 5px; padding-left: 15px; padding-right: 15px; margin-left: 5vh;">LOGIN</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="institucional.php"><img id="carousel" src="img/estrada.jpg" class="d-block w-100" style="height: 85vh;" alt="Imagem de carrossel"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Conheça a Horse Parking</h5>
                  <p>Saiba mais sobre nossa empresa acessando a página QUEM SOMOS</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href="blog.php"><img id="carousel" src="img/placa.jpg" class="d-block w-100" style="height: 85vh;" alt="Imagem de carrossel"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Visite nosso blog</h5>
                  <p>Encontre e leia notícias a respeito de leis de trânsito e regras do estacionamento em nosso BLOG</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href="mapa.php"><img  id="carousel" src="img/estacionamento.jpg" class="d-block w-100" style="height: 85vh;" alt="Imagem de carrossel"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Veja nossas unidades</h5>
                  <p>Confira a localização de nossas principais unidades na página de MAPA</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="container">
        <h1 style="font-family: Roboto, sans-serif; font-weight: bold; text-align: center; margin-bottom: 8vh; margin-top: 5vh;">QUEM SOMOS</h1>
        
        <div class="row">
          <div class="col-lg-6">
            <p class="mb-5" style="font-family: Roboto, sans-serif; text-align: justify;">Somos uma empresa especializada em estacionamentos criada no ano de 2023, em que a demanda por locais para estacionar veículos cresce continuamente. Contamos com diversos funcionários preparados e dispostos a ajudar a esclarecer qualquer dúvida de nossos clientes.</p>
              <div class="container">
                <div class="row" id="row1">
  
                  <button id="saibainst" style="background-color: #ffc700; border-radius: 10px; border: none; padding-left: 20px; padding-right: 20px; padding-top: 15px; padding-bottom: 15px; margin-bottom: 10vh; width: 30vh;"><a style="text-decoration: none; color: #000; font-size: 1.5rem;" href="institucional.php">SAIBA QUEM SOMOS</a></button>
                </div>
              </div>
          </div>
          <div class="col-lg-6 justify-content-center">
            <div class="row justify-content-center">
              <img class="img-fluid" src="img/horselogo.png" style="width: 65vh; height: 45vh; margin-top: -10vh;" alt="HorseParking logo">

            </div>
          </div>
        </div>
      </div>

      <hr style="height: 3px; width: 80%; margin: auto; background-color: #ffc700; color: #ffc700; margin-top: -1vh;">
      
      <div class="container">
        <h1 style="font-family: Roboto, sans-serif; font-weight: bold; text-align: center; margin-bottom: 8vh; margin-top: 5vh;">CONHEÇA NOSSO BLOG</h1>
        
        <div class="row mb-4">
          <div class="col-lg mb-4">
              <div class="card">
                <img src="img/consulta de pontos.PNG" class="card-img-top" alt="card de notícia">
                <div class="card-body">
                  <h4 class="card-title mb-4" style="text-align: center;">Consulta de pontos</h5>
                  <p class="card-text" style="text-align: justify;">Sabia que existe uma forma super-rápida e fácil de consultar os pontos da sua CNH? Você pode visualizar o histórico de até 12 meses pelo portal do Detran ou pelo app do Poupatempo, que está disponível no Google Play, na App Store e, também, no site detran.sp.gov.br</p>
                </div>
              </div>
          </div>
          <div class="col-lg mb-4">
            <div class="card">
              <img src="img/CNH definitiva.PNG" class="card-img-top" alt="card de notícia">
              <div class="card-body">
                <h4 class="card-title mb-4" style="text-align: center;">CNH definitva</h5>
                <p class="card-text" style="text-align: justify;">A primeira habilitação sempre foi um processo demorado. Mas, agora, você pode fazer tudo usando o seu celular. É só baixar o app do Poupatempo, disponível no Google Play, na App Store e, também, no site detran.sp.gov.br. Para mais detalhes, acesse nosso blog.</p>
              </div>
            </div>
          </div>
          <div class="col-lg mb-4">
            <div class="card">
              <img src="img/primeira habilitação.PNG" class="card-img-top" alt="card de notícia">
              <div class="card-body">
                <h4 class="card-title mb-4" style="text-align: center;">Primeira habilitação</h5>
                <p class="card-text" style="text-align: justify;">Sabia que existe uma forma super-rápida e fácil de consultar os pontos da sua CNH? Você pode visualizar o histórico de até 12 meses pelo portal do Detran ou pelo app do Poupatempo, que está disponível no Google Play, na App Store e, também, no site detran.sp.gov.br</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button class="botao" id="saibablog" style="background-color: #ffc700; border-radius: 10px; border: none; padding-left: 20px; padding-right: 20px; padding-top: 15px; padding-bottom: 15px; display: block; margin-bottom: 10vh;"><a style="text-decoration: none; color: #000; font-size: 1.5rem;" href="blog.php">VISITE O BLOG</a></button>

      <div class="container-fluid p-5" style="background-color: #ffc700;">
        <div class="container">
          <h1 style="font-family: Roboto, sans-serif; font-weight: bold; text-align: center; margin-bottom: 8vh; margin-top: 5vh;">VISITE NOSSAS UNIDADES</h1>
          <div class="row">
            <div class="col-lg-6">
              <div class="row justify-content-center">
                <img class="img-fluid" src="img/PlaceholderGoogleMaps.png" alt="ícone de mapa" style="width: 50vh; height: 40vh">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row justify-content-center">
                <button id="saibamapa" style="background-color: #000000; border-radius: 10px; border: none; padding-left: 20px; padding-right: 20px; padding-top: 15px; padding-bottom: 15px; display: block; margin-bottom: 10vh; margin-top: 20vh; text-align: center; width: 35vh;"><a style="text-decoration: none; color: #ffffff; font-size: 1.5rem;" href="mapa.php">VEJA AS LOCALIZAÇÕES</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid p-5" style="background-color: #ffc700;"></div>
      
      <nav class="container-fluid" style="background-color: #000;">
        <div class="row" style="text-align: center;">
          <p style="color: #fff; padding-top: 2vh; font-size: 0.875rem;">© HORSE PARKING 2023 - Todos os direitos reservados</p>
        </div>
      </nav>
      
</body>
</html>