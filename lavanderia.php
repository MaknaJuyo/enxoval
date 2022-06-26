<?php
    function checkBoxData($cCam){
        if(isseT($_POST[$cCam])){
            return true;
        } else {
            return false;
        }
    }

    function checkBoxGetId($cCam){
        if($cCam == 'Lava e seca')     return 'lavaSeca';
        if($cCam == 'Varal')           return 'varal';
        if($cCam == 'Aspirador de pó') return 'aspirador';
        if($cCam == 'Ferro de passar') return 'ferro';
        if($cCam == 'Tábua de passar') return 'tabua';
        if($cCam == 'Escada')          return 'escada';
        if($cCam == 'Cesto')           return 'cesto';
        if($cCam == 'Lixeira')         return 'lixeira';
    }

    include_once('config.php');

    if(isseT($_POST['submit'])){
        $comodo = 'Lavanderia';

        $lavaSeca  = checkBoxData('lavaSeca');
        $varal     = checkBoxData('varal');
        $aspirador = checkBoxData('aspirador');
        $ferro     = checkBoxData('ferro');
        $tabua     = checkBoxData('tabua');
        $escada    = checkBoxData('escada');
        $cesto     = checkBoxData('cesto');
        $lixeira   = checkBoxData('lixeira');

        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$lavaSeca'  WHERE (COM = '$comodo' and ITE = 'Lava e seca');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$varal'     WHERE (COM = '$comodo' and ITE = 'Varal');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$aspirador' WHERE (COM = '$comodo' and ITE = 'Aspirador de pó');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$ferro'     WHERE (COM = '$comodo' and ITE = 'Ferro de passar');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$tabua'     WHERE (COM = '$comodo' and ITE = 'Tábua de passar');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$escada'    WHERE (COM = '$comodo' and ITE = 'Escada');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$cesto'     WHERE (COM = '$comodo' and ITE = 'Cesto');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$lixeira'   WHERE (COM = '$comodo' and ITE = 'Lixeira');");
        
   }

   $sql = "SELECT * FROM HENX WHERE COM = 'Lavanderia'";

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
    <title>Enxovalzito - Lavanderia</title>       
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
    <main id="lavanderia">

    <div class="main-container">
        <h1>Lavanderia</h1>
        <form id="register-form" method="POST" action="lavanderia.php">   
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
                        '" class="cbox cboxLavanderia" onclick="alterarProgresso()" '
                        .$cChecked.'>
                        <label for="'.checkBoxGetId($user_data['ITE']).'">'.$user_data['ITE'].'</label>
                    </div>';
                }   
            ?> 
            <div class="full-box">
                <button name="submit" class="buttonLavanderia" type="submit" id="btn-submit" title="Registrar o enxoval do apartamentinho">
                   <div class="submitIcon buttonLavanderia"></div>      
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