  var contrack = ["piedra", "papel", "tijeras"];
  var winsUser = 0;
  var winsMach = 0;
  var resuShow=document.querySelector('.result');
  var count=document.querySelector('.wnsc');
  var count2=document.querySelector('.wnsc2');
function piedra(){
  var vcont = Math.floor((Math.random() * 3));
  if(contrack[vcont] == contrack[0]){
    let html =`<img class="img-s" src="../img/motivacion.png"><img class="img-s" src="../img/vs.png"><img class="img-s" src="../img/motivacion.png"></img><p>Empate</p>`;
    resuShow.innerHTML = html;
  }
  else if(contrack[vcont] == contrack[1]){
    winsMach++;
    let html3=`${winsMach}`;
    let html2=`${winsUser}`;
    let html =`<img class="img-s" src="../img/motivacion.png"><img class="img-s" src="../img/vs.png"><img class="img-s" src="../img/mano-robotica.png"></img><p>Gana máquina</p>`;
    resuShow.innerHTML = html;
    count.innerHTML =html2;
    count2.innerHTML =html3;
  }
  else if(contrack[vcont] == contrack[2]){
    winsUser++;
    let html2=`${winsUser}`;
    let html3=`${winsMach}`;
    let html =`
    <img class="img-s" src="../img/motivacion.png"><img class="img-s" src="../img/vs.png"><img class="img-s" src="../img/tijeras.svg"></img><p>Gana Usuario</p>`;
    resuShow.innerHTML = html;
    count.innerHTML =html2;
    count2.innerHTML =html3;
  }

}
function papel(){
  var vcont = Math.floor((Math.random() * 3));
  if(contrack[vcont] == contrack[1]){
    let html =`<img class="img-s" src="../img/mano-robotica.png"><img class="img-s" src="../img/vs.png"><img class="img-s" src="../img/mano-robotica.png"></img>
    <p>Empate</p>`;
    resuShow.innerHTML = html;
  }
  else if(contrack[vcont] == contrack[0]){
    winsUser++;
    let html2=`${winsUser}`;
    let html3=`${winsMach}`;
    let html =`
    <img class="img-s" src="../img/mano-robotica.png"></img><img class="img-s" src="../img/vs.png"><img class="img-s" src="../img/motivacion.png"><p>Gana Usuario</p>`;
    resuShow.innerHTML = html;
    count.innerHTML =html2;
    count2.innerHTML =html3;
  }
  else if(contrack[vcont] == contrack[2]){
    winsMach++;
    let html3=`${winsMach}`;
    let html2=`${winsUser}`;
    let html =`<img class="img-s" src="../img/mano-robotica.png"><img class="img-s" src="../img/vs.png"><img class="img-s" src="../img/tijeras.svg""></img><p>Gana Máquina</p>`;
    resuShow.innerHTML = html;
    count.innerHTML =html2;
    count2.innerHTML =html3;
  }
}
function tijeras(){
  var vcont = Math.floor((Math.random() * 3));
  if(contrack[vcont] == contrack[2]){
    let html =`<img class="img-s" src="../img/tijeras.svg"><img class="img-s" src="../img/vs.png"><img class="img-s" src="../img/tijeras.svg"></img><p>
    <p>Empate</p>`;
    resuShow.innerHTML = html;
  }
  else if(contrack[vcont] == contrack[0]){
    winsUser++;
    let html2=`${winsUser}`;
    let html3=`${winsMach}`;
    let html =`<img class="img-s" src="../img/tijeras.svg"></img><img class="img-s" src="../img/vs.png"><img class="img-s" src="../img/mano-robotica.png"><p>Gana Usuario</p>`;
    resuShow.innerHTML = html;
    count.innerHTML =html2;
    count2.innerHTML =html3;
  }
  else if(contrack[vcont] == contrack[1]){
    winsMach++;
    let html3=`${winsMach}`;
    let html2=`${winsUser}`;
    let html =`<img class="img-s" src="../img/tijeras.svg"><img class="img-s" src="../img/vs.png"><img class="img-s" src="../img/motivacion.png"></img><p>Gana Máquina</p>`;
    resuShow.innerHTML = html;
    count.innerHTML =html2;
    count2.innerHTML =html3;
  }
}
function refreshPage(){
  window.location.reload();
}