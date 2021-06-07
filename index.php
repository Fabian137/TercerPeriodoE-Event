<?php
require_once 'vendor/autoload.php';
require_once 'template.php';
// use template;
use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\register;
// use Illuminate\Database\Eloquent\Model;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => '127.0.0.1:3308',
    'database'  => 'eventexam',
    'username'  => 'root',
    'password'  => 'root',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
    
if(!empty($_POST)){
    $registro = new register();
    $registro->nombre = $_POST['nombre'];
    $registro->apellido = $_POST['apellido'];
    $registro->correo = $_POST['correo'];
    $registro-> password = $_POST['password'];;
    $registro->save();
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
    <title>Document</title>
</head>
<body>
    <nav class="colorfont">
      <div class="nav-wrapper cont">
      <div><a href="../../EvERI" class="logo">Inicio</a></div>
      <div class="naveg"></div>
      </div> 
      </nav>
      <div class="cont bots">
      <a class="btn2 colpse" id="colapsar">Ocultar</a>
      <a class="btn2 uno" id="bot1" onclick="saludar()">Morado(?)</a>
      <a class="btn2 dos" id="bot2" onclick="despedir()">Rojo</a>
      </div>
      <section class="formulario">
        <div class="row">
          <div class="col m2 l2"></div>
          <form id="forms" class="col s12 m8 l8" action="index.php" method="post">
            <div class="row">
              <div class="input-field col s6 ">
                <input name='nombre' placeholder="Nombre" id="first_name" type="text" class="validate">
              </div>
              <div class="input-field col s6">
                <input placeholder="Apellidos" name='apellido' id="last_name" type="text" class="validate">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Correo" id="email" name='correo' type="email" class="validate">
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input name='password' placeholder="Contraseña" id="password" type="password" class="validate">
              </div>
            </div>
            <label>
              <input type="checkbox" id="check" />
              <span>Terminos y condiciones</span>
            </label><br>
            <label>
              <input type="checkbox" id="check2" />
              <span>No soy un robot</span>
            </label><br><br>
            <input class="btn" id="send" type="submit" value="submit"><br>
          </form>
        </div>

      </section>
      <section class="cont chansect">
        <div class="row">
          <div class="col m2 l2"></div>
          <div class="seccion3 col s12 m8 l8">
          </div>
          <div class="col m2 l2"></div>
        </div>
      </section>

      <?php 
      templFooter();
      ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script type="text/javascript" src="assets/javaScript/event.js"></script>
      <!-- <script src="script.js"></script> -->
</body>
</html>
