let animado = document.querySelectorAll(".animado");
let animadoDerecha = document.querySelectorAll(".animadoDerecha");
let animadoIzquierda = document.querySelectorAll(".animadoIzquierda");

function mostrarScroll() {
  let scrollTop = document.documentElement.scrollTop;// Altura mientras baja scroll
  for(var i=0; i < animado.length; i++) {
    let alturaAnimado = animado[i].offsetTop;// Altura de arriva de los div
    if(alturaAnimado - 500 < scrollTop) {
      animado[i].style.opacity = 1;
      animado[i].classList.add("mostrarArriba");
    }
  }
}

function mostrarScrollDerecha() {
  let scrollTop = document.documentElement.scrollTop;// Altura mientras baja scroll
  for(var i=0; i < animadoDerecha.length; i++) {
    let alturaAnimado = animadoDerecha[i].offsetTop;// Altura de arriva de los div
    if(alturaAnimado - 500 < scrollTop) {
      animadoDerecha[i].style.opacity = 1;
      animadoDerecha[i].classList.add("mostrarDerecha");
    }
  }
}

function mostrarScrollIzquierda() {
  let scrollTop = document.documentElement.scrollTop;// Altura mientras baja scroll
  for(var i=0; i < animadoIzquierda.length; i++) {
    let alturaAnimado = animadoIzquierda[i].offsetTop;// Altura de arriva de los div
    if(alturaAnimado - 500 < scrollTop) {
      animadoIzquierda[i].style.opacity = 1;
      animadoIzquierda[i].classList.add("mostrarIzquierda");
    }
  }
}

window.addEventListener('scroll', mostrarScroll);
window.addEventListener('scroll', mostrarScrollDerecha);
window.addEventListener('scroll', mostrarScrollIzquierda);
