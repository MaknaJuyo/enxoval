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
        if($cCam == 'Fogão')               return 'fogao-cbox';
        if($cCam == 'Travessas')           return 'travessas-cbox';
        if($cCam == 'Geladeira')           return 'geladeira-cbox';
        if($cCam == 'Forma redonda')       return 'forma-cbox';
        if($cCam == 'Assadeira')           return 'assadeira-cbox';
        if($cCam == 'Coifa ou depurador')  return 'coifa-cbox';
        if($cCam == 'Filtro de água')      return 'filtro-cbox';
        if($cCam == 'Ralador')             return 'ralador-cbox';
        if($cCam == 'Torradeira')          return 'torradeira-cbox';
        if($cCam == 'Liquidificador')      return 'liquidificador-cbox';
        if($cCam == 'Jogo de facas')       return 'facas-cbox';
        if($cCam == 'Cafeteira')           return 'cafeteira-cbox';
        if($cCam == 'Potes')               return 'potes-cbox';
        if($cCam == 'Porta mantimentos')   return 'portaMantimentos-cbox';
        if($cCam == 'Espremedor de fruta') return 'espremedor-cbox';
        if($cCam == 'Porta temperos')      return 'portaTemperos-cbox';
        if($cCam == 'Medidor')             return 'medidor-cbox';
        if($cCam == 'Air frier')           return 'airFrier-cbox';
        if($cCam == 'Tábua de corte')      return 'tabua-cbox';
        if($cCam == 'Microondas')          return 'microondas-cbox';
        if($cCam == 'Luva térmica')        return 'luva-cbox';
        if($cCam == 'Jarras')              return 'jarras-cbox';
        if($cCam == 'Abridor de lata')     return 'abridor-cbox';
        if($cCam == 'Jogo de panelas')     return 'panelas-cbox';
        if($cCam == 'Conchas e afins')     return 'conchas-cbox';
        if($cCam == 'Lixeira')             return 'lixeira-cbox';
        if($cCam == 'Balança')             return 'balanca-cbox';
        if($cCam == 'Fruteita')            return 'fruteira-cbox';
        if($cCam == 'Frigideiras')         return 'frigideiras-cbox';
        if($cCam == 'Peneira')             return 'peneira-cbox';
        if($cCam == 'Chaleira')            return 'chaleira-cbox';
        if($cCam == 'Escorredor')          return 'escorredor-cbox';
        if($cCam == 'Relógio')             return 'relogio-cbox';
    }

    include_once('config.php');

    if(isseT($_POST['submit'])){
        $comodo = 'Cozinha';

        $fogao            = checkBoxData('fogao-cbox');
        $torradeira       = checkBoxData('torradeira-cbox');
        $liquidificador   = checkBoxData('liquidificador-cbox');
        $cafeteira        = checkBoxData('cafeteira-cbox');
        $potes            = checkBoxData('potes-cbox');
        $espremedor       = checkBoxData('espremedor-cbox');
        $medidor          = checkBoxData('medidor-cbox');
        $microondas       = checkBoxData('microondas-cbox');
        $jarras           = checkBoxData('jarras-cbox');
        $lixeira          = checkBoxData('lixeira-cbox');
        $balanca          = checkBoxData('balanca-cbox');
        $fruteira         = checkBoxData('fruteira-cbox');
        $frigideiras      = checkBoxData('frigideiras-cbox');
        $peneira          = checkBoxData('peneira-cbox');
        $chaleira         = checkBoxData('chaleira-cbox');
        $escorredor       = checkBoxData('escorredor-cbox');
        $relogio          = checkBoxData('relogio-cbox');
        $travessas        = checkBoxData('travessas-cbox');
        $geladeira        = checkBoxData('geladeira-cbox');
        $facas            = checkBoxData('facas-cbox');
        $forma            = checkBoxData('forma-cbox');
        $assadeira        = checkBoxData('assadeira-cbox');
        $coifa            = checkBoxData('coifa-cbox');
        $filtro           = checkBoxData('filtro-cbox');
        $ralador          = checkBoxData('ralador-cbox');
        $portaMantimentos = checkBoxData('portaMantimentos-cbox');
        $portaTemperos    = checkBoxData('portaTemperos-cbox');
        $airFrier         = checkBoxData('airFrier-cbox');
        $tabua            = checkBoxData('tabua-cbox');
        $luva             = checkBoxData('luva-cbox');
        $abridor          = checkBoxData('abridor-cbox');
        $panelas          = checkBoxData('panelas-cbox');
        $conchas          = checkBoxData('conchas-cbox');

        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$fogao'            WHERE (COM = '$comodo' and ITE = 'Fogão');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$travessas'        WHERE (COM = '$comodo' and ITE = 'Travessas');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$geladeira'        WHERE (COM = '$comodo' and ITE = 'Geladeira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$assadeira'        WHERE (COM = '$comodo' and ITE = 'Assadeira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$filtro'           WHERE (COM = '$comodo' and ITE = 'Filtro de água');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$ralador'          WHERE (COM = '$comodo' and ITE = 'Ralador');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$torradeira'       WHERE (COM = '$comodo' and ITE = 'Torradeira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$liquidificador'   WHERE (COM = '$comodo' and ITE = 'Liquidificador');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$cafeteira'        WHERE (COM = '$comodo' and ITE = 'Cafeteira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$potes'            WHERE (COM = '$comodo' and ITE = 'Potes');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$medidor'          WHERE (COM = '$comodo' and ITE = 'Medidor');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$airFrier'         WHERE (COM = '$comodo' and ITE = 'Air frier');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$luva'             WHERE (COM = '$comodo' and ITE = 'Luva térmica');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$jarras'           WHERE (COM = '$comodo' and ITE = 'Jarras');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$lixeira'          WHERE (COM = '$comodo' and ITE = 'Lixeira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$balanca'          WHERE (COM = '$comodo' and ITE = 'Balança');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$fruteira'         WHERE (COM = '$comodo' and ITE = 'Fruteita');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$frigideiras'      WHERE (COM = '$comodo' and ITE = 'Frigideiras');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$peneira'          WHERE (COM = '$comodo' and ITE = 'Peneira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$chaleira'         WHERE (COM = '$comodo' and ITE = 'Chaleira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$escorredor'       WHERE (COM = '$comodo' and ITE = 'Escorredor');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$relogio'          WHERE (COM = '$comodo' and ITE = 'Relógio');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$facas'            WHERE (COM = '$comodo' and ITE = 'Jogo de facas');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$espremedor'       WHERE (COM = '$comodo' and ITE = 'Espremedor de fruta');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$forma'            WHERE (COM = '$comodo' and ITE = 'Forma redonda');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$coifa'            WHERE (COM = '$comodo' and ITE = 'Coifa ou depurador');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$portaMantimentos' WHERE (COM = '$comodo' and ITE = 'Porta mantimentos');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$portaTemperos'    WHERE (COM = '$comodo' and ITE = 'Porta temperos');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$tabua'            WHERE (COM = '$comodo' and ITE = 'Tábua de corte');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$microondas'       WHERE (COM = '$comodo' and ITE = 'Microondas');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$abridor'          WHERE (COM = '$comodo' and ITE = 'Abridor de lata');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$panelas'          WHERE (COM = '$comodo' and ITE = 'Jogo de panelas');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$conchas'          WHERE (COM = '$comodo' and ITE = 'Conchas e afins');");
   }

   $sql = "SELECT * FROM HENX WHERE COM = 'Cozinha'";

   $result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/cozinha.css" /> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Enxovalzito - Cozinha</title>       
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
          <li><a href="#">Cozinha</a></li>
          <li><a href="#">Banheiro</a></li>
          <li><a href="#">Lavanderia</a></li>
          <li><a href="#">Sala de jantar</a></li>
          <li><a href="#">Sala de estar</a></li>
          <li><a href="#">Quarto</a></li>
          <li><a href="#">Escritório</a></li>
        </ul>
      </nav>
    </header>
    <main id="cozinha">

    <div class="main-container">
        <h1>Cozinha</h1>
        <form id="register-form" method="POST" action="cozinha.php">   
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
                        '" class="cbox" onclick="alterarProgresso()" '
                        .$cChecked.'>
                        <label for="'.checkBoxGetId($user_data['ITE']).'">'.$user_data['ITE'].'</label>
                    </div>';
                }   
            ?> 
            <div class="full-box">
                <button name="submit" type="submit" id="btn-submit"  title="Registrar o enxoval do apartamentinho">
                   <div class="submitIcon"></div>      
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