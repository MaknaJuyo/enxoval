<?php
    function checkBoxData($cCam){
        if(isseT($_POST[$cCam])){
            return true;
        } else {
            return false;
        }
    }

    function checkBoxGetId($cCam){
        if($cCam == 'Pano de prato')      return 'panoPrato';
        if($cCam == 'Porta guardanapo')   return 'portaGuardanapo';
        if($cCam == 'Açucareiro')         return 'acucareiro';
        if($cCam == 'Jogo americano')     return 'jogoAmericano';
        if($cCam == 'Prato')              return 'prato';
        if($cCam == 'Descanso de panela') return 'descansoPanela';
        if($cCam == 'Mesa')               return 'mesa';
        if($cCam == 'Cadeira')            return 'cadeira';
        if($cCam == 'Xícara')             return 'xicara';
        if($cCam == 'Copo')               return 'copo';
        if($cCam == 'Caneca')             return 'caneca';
        if($cCam == 'Toalha de Mesa')     return 'toalhaMesa';
        if($cCam == 'Bandeja')            return 'bandeja';
        if($cCam == 'Talheres')           return 'talheres';
    }

    include_once('config.php');

    if(isseT($_POST['submit'])){
        $comodo = 'Sala de jantar';

        $panoPrato       = checkBoxData('panoPrato');
        $portaGuardanapo = checkBoxData('portaGuardanapo');
        $acucareiro      = checkBoxData('acucareiro');
        $jogoAmericano   = checkBoxData('jogoAmericano');
        $prato           = checkBoxData('prato');
        $descansoPanela  = checkBoxData('descansoPanela');
        $mesa            = checkBoxData('mesa');
        $cadeira         = checkBoxData('cadeira');
        $xicara          = checkBoxData('xicara');
        $copo            = checkBoxData('copo');
        $caneca          = checkBoxData('caneca');
        $toalhaMesa      = checkBoxData('toalhaMesa');
        $bandeja         = checkBoxData('bandeja');
        $talheres        = checkBoxData('talheres');

        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$panoPrato'       WHERE (COM = '$comodo' and ITE = 'Pano de prato');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$portaGuardanapo' WHERE (COM = '$comodo' and ITE = 'Porta guardanapo');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$acucareiro'      WHERE (COM = '$comodo' and ITE = 'Açucareiro');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$jogoAmericano'   WHERE (COM = '$comodo' and ITE = 'Jogo americano');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$prato'           WHERE (COM = '$comodo' and ITE = 'Prato');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$descansoPanela'  WHERE (COM = '$comodo' and ITE = 'Descanso de panela');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$mesa'            WHERE (COM = '$comodo' and ITE = 'Mesa');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$cadeira'         WHERE (COM = '$comodo' and ITE = 'Cadeira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$xicara'          WHERE (COM = '$comodo' and ITE = 'Xícara');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$copo'            WHERE (COM = '$comodo' and ITE = 'Copo');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$caneca'          WHERE (COM = '$comodo' and ITE = 'Caneca');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$toalhaMesa'      WHERE (COM = '$comodo' and ITE = 'Toalha de Mesa');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$bandeja'         WHERE (COM = '$comodo' and ITE = 'Bandeja');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$talheres'        WHERE (COM = '$comodo' and ITE = 'Talheres');");
        
   }

   $sql = "SELECT * FROM HENX WHERE COM = 'Sala de jantar'";

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
    <title>Enxovalzito - Sala de jantar</title>       
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
    <main id="salaJantar">

    <div class="main-container">
        <h1>Sala de jantar</h1>
        <form id="register-form" method="POST" action="salaJantar.php">   
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
                        '" class="cbox cboxSalaJantar" onclick="alterarProgresso()" '
                        .$cChecked.'>
                        <label for="'.checkBoxGetId($user_data['ITE']).'">'.$user_data['ITE'].'</label>
                    </div>';
                }   
            ?> 
            <div class="full-box">
                <button name="submit" class="buttonSalaJantar" type="submit" id="btn-submit" title="Registrar o enxoval do apartamentinho">
                   <div class="submitIcon buttonSalaJantar"></div>      
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