<?php
require_once 'template.php';
    if($_POST){
        $dinero=$_POST['dinero'];
        $dat=$_POST['dat'];

        if($dat==1){
            $dol=$dinero/24.5;  
            $eur=$dinero/30; 
            echo "<h2>Dolares ".round($dol,2)."</h2>";
            echo "<h2>Euros ".round($eur,2)."</h2>";
        }
        if($dat==2){
            $dol=$dinero*30/24.5;
            echo "<h2>Dolares ".round($dol,2)."</h2>";
            
        }
        if($dat==3){
            $eur=$dinero*24.5/30;
                echo "<h2>Euros ".round($eur,2)."</h2>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de monedas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    template();
    ?>
    <section class="container">
    <h1>Coversos de Divisas</h1>
    <form action="divisas.php" method="POST">
    <table>
        <tr>
            <td">Cantidad:</td>
            <td><input style="color: white;" type="number" name="dinero"></td>
        </tr>
        <tr>
            <td>Moneda:</td>
            <select class="form-select" id="option-id">
                    <option selected>Moneda: </option>
                    <option value="1">Bitcoin</option>
                    <option value="2">Dólares</option>
                    <option value="3">Euros</option>
            </select>
            <!-- <td>
                <select style="color: white;" name="dat">
                    <option value="1">Pesos</option>
                    <option value="2">Dolares</option>
                    <option value="3">Euros</option>
                </select>
            </td> -->
        </tr>
    </table>
    <input type="submit" value="Covertir">
    </form>
    </section>

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