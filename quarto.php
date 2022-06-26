<?php
    function checkBoxData($cCam){
        if(isseT($_POST[$cCam])){
            return true;
        } else {
            return false;
        }
    }

    //Caregar os dados de acordo com o Caption
    function checkBoxGetId($cCam){
        if($cCam == 'Cama')           return 'cama';
        if($cCam == 'Colchão')        return 'colchao';
        if($cCam == 'Guarda roupa')   return 'guardaRoupa';
        if($cCam == 'Mesas de apoio') return 'mesaApoio';
        if($cCam == 'Sapateira')      return 'sapateira';
        if($cCam == 'Cortina')        return 'cortina';
        if($cCam == 'Prateleira')     return 'prateleira';
        if($cCam == 'Abajur')         return 'abajur';
        if($cCam == 'Cabide')         return 'cabide';
        if($cCam == 'Cobertor')       return 'cobertor';
        if($cCam == 'Lençol')         return 'lencol';
        if($cCam == 'Travesseiro')    return 'travesseiro';
        if($cCam == 'Penteadeira')    return 'penteadeira';
        if($cCam == 'Tapete')         return 'tapete';
    }

    include_once('config.php');

    if(isseT($_POST['submit'])){
        $comodo = 'Quarto';

        $cama        = checkBoxData('cama');
        $colchao     = checkBoxData('colchao');
        $guardaRoupa = checkBoxData('guardaRoupa');
        $mesaApoio   = checkBoxData('mesaApoio');
        $sapateira   = checkBoxData('sapateira');
        $cortina     = checkBoxData('cortina');
        $prateleira  = checkBoxData('prateleira');
        $abajur      = checkBoxData('abajur');
        $cabide      = checkBoxData('cabide');
        $cobertor    = checkBoxData('cobertor');
        $lencol      = checkBoxData('lencol');
        $travesseiro = checkBoxData('travesseiro');
        $penteadeira = checkBoxData('penteadeira');
        $tapete      = checkBoxData('tapete');

        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$cama'        WHERE (COM = '$comodo' and ITE = 'Cama');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$colchao'     WHERE (COM = '$comodo' and ITE = 'Colchão');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$guardaRoupa' WHERE (COM = '$comodo' and ITE = 'Guarda roupa');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$mesaApoio'   WHERE (COM = '$comodo' and ITE = 'Mesas de apoio');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$sapateira'   WHERE (COM = '$comodo' and ITE = 'Sapateira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$cortina'     WHERE (COM = '$comodo' and ITE = 'Cortina');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$prateleira'  WHERE (COM = '$comodo' and ITE = 'Prateleira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$abajur'      WHERE (COM = '$comodo' and ITE = 'Abajur');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$cabide'      WHERE (COM = '$comodo' and ITE = 'Cabide');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$cobertor'    WHERE (COM = '$comodo' and ITE = 'Cobertor');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$lencol'      WHERE (COM = '$comodo' and ITE = 'Lençol');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$travesseiro' WHERE (COM = '$comodo' and ITE = 'Travesseiro');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$penteadeira' WHERE (COM = '$comodo' and ITE = 'Penteadeira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$tapete'      WHERE (COM = '$comodo' and ITE = 'Tapete');");
   }

   $sql = "SELECT * FROM HENX WHERE COM = 'Quarto'";

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
    <title>Enxovalzito - Quarto</title>       
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
    <main id="quarto">

    <div class="main-container">
        <h1>Quarto</h1>
        <form id="register-form" method="POST" action="quarto.php">   
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
                        '" class="cbox cboxQuarto" onclick="alterarProgresso()" '
                        .$cChecked.'>
                        <label for="'.checkBoxGetId($user_data['ITE']).'">'.$user_data['ITE'].'</label>
                    </div>';
                }   
            ?> 
            <div class="full-box">
                <button name="submit" class="buttonQuarto" type="submit" id="btn-submit" title="Registrar o enxoval do apartamentinho">
                   <div class="submitIcon buttonQuarto"></div>      
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