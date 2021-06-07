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
/*setTimeout(function(p1,p2,p3){
    console.log(p1);
    console.log(p2);
    console.log(p3);
},5000,'Hola', 'Soy(p2)', 'atributos');
Contador, como un delay*/

const input = document.getElementById('first_name');
input.addEventListener('keydown', function(e){
    if(e.key =='@'){
        alert('No se aceptan caracteres especicales');
    }
});

const casilla1 = document.getElementById('check');
const casilla2 = document.getElementById('check');
casilla1.addEventListener('change', function(e){
})
// querySelector es para clases, por eso usamos puntos
const sect3=document.querySelector('.seccion3');//Guardamos el div con sección3
const opciones=document.querySelector('.naveg');
const forms=document.getElementById ('forms'); //Guardamos el formulario
//Aqui se aceptan los términos y condiciones
forms.addEventListener('submit', function(){
    // e.preventDefault();
    let name = document.getElementById('first_name').value;
    let apellidos = document.getElementById('last_name').value;
    let correo=document.getElementById('email').value;
    
    let checkb = document.getElementById('check');
    let checkb2 = document.getElementById('check2');
    if(checkb.checked == true && checkb2.checked == true && name!="" && apellidos!=""){
        agregarText(name, apellidos, correo);
        //Barra de navegación
        let html=`
        <ul id="nav-mobile">
        <li><a href="assets/calculadora.php">Calculadora</a></li>
        <li><a href="assets/divisas.php">Divisas</a></li>
        <li><a href="assets/game.php">Game</a></li>
      </ul>`
      opciones.innerHTML = html;
    }
    else if(name=="" || apellidos== "" ){
        M.toast({html: 'Agrega tus datos'});
        console.log('yey')
    }
    else if(checkb.checked == false && checkb2.checked == false){
        M.toast({html: 'Acepta los terminos y condiciones'});
    }
});
function agregarText(name, apellidos,correo){
    let html =`
    <div class="card">
    <div class="card-image imsize">
      <img src="img/imagerec.jpeg">
        <span class="card-title">
        <div class="card-content">
        <p style="font-weight:450;">Hola ${name} ${apellidos} <br> Ingresaste con el correo: ${correo}</p>
        </div>
      </span>
    </div>
  </div>`;
    sect3.innerHTML += html;
}