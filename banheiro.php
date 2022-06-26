<?php
    function checkBoxData($cCam){
        if(isseT($_POST[$cCam])){
            return true;
        } else {
            return false;
        }
    }

    function checkBoxGetId($cCam){
        if($cCam == 'Chuveiro') return 'chuveiro'; 
        if($cCam == 'Pantufas') return 'pantufas';
        if($cCam == 'Roupao') return 'roupao';
        if($cCam == 'Toalhas de banho') return 'toalhasBanho';
        if($cCam == 'Lixeira') return 'lixeira';
        if($cCam == 'Toalhas de rosto') return 'toalhasRosto';
        if($cCam == 'Saboneteira') return 'saboneteira';
        if($cCam == 'Porta shampoo') return 'portaShampoo';
        if($cCam == 'Porta escova') return 'portaEscova';
        if($cCam == 'Bandeja') return 'bandeja';
    }

    include_once('config.php');

    if(isseT($_POST['submit'])){
        $comodo = 'Banheiro';

        $chuveiro     = checkBoxData('chuveiro');
        $pantufas     = checkBoxData('pantufas');
        $roupao       = checkBoxData('roupao');
        $toalhasBanho = checkBoxData('toalhasBanho');
        $lixeira      = checkBoxData('lixeira');
        $toalhasRosto = checkBoxData('toalhasRosto');
        $saboneteira  = checkBoxData('saboneteira');
        $portaShampoo = checkBoxData('portaShampoo');
        $portaEscova  = checkBoxData('portaEscova');
        $bandeja      = checkBoxData('bandeja');

        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$chuveiro'     WHERE (COM = '$comodo' and ITE = 'Chuveiro');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$pantufas'     WHERE (COM = '$comodo' and ITE = 'Pantufas');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$roupao'       WHERE (COM = '$comodo' and ITE = 'Roupao');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$toalhasBanho' WHERE (COM = '$comodo' and ITE = 'Toalhas de banho');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$lixeira'      WHERE (COM = '$comodo' and ITE = 'Lixeira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$toalhasRosto' WHERE (COM = '$comodo' and ITE = 'Toalhas de rosto');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$saboneteira'  WHERE (COM = '$comodo' and ITE = 'Saboneteira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$portaShampoo' WHERE (COM = '$comodo' and ITE = 'Porta shampoo');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$portaEscova'  WHERE (COM = '$comodo' and ITE = 'Porta escova');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$bandeja'      WHERE (COM = '$comodo' and ITE = 'Bandeja');");
        
   }

   $sql = "SELECT * FROM HENX WHERE COM = 'Banheiro'";

   $result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css"/> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Enxovalzito - Banheiro</title>       
  </head>

  <body>
    <header>
      <nav>
        <a class="logo" href="/">Enxovalzito</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="index.php">Início</a></li>
          <li><a href="cozinha.php">Cozinha</a></li>
          <li><a href="banheiro.php">Banheiro</a></li>
          <li><a href="lavanderia.php">Lavanderia</a></li>
          <li><a href="salaJantar.php">Sala de jantar</a></li>
          <li><a href="salaEstar.php">Sala de estar</a></li>
          <li><a href="quarto.php">Quarto</a></li>
          <li><a href="escritorio.php">Escritório</a></li>
        </ul>
      </nav>
    </header>
    <main id="banheiro">

    <div class="main-container">
        <h1>Banheiro</h1>
        <form id="register-form" method="POST" action="banheiro.php">   
            <?php
                // Carrega os dados
                while($user_data = mysqli_fetch_assoc($result)){

                    if($user_data['TEM'] == 1){ 
                        $cChecked = 'checked';
                    } else {
                        $cChecked = '';
                    };

                    echo
                    '
                    <div class="half-box">
                        <input type="checkbox" id="'.checkBoxGetId($user_data['ITE']).
                        '" name="'.checkBoxGetId($user_data['ITE']).
                        '" class="cbox cboxBanheiro" onclick="alterarProgresso()" '
                        .$cChecked.'>
                        <label for="'.checkBoxGetId($user_data['ITE']).'">'.$user_data['ITE'].'</label>
                    </div>';
                }   
            ?> 
            <div class="full-box">
                <button name="submit" class="buttonBanheiro" type="submit" id="btn-submit" title="Registrar o enxoval do apartamentinho">
                   <div class="submitIcon buttonBanheiro"></div>      
                </button>
            </div>

            
        </form>  
    </div>
    <!-- <div class="main-container">
        <form action="">
            <div class="full-box">
                <div id="valorProgresso">
                    0%
                </div>
            </div>
            <div class="barra">
                <div></div>
            </div>
        </form>
    </div> -->
    <?php
        // Carrega os dados
        while($user_data = mysqli_fetch_assoc($result)){
            echo " \n <script> document.getElementById('".checkBoxGetId($user_data['ITE'])."').checked = ".$user_data['TEM']." </script>";
        }   
    ?> 
    </main>
    <script src="mobile-navbar.js"></script>
    <!-- <script src="scripts.js">alterarProgresso()</script> -->
  </body>
</html>