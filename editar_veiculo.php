<?php
    session_start();
    include_once("conexao.php");


    $idveiculo=filter_input(INPUT_GET, 'idveiculo', FILTER_SANITIZE_NUMBER_INT);
    $idcontato=filter_input(INPUT_GET, 'idcontato', FILTER_SANITIZE_NUMBER_INT);
    $result_usuario="SELECT * FROM veiculos INNER JOIN contato ON idcontato = idveiculo WHERE idveiculo='$idveiculo'";
    $resultado_usuario=mysqli_query($conn, $result_usuario);
    $row_usuario=mysqli_fetch_assoc($resultado_usuario);
?>

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
    <title>Horse Parking - REGISTRO</title>
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
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        }
    ?>
    <div class="container justify-content-center mb-1">
        <div class="row justify-content-center">
            <div id="coluna" class="col-xxl-3"></div>
            <div class="col-md-5">
                <form action="proc_edit_veiculo.php" method="POST" class="mt-5">
                    <fieldset class="p-5" style="background-color: #2e2a2a; height: 720px;">
                        <div class="form-group">
                            <a href="listar_veiculos.php"><img src="img/setaaa.png" alt="retroceder" style="width: 30px; height: 30px"></a>
                        </div>
                        <div class="form-group mb-5" style="text-align: center; margin-top: -25px">
                            <h1 class="mb-5 mt-5" style="color: #fff">EDITAR VEÍCULO</h1>
                        </div>
                        <div class="form-group mb-5">
                            <label class="mb-2" for="veiculo" style="color: #fff; font-family: roboto, sans-serif">Veículo</label>
                            <input type="text" name='veiculo' value="<?php echo $row_usuario['veiculo']; ?>" pattern=".{1,250}" class="form-control" id="veiculo" aria-describedby="emailHelp" placeholder="Veículo" style="font-family: roboto, sans-serif; border-color: #c4c4c4; border-style: solid;" required>
                        </div>
                        <div class="form-group mb-5">
                            <input type="hidden" name="idveiculo" value="<?php echo $row_usuario['idveiculo']; ?>">
                            <input type="hidden" name="idcontato" value="<?php echo $row_usuario['idcontato']; ?>">

                            <label class="mb-2" for="placa" style="color: #fff; font-family: roboto, sans-serif">Placa</label>
                            <input type="text" name='placa' value="<?php echo $row_usuario['placa']; ?>" minlength='7' maxlength='7' class="form-control" id="placa" placeholder="Placa" style="font-family: roboto, sans-serif; border-color: #c4c4c4; border-style: solid;" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="mb-2" for="telefone" style="color: #fff; font-family: roboto, sans-serif">Telefone</label>
                            <div class="row">
                                <div class="col-xl-3">
                                <select name="ddd" id="ddd" class="form-control mb-5" required>
                                    <option value="<?php echo $row_usuario['ddd']; ?>"><?php echo $row_usuario['ddd']; ?></option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="24">24</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="51">51</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                    <option value="69">69</option>
                                    <option value="71">71</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="77">77</option>
                                    <option value="79">79</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>
                                    <option value="96">96</option>
                                    <option value="97">97</option>
                                    <option value="98">98</option>
                                    <option value="99">99</option>
                                </select>
                                </div>
                                <div class="col-xl-9 mb-5">
                                    <input type="tel" name="tel" pattern=".{8,}" value="<?php echo $row_usuario['tel']; ?>" title="Insira um número válido" class="form-control" id="tel" placeholder="Telefone" maxlength="15" style="font-family: roboto, sans-serif; border-color: #c4c4c4; border-style: solid;" required>
                                </div>
                            </div>
                        <div style="text-align: center;">
                            <button type="submit" class="btn mt-5" style="background-color: #ffc700; font-weight: 500">Enviar</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div id="coluna" class="col-xxl-3"></div>
        </div>
    </div>
</body>
</html>