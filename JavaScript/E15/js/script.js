// Preparamos el javascript para que este a la espera de instrucciones
window.addEventListener('load',cargarEventos);
function muestraInformacion(coorX, coorY, tecla, codigo) {
    document.getElementById("navTop").innerHTML=coorX;
    document.getElementById("navLeft").innerHTML=coorY;
    document.getElementById("pagTop").innerHTML=coorX;
    document.getElementById("pagLeft").innerHTML=coorY;
    document.getElementById("caracter").innerHTML=tecla;
    document.getElementById("codigo").innerHTML=codigo;
}
function moverRaton(posicion) {
    var X = posicion.clientX;
    var Y = posicion.clientY;
    console.log('posicionX : '+ X);
    console.log('posicionY : '+ Y);
    
    muestraInformacion(X,Y,null,null);
}
function pulsarTeclado (event){
    var code = event.key;
    var char = event.keyCode;
    console.log(code);
    console.log(char);
   
   muestraInformacion(null,null,code,char);
   document.getElementById('infoTeclado').style.backgroundColor='#CCE6FF';
}
function cargarEventos() {
    var body =document.getElementsByTagName("body");
    body[0].addEventListener("mousemove",moverRaton);
    body[0].addEventListener("keydown",pulsarTeclado);
    body[0].addEventListener("mousedown", function() {
        document.getElementById('infoRaton').style.backgroundColor='#FFFFCC';
    })
}