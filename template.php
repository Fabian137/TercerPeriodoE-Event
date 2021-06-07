<?php

function template(){
  echo '<nav class="colorfont">';
  echo  '<div class="nav-wrapper cont">';
  echo    '<div><a href="../../EvERI" class="logo">Inicio</a></div>';
  echo    '<div class="naveg"></div>';
  echo  '<ul id="nav-mobile">';
  echo    '<li><a href="assets/calculadora.php">Calculadora</a></li>';
  echo    '<li><a href="../divisas.php">Divisas</a></li>';
  echo    '<li><a href="assets/game.php">Game</a></li>';
  echo  '</ul>';
  echo  '</div>'; 
  echo  '</nav>';
  echo  '<div class="cont bots">';
  echo    '<a class="btn2 colpse" id="colapsar">Ocultar</a>';
  echo    '<a class="btn2 uno" id="bot1" onclick="saludar()">Morado(?)</a>';
  echo    '<a class="btn2 dos" id="bot2" onclick="despedir()">Rojo</a>';
  echo  '</div>';
}

function templFooter(){
  echo  '<footer class="page-footer colorfont">';
  echo    '<div class="container">';
  echo      '<div class="row">';
  echo        '<div class="col l6 s12">';
  echo          '<h5 class="white-text">Footer Exam</h5>';
  echo          '<p class="grey-text text-lighten-4">Esta es una página para el examen. Ya entiendo porque php no
              es un lenguaje muy querido que digamos
  echo          </p>';
  echo        '</div>';
  echo        '<div class="col l4 offset-l2 s12">';
  echo          '<h5 class="white-text">Links</h5>';
  echo            '<ul>';
  echo              '<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>';
  echo              '<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>';
  echo            '</ul>';
  echo        '</div>';
  echo      '</div>';
  echo    '</div>';
  echo    '<div class="footer-copyright">';
  echo    '<div class="container">© 2021 Copyright Text';
  echo      '<a class="grey-text text-lighten-4 right" href="#!">More Links</a>';
  echo    '</div>';
  echo    '</div>';
  echo  '</footer>';
}