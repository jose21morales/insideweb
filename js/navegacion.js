let contenedorDiv = document.querySelectorAll(".contenedor-div");

function mostrarScroll() {
  let scrollTop = document.documentElement.scrollTop;// Altura mientras baja scroll
  
  for(var i=0; i < contenedorDiv.length; i++) {
    let alturaContenedor = contenedorDiv[i].offsetTop;// Altura de arriva de los div

    if(alturaContenedor + 125 < scrollTop) {
      contenedorDiv[i].style.opacity = 1;
      contenedorDiv[i].style.background = 'rgb(0,80,130)';
    } else {
      contenedorDiv[i].style.background = 'none';
    }
  }
}

window.addEventListener('scroll', mostrarScroll);