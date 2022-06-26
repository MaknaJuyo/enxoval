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
        if($cCam == 'Mesa de trabalho') return 'mesa';
        if($cCam == 'Cadeira')          return 'cadeira';
        if($cCam == 'Prateleira')       return 'prateleira';
        if($cCam == 'Livros')           return 'livros';
        if($cCam == 'Estante')          return 'estante';
        if($cCam == 'Computador')       return 'computador';
        if($cCam == 'Impressora')       return 'impressora';
        if($cCam == 'Mural')            return 'mural';
        if($cCam == 'Poltrona')         return 'poltrona';
        if($cCam == 'Lixeira')          return 'lixeira';
        if($cCam == 'Tapete')           return 'tapete';
        if($cCam == 'Cortina')          return 'cortina';
    }
    include_once('config.php');

    if(isseT($_POST['submit'])){
        $comodo = 'Escritório';

        $mesa       = checkBoxData('mesa');
        $cadeira    = checkBoxData('cadeira');
        $prateleira = checkBoxData('prateleira');
        $livros     = checkBoxData('livros');
        $estante    = checkBoxData('estante');
        $computador = checkBoxData('computador');
        $impressora = checkBoxData('impressora');
        $mural      = checkBoxData('mural');
        $poltrona   = checkBoxData('poltrona');
        $lixeira    = checkBoxData('lixeira');
        $tapete     = checkBoxData('tapete');
        $cortina    = checkBoxData('cortina');

        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$mesa'       WHERE (COM = '$comodo' and ITE = 'Mesa de trabalho');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$cadeira'    WHERE (COM = '$comodo' and ITE = 'Cadeira');");                   
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$prateleira' WHERE (COM = '$comodo' and ITE = 'Prateleira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$livros'     WHERE (COM = '$comodo' and ITE = 'Livros');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$estante'    WHERE (COM = '$comodo' and ITE = 'Estante');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$computador' WHERE (COM = '$comodo' and ITE = 'Computador');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$impressora' WHERE (COM = '$comodo' and ITE = 'Impressora');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$mural'      WHERE (COM = '$comodo' and ITE = 'Mural');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$poltrona'   WHERE (COM = '$comodo' and ITE = 'Poltrona');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$lixeira'    WHERE (COM = '$comodo' and ITE = 'Lixeira');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$tapete'     WHERE (COM = '$comodo' and ITE = 'Tapete');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$cortina'    WHERE (COM = '$comodo' and ITE = 'Cortina');");
   }

   $sql = "SELECT * FROM HENX WHERE COM = 'Escritório'";

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
    <title>Enxovalzito - Escritório</title>       
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
    <main id="escritorio">

    <div class="main-container">
        <h1>Escritório</h1>
        <form id="register-form" method="POST" action="escritorio.php">   
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
                        '" class="cbox cboxEscritorio" onclick="alterarProgresso()" '
                        .$cChecked.'>
                        <label for="'.checkBoxGetId($user_data['ITE']).'">'.$user_data['ITE'].'</label>
                    </div>';
                }   
            ?> 
            <div class="full-box">
                <button name="submit" class="buttonEscritorio" type="submit" id="btn-submit" title="Registrar o enxoval do apartamentinho">
                   <div class="submitIcon buttonEscritorio"></div>      
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