<?php
    require_once '../template.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Calculadora</title>
</head>
<style>
    body{font-family: 'system-ui';}
</style>
<body>
    <?php
    template();
    ?>
    
    <section style="margin-bottom:2rem;">
        
        <div class="template" id="templ">
            
            <div class="format">
                <h3 class="result">
                </h3>
                <div class="inpts">
                    <input class="inputa" placeholder="Número 1" type="text" id="n1">
                    <input class="inputa" placeholder="Operation" type="text" id="in-c" class="in-c">
                    <input class="inputa" placeholder="Número 2" type="text" id="n2">
                </div>
                <div class="btn-p">
                    <a class="btn2" id="" onclick="operacion()">=</a>
                    <!-- <a class="btn2">AC</a> -->
                </div>
            </div>
        </div>

    </section>
    <?php
    templFooter();
    ?>

    <script src="javaScript/calculate.js"></script>
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