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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enxoval - Banheiro</title>
    <link rel="stylesheet" href="style/banheiro.css">
</head>
<body>
    <div id="main-container">
        <h1>Banheiro</h1>
        <form action="banheiro.php" method="POST" id="confirm-form">
            <div class="half-box">
                <input type="checkbox" name="chuveiro" id="chuveiro" class="agreement">
                <label for="chuveiro" class="agreement-label">Chuveiro</label>
            </div>

            <div class="half-box">
                <input type="checkbox" name="pantufas" id="pantufas" class="agreement">
                <label for="pantufas" class="agreement-label">Pantufas</label>
            </div>       
            
            <div class="half-box">
                <input type="checkbox" name="roupao" id="roupao" class="agreement">
                <label for="roupao" class="agreement-label">Roupão</label>
            </div>

            <div class="half-box">
                <input type="checkbox" name="toalhasBanho" id="toalhasBanho" class="agreement">
                <label for="toalhasBanho" class="agreement-label">Toalhas de banho</label>
            </div>   
            
            <div class="half-box">
                <input type="checkbox" name="lixeira" id="lixeira" class="agreement">
                <label for="lixeira" class="agreement-label">Lixeira</label>
            </div>

            <div class="half-box">
                <input type="checkbox" name="toalhasRosto" id="toalhasRosto" class="agreement">
                <label for="toalhasRosto" class="agreement-label">Toalhas de rosto</label>
            </div>   
            
            <div class="half-box">
                <input type="checkbox" name="saboneteira" id="saboneteira" class="agreement">
                <label for="saboneteira" class="agreement-label">Saboneteira</label>
            </div>

            <div class="half-box">
                <input type="checkbox" name="portaShampoo" id="portaShampoo" class="agreement">
                <label for="portaShampoo" class="agreement-label">Porta shampoo</label>
            </div>   
            
            <div class="half-box">
                <input type="checkbox" name="portaEscova" id="portaEscova" class="agreement">
                <label for="portaEscova" class="agreement-label">Porta escova</label>
            </div>

            <div class="half-box">
                <input type="checkbox" name="bandeja" id="bandeja" class="agreement">
                <label for="bandeja" class="agreement-label">Bandeja</label>
            </div>  

            <div class="full-box">
                <input name="submit" id="btn-submit" type="submit" value="Concluir" onclick="alerta()">
            </div>
        </form>
    </div>

    <?php
        while($user_data = mysqli_fetch_assoc($result)){
            echo "<script> document.getElementById('".checkBoxGetId($user_data['ITE'])."').checked = ".$user_data['TEM']." </script>";
        }   
    ?> 

    <script>
        function alerta(){
            nMsg = Math.floor(Math.random() * 5);

            if(nMsg == 1){
                alert('Mais um item pro apartamentinho!')
            } else if (nMsg == 2) {
                alert('Hihi enxovalzão em!')
            } else if (nMsg == 3) {
                alert('Falta menos um item pra ter uma casinha maravilhosa!')
            } else {
                alert('Mais um? Hihi!')
            }

        }
    </script>
    

    <script src="scripts.js"></script>
</body>
</html>