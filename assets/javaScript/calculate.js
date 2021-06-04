function operacion(){
    let n1=parseInt(document.getElementById('n1').value);
    let n2=parseInt(document.getElementById('n2').value);
    let resultado = document.querySelector('.result');
    let input = document.getElementById('in-c').value;
    let op=[n1+n2, n1-n2, n1*n2, n1/n2, n1**n2]
        if(input =='+'){
            let html=`${n1} + ${n2} = ${op[0]}`;
            resultado.innerHTML = html;
        }
        else if(input == '-'){
            let html=`${n1} - ${n2} = ${op[1]}`;
            resultado.innerHTML = html;
        }
        else if(input == 'x' || input =='*'){
            let html=`${n1} * ${n2} = ${op[2]}`;
            resultado.innerHTML = html;
        }
        else if(input == '/'){
            let html=`${n1} / ${n2} = ${op[3]}`;
            resultado.innerHTML = html;
        }
        else if(input == '^'){
            let html=`${n1} ^ ${n2} = ${op[4]}`;
            resultado.innerHTML = html;
        }
        else{
            let html=`Operación no reconocida`
            resultado.innerHTML = html;
        }
}
