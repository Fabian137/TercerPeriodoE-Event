<?php
    require_once '../template.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <style>
        body{font-family: 'system-ui';}
    </style>
    <?php
    template();
    ?>
          <a class="waves-effect waves-light btn2 dos" id="button" onclick="refreshPage()">RESTART</a>
    <div class="cont wns">
        <div><img class="img-s" src="../img/cerebro.png"> <h3 class="wnsc">Usuario</h3></div>
        <div><img class="img-s" src="../img/superhero.png"><h3 class="wnsc2">Máquina</h3></div>
    </div>
    <div class="template" id="templ">
        <div class="format">
          
            <h3 class="result">
            </h3>
            <div class="inpts">
                <div class="options">
                    <a onclick="piedra()"><img class="img-s" src="../img/motivacion.png" alt=""></a>
                    <a onclick="papel()"><img class="img-s" src="../img/mano-robotica.png" alt=""></a>
                    <a onclick="tijeras()"><img class="img-s" src="../img/tijeras.svg" alt=""></a>
                </div>
                
            </div>
        </div>
    </div>

    <?php
    templFooter();
    ?>

    <script src="javaScript/game.js"></script>
    <script>
        let body=document.querySelector('body');
        function saludar(){
            body.style.background='#4b3f98';
        }
        function despedir(){
            body.style.background='#aa002a'; 
        }
        const magic = document.querySelector('.colpse');
        magic.addEventListener('click', hide);
        const bot1 = document.querySelector('.uno');
        const bot2 = document.querySelector('.dos');
        //magic.addEventListener('click', hide);

        function hide(){
            if(bot1.style.display != 'none'){
                magic.textContent = 'Mostrar';
                bot1.style.display = 'none';
                bot2.style.display = 'none';         
            }
            else{
                magic.textContent = 'Ocultar';
                bot1.style.display = 'block';
                bot2.style.display = 'block';
            }
        }
    </script>
</body>
</html>