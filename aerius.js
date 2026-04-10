// Espera a que el DOM esté completamente cargado antes de ejecutar el código
document.addEventListener("DOMContentLoaded", function () {
  // Obtiene el input donde se muestra la cantidad de pasajeros
  const input = document.getElementById("input-menu");

  // Obtiene el menú desplegable de pasajeros
  const menu = document.getElementById("menu-pasajeros");

  // Obtiene el botón "Aplicar" dentro del menú
  const aplicar = document.getElementById("bap");

  // Cuando el input recibe foco, muestra el menú de pasajeros
  input.addEventListener("focus", mostrarMenu);

  // Cuando el input es clickeado, muestra el menú de pasajeros
  input.addEventListener("click", mostrarMenu);

  // Cuando se hace click en "Aplicar", cierra el menú y actualiza el input con los valores seleccionados
  aplicar.addEventListener("click", function (e) {
    e.preventDefault();
    ocultarMenuYActualizar();
  });

  // Si se hace click fuera del menú y del input, cierra el menú
  document.addEventListener("mousedown", function (e) {
    if (!menu.contains(e.target) && e.target !== input) {
      menu.style.display = "none";
    }
  });

  // Función para mostrar el menú de pasajeros
  function mostrarMenu() {
    menu.style.display = "block";
  }

  // Función para ocultar el menú y actualizar el input con la cantidad de pasajeros
  function ocultarMenuYActualizar() {
    menu.style.display = "none";

    // Obtiene el número de adultos del contador correspondiente
    const adultos = parseInt(
      document.getElementById("contador1").textContent,
      10
    );

    // Obtiene el número de niños del contador correspondiente
    const ninos = parseInt(
      document.getElementById("contador2").textContent,
      10
    );

    // Construye el texto a mostrar en el input, por ejemplo: "2 adultos y 1 niño"
    let texto = adultos + " adulto" + (adultos > 1 ? "s" : "");

    if (ninos > 0) texto += " y " + ninos + " niño" + (ninos > 1 ? "s" : "");

    // Actualiza el valor del input con el texto generado
    input.value = texto;
  }
});

function restarcontador1() {
  let contador = document.getElementById("contador1").textContent;
  let contadorint = parseInt(contador);

  if (contadorint > 1) {
    contadorint -= 1;
    document.getElementById("contador1").textContent = contadorint;
  }
}

function sumarcontador1() {
  let contador = document.getElementById("contador1").textContent;
  let contadorint = parseInt(contador);
  contadorint += 1;
  document.getElementById("contador1").textContent = contadorint;
}

function restarcontador2() {
  let contador = document.getElementById("contador2").textContent;
  let contadorint = parseInt(contador);

  if (contadorint > 0) {
    contadorint -= 1;
    document.getElementById("contador2").textContent = contadorint;
  }
}

function sumarcontador2() {
  let contador = document.getElementById("contador2").textContent;
  let contadorint = parseInt(contador);
  contadorint += 1;
  document.getElementById("contador2").textContent = contadorint;
}

function intercambiarlugares() {
  let origen = document.getElementById("origen").value;
  let destino = document.getElementById("destino").value;
  document.getElementById("origen").value = destino;
  document.getElementById("destino").value = origen;
}

//AVANZAR Y RETROCEDER FOTOS

// function avanzarimagenes() {
//   let atras = document.getElementById("atras");
//   let adelante = document.getElementById("adelante");
//   let actual = 0;
//   let img = document.getElementById("imagen");

//   atras.addEventListener("click", function () {
//     actual = 1;

//     if (actual == 1) {
//       actual = imagenes.lenght - 1;
//     }

//     img.innerHTML;
//   });
// }

function avanzarimagenes() {
  const retro = document.querySelector(".btn-retro");
  const av = document.querySelector("");
  carrusel = document.querySelector("imagen");
  selection = document.querySelectorAll("slidersection");
  let currentIndex = 0;

  retro.addEventListener("click", () => {
    currentIndex--;
    if (currentIndex < 0) {
      currentIndex = 2; // Cambiar 2 por el número de tus diapositivas menos 1
    }
  });

  // //   slides.style.transform = `translateX(${-currentIndex * 100}%)`;
  // // }
  
}

document.addEventListener("DOMContentLoaded", function() {
  const origenInput = document.getElementById("origen");
  const sugerenciasOrigen = document.getElementById("sugerencias-origen");

  origenInput.addEventListener("keyup", () => {
    let valor = origenInput.value;

    if (valor.length > 1) {
      fetch("sugerencialugares.php?q=" + encodeURIComponent(valor))
        .then(res => res.text())
        .then(data => {
          sugerenciasOrigen.innerHTML = data;

        });
    } else {
      sugerenciasOrigen.innerHTML = "";
    }
  });

  
});

document.addEventListener("DOMContentLoaded", function() {
  const destinoInput = document.getElementById("destino");
  const sugerenciasDestino = document.getElementById("sugerencias-destino");

   destinoInput.addEventListener("keyup", () => {
    let valor = destinoInput.value;

    if (valor.length > 1) {
      fetch("sugerencialugares.php?q=" + encodeURIComponent(valor))
        .then(res => res.text())
        .then(data => {
          sugerenciasDestino.innerHTML = data;
          
        });
    } else {
      sugerenciasDestino.innerHTML = "";
    }
  });

  

});



document.addEventListener("DOMContentLoaded", function() {
  document.addEventListener("click", function(e) {
  if (e.target.classList.contains("opcion")) {

    if (e.target.parentElement.id === "sugerencias-origen") {
      document.getElementById("origen").value = e.target.textContent;
      document.getElementById("sugerencias-origen").innerHTML = "";
    }

    if (e.target.parentElement.id === "sugerencias-destino") {
      document.getElementById("destino").value = e.target.textContent;
      document.getElementById("sugerencias-destino").innerHTML = "";
    }

  }
});
const hoy =new Date();
const fechaFormateada = hoy.toISOString().split('T')[0];
document.getElementById("miFecha").setAttribute("min", fechaFormateada);
  
window.onload = function() {
    const fechaMinima = new Date().toISOString().split('T')[0];
    document.getElementById("miFecha").min = fechaMinima;
}
function ctualizarfecha()
{

  actualizarfecha()
}

});

