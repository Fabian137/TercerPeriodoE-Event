<?php
require_once 'template.php';
function convertir(){
    if(!empty($_POST)){
    $cant = $_POST['cant'];
    $dolar = $cant/19;
    $euro = $cant/24;
    $bit = $cant*0.0000014;
    echo "<td>La cantidad ingresada en pesos fue: ". $cant ."</td><br>";
    echo "<td>Dolares: $".round($dolar,2)."</td><br>";
    echo "<td>Euros: $".round($euro,2)."</td><br>";
    echo "<td>Bitcoin: $".round($bit,2)."</td>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Convertidor de monedas</title>
</head>
<body>
<?php
template();
?>
    <section class='container'>
        <h1>Conversor de divisas</h1>
        <form action="divisas.php" method="post">
        <div style="display:flex; justify content: space-evenly; align-items:center;">
                    <p>Cantidad en Pesos:</p>
                    <input style="margin-left:5rem; color:#FFF;" type="number" name="cant">
        </div><br>


                    <?php
                    convertir();
                    ?>
            <br><br><input type="submit" class="btn" value="Covertir">
        </form>
    </section><br>
    <?php
templFooter();
    ?>
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