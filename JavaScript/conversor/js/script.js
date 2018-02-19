window.addEventListener("load",cargarEventos);

// 1 € = 166'386 pesetas
function calcula(valor1,valor2,conversto) {
  if (conversto == "pesetas"){
    if (valor1%1 ==0) {
    result =  valor1/166.386;
    console.log('calcula  resultado ->' + result);
    document.getElementById("euro").innerHTML= result;
    } else { alert("el valor introducido no puede tener decimales");}
  }
  if (conversto == "euro") {
     result = valor2*166.386;
     console.log('calcula  resultado ->' + result);
     result = result.toFixed(2);
     document.getElementById("pesetas").innerHTML= result;
  }
}

function cargarEventos() {
  var result = 0;
  var conversto = '';
  var pesetas , euros = 0;
  pesetas = document.getElementById("pesetas").value;
  euros = document.getElementById("euro").value;
  console.log(pesetas +  "-> pesetas");
  console.log(euros +  "-> euro");
  console.log(conversto);
  console.log(result);
   if (pesetas != null && euros != null ){
      document.getElementById("buttonPesetas").addEventListener("click",calcula(pesetas,euros,"euro"));
      document.getElementById("buttonEuros").addEventListener("click",calcula(pesetas,euros,"pesetas"));
  } else {
    alert("Cuidado los campos deben estar rellenados")
  }
}
