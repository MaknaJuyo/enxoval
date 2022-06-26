<?php
    function checkBoxData($cCam){
        if(isseT($_POST[$cCam])){
            return true;
        } else {
            return false;
        }
    }

    function checkBoxGetId($cCam){
        if($cCam == 'Televisão')     return 'televisao';
        if($cCam == 'Mesa de canto') return 'mesaCanto';
        if($cCam == 'Sofá')          return 'sofa';
        if($cCam == 'Painel')        return 'painel';
        if($cCam == 'Tapete')        return 'tapete';
        if($cCam == 'Cortina')       return 'cortina';
    }

    include_once('config.php');

    if(isseT($_POST['submit'])){
        $comodo = 'Sala de estar';

        $televisao = checkBoxData('televisao');
        $mesaCanto = checkBoxData('mesaCanto');
        $sofa      = checkBoxData('sofa');
        $painel    = checkBoxData('painel');
        $tapete    = checkBoxData('tapete');
        $cortina   = checkBoxData('cortina');

        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$televisao' WHERE (COM = '$comodo' and ITE = 'Televisão');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$mesaCanto' WHERE (COM = '$comodo' and ITE = 'Mesa de canto');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$sofa'      WHERE (COM = '$comodo' and ITE = 'Sofá');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$painel'    WHERE (COM = '$comodo' and ITE = 'Painel');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$tapete'    WHERE (COM = '$comodo' and ITE = 'Tapete');");
        $result = mysqli_query($conexao,"UPDATE HENX SET TEM = '$cortina'   WHERE (COM = '$comodo' and ITE = 'Cortina');");
        
   }

   $sql = "SELECT * FROM HENX WHERE COM = 'Sala de estar'";

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
    <title>Enxovalzito - Sala de estar</title>       
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
    <main id="salaEstar">

    <div class="main-container">
        <h1>Sala de estar</h1>
        <form id="register-form" method="POST" action="salaEstar.php">   
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
                        '" class="cbox cboxSalaEstar" onclick="alterarProgresso()" '
                        .$cChecked.'>
                        <label for="'.checkBoxGetId($user_data['ITE']).'">'.$user_data['ITE'].'</label>
                    </div>';
                }   
            ?> 
            <div class="full-box">
                <button name="submit" class="buttonSalaEstar" type="submit" id="btn-submit" title="Registrar o enxoval do apartamentinho">
                   <div class="submitIcon buttonSalaEstar"></div>      
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