<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/68e2fe5586.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <script src="aerius.js"></script>
  <title>Aerius</title>
</head>

<body class="body" id="hero">
  <header>

    <a href="inicio.php" class="logo">
      <img src="imagenes/logo con letra.png" alt="" width="150" class="logo" />
    </a>
    <nav>
      <a href="paquetes.php" class="link">
        <i class="fa-solid fa-suitcase"></i>
        Paquetes
      </a>
      <a href="inicio.php" class="link">
        <i class="fa-solid fa-plane-departure" style="color: #006a71;"></i>
        Vuelos
      </a>
      <a href="alojamientos.php" class="link">
        <i class="fa-solid fa-house"></i>
        Alojamientos
      </a>
      <a href="ofertas.php" class="link">
        <i class="fa-solid fa-fire"></i>
        Ofertas
      </a>
      <a href="InicioSesion.php" class="buttons"><button>Iniciar Sesion</button></a>
      <a href="RegistroO.php" class="buttons"><button>Registrarse</button></a>
    </nav>
  </header>

  <div class="vuelos">
    <div class="fondo">
      <!-- <img src="imagenes/aviones.png" alt="" width="1900" /> -->
    </div>
    <div class="card">
      <h1 id="titulo">Vuelos</h1>
      <div class="contenido-card">

        <div class="group">
          <i class="fa-solid fa-plane-departure" id="icon"></i>
          <input type="text" placeholder="Origen" class="input" id="origen">
          <div id="sugerencias-origen"></div>
        </div>

        <button id="boton-card" onclick="intercambiarlugares()"><i class="fa-solid fa-arrows-turn-to-dots"></i></button>

        <div class="group">
          <i class="fa-solid fa-plane-arrival" id="icon"></i>
          <input type="text" placeholder="Destino" class="input" id="destino">
          <div id="sugerencias-destino"></div>
        </div>

        <div class="group">
          <i class="fa-solid fa-calendar-days" id="icon"></i>
          <input type="date" class="input" id="fecha1">
        </div>


        <div class="group">
          <i class="fa-solid fa-calendar-days" id="icon"></i>
          <input type="date" class="input" id="fecha2">
        </div>

        <div class="ipasajeros" id="div-pasajeros">
          <div class="pasajeros">
            <i class="fa-solid fa-person-walking-luggage" id="icon"></i>
            <input type="text" placeholder="Pasajeros" class="input" id="input-menu" readonly>
          </div>

          <div class="menu-vertical" id="menu-pasajeros">
            <div class="op-mv">
              <div class="adultos">
                <h4> Adultos </h4>
                <button onclick="restarcontador1()"> - </button>
                <p id="contador1">1</p>
                <button onclick="sumarcontador1()">+</button>
              </div>
              <div class="niños">
                <div class="tniños">
                  <h4>Niños</h4>
                </div>
                <div class="bniños">
                  <button onclick="restarcontador2()"> - </button>
                  <p id="contador2">0</p>
                  <button onclick="sumarcontador2()">+</button>
                </div>
              </div>
              <button id="bap">Aplicar</button>
            </div>
          </div>
        </div>




        <a href="busquedavuelos.php"><button id="boton-card">Buscar</button> </a>

      </div>
    </div>
  </div>
  <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
  <div class="carteles">
    <div class="imagen-estatica">
      <img src="imagenes/cartel1.png" alt="" width="500" />
    </div>
    <div class="slider-box">
      <ul>
        <li>
          <img src="imagenes/cartel2.png" alt="" width="500" />
        </li>
        <li>
          <img src="imagenes/cartel3.png" alt="" width="500" />
        </li>
        <li>
          <img src="imagenes/cartel4.png" alt="" width="500" />
        </li>
        <li>
          <img src="imagenes/cartel5.png" alt="" width="500" />
        </li>
        <li>
          <img src="imagenes/cartel6.png" alt="" width="500" />
        </li>
      </ul>
    </div>
  </div>

  <div class="titulos">
    <h1>Paquetes</h1>
  </div>

  <div class="container">
    <div class="tarjeta">
      <figure>
        <img src="https://www.omintassistance.com.ar/blog/wp-content/uploads/2024/03/Todo-lo-que-tenes-que-saber-para-visitar-las-Cataratas-del-Iguazu.jpeg" alt="Iguazú">
        <div class="badge-dias">5 DÍAS / 4 NOCHES</div>
      </figure>

      <div class="contenido">
        <span class="categoria">PAQUETE</span>
        <h3>Paquetes a Puerto Iguazú</h3>

        <div class="rating">
          <span class="score">6.9</span>
          <span class="stars">★★★</span>
        </div>

        <p class="detalles">Saliendo desde Buenos Aires</p>
        <p class="detalles">Hotel + Vuelo</p>

        <div class="oferta-tag">Oferta Imbatible</div>

        <hr class="divisor">

        <div class="seccion-precio">
          <p class="texto-precio">Precio final por persona</p>
          <div class="precio-final"><span>$</span> 241.456</div>
          <p class="impuestos">Incluye impuestos, tasas y cargos</p>
        </div>
      </div>
    </div>
    <div class="tarjeta">
      <figure>
        <img src="https://www.latamairlines.com/content/dam/latamxp/sites/vamos-latam/news-nieve-sudam%C3%A9rica-may25/bariloche/Modelo-3.png" alt="Iguazú">
        <div class="badge-dias">5 DÍAS / 4 NOCHES</div>
      </figure>

      <div class="contenido">
        <span class="categoria">PAQUETE</span>
        <h3>Paquetes a Bariloche</h3>

        <div class="rating">
          <span class="score">6.9</span>
          <span class="stars">★★★</span>
        </div>

        <p class="detalles">Saliendo desde Buenos Aires</p>
        <p class="detalles">Hotel + Vuelo</p>

        <div class="oferta-tag">Oferta Imbatible</div>

        <hr class="divisor">

        <div class="seccion-precio">
          <p class="texto-precio">Precio final por persona</p>
          <div class="precio-final"><span>$</span> 241.456</div>
          <p class="impuestos">Incluye impuestos, tasas y cargos</p>
        </div>
      </div>
    </div>
    <div class="tarjeta">
      <figure>
        <img src="https://cumelentours.tur.ar/wp-content/uploads/2025/01/%C2%BFCual-es-la-mejor-epoca-para-conocer-El-Calafate-Cumelen-1024x683.jpg" alt="Iguazú">
        <div class="badge-dias">5 DÍAS / 4 NOCHES</div>
      </figure>

      <div class="contenido">
        <span class="categoria">PAQUETE</span>
        <h3>Paquetes a Calafate</h3>

        <div class="rating">
          <span class="score">6.9</span>
          <span class="stars">★★★</span>
        </div>

        <p class="detalles">Saliendo desde Buenos Aires</p>
        <p class="detalles">Hotel + Vuelo</p>

        <div class="oferta-tag">Oferta Imbatible</div>

        <hr class="divisor">

        <div class="seccion-precio">
          <p class="texto-precio">Precio final por persona</p>
          <div class="precio-final"><span>$</span> 241.456</div>
          <p class="impuestos">Incluye impuestos, tasas y cargos</p>
        </div>
      </div>
    </div>
  </div>

  <div class="titulos">
    <h1>Alojamientos</h1>
  </div>
  <div class="container">
    <div class="tarjeta">
      <figure>
        <img src="https://www.omintassistance.com.ar/blog/wp-content/uploads/2024/03/Todo-lo-que-tenes-que-saber-para-visitar-las-Cataratas-del-Iguazu.jpeg" alt="Iguazú">
        <div class="badge-dias">5 DÍAS / 4 NOCHES</div>
      </figure>

      <div class="contenido">
        <span class="categoria">PAQUETE</span>
        <h3>Paquetes a Puerto Iguazú</h3>

        <div class="rating">
          <span class="score">6.9</span>
          <span class="stars">★★★</span>
        </div>

        <p class="detalles">Saliendo desde Buenos Aires</p>
        <p class="detalles">Hotel + Vuelo</p>

        <div class="oferta-tag">Oferta Imbatible</div>

        <hr class="divisor">

        <div class="seccion-precio">
          <p class="texto-precio">Precio final por persona</p>
          <div class="precio-final"><span>$</span> 241.456</div>
          <p class="impuestos">Incluye impuestos, tasas y cargos</p>
        </div>
      </div>
    </div>
    <div class="tarjeta">
      <figure>
        <img src="https://www.latamairlines.com/content/dam/latamxp/sites/vamos-latam/news-nieve-sudam%C3%A9rica-may25/bariloche/Modelo-3.png" alt="Iguazú">
        <div class="badge-dias">5 DÍAS / 4 NOCHES</div>
      </figure>

      <div class="contenido">
        <span class="categoria">PAQUETE</span>
        <h3>Paquetes a Bariloche</h3>

        <div class="rating">
          <span class="score">6.9</span>
          <span class="stars">★★★</span>
        </div>

        <p class="detalles">Saliendo desde Buenos Aires</p>
        <p class="detalles">Hotel + Vuelo</p>

        <div class="oferta-tag">Oferta Imbatible</div>

        <hr class="divisor">

        <div class="seccion-precio">
          <p class="texto-precio">Precio final por persona</p>
          <div class="precio-final"><span>$</span> 241.456</div>
          <p class="impuestos">Incluye impuestos, tasas y cargos</p>
        </div>
      </div>
    </div>
    <div class="tarjeta">
      <figure>
        <img src="https://cumelentours.tur.ar/wp-content/uploads/2025/01/%C2%BFCual-es-la-mejor-epoca-para-conocer-El-Calafate-Cumelen-1024x683.jpg" alt="Iguazú">
        <div class="badge-dias">5 DÍAS / 4 NOCHES</div>
      </figure>

      <div class="contenido">
        <span class="categoria">PAQUETE</span>
        <h3>Paquetes a Calafate</h3>

        <div class="rating">
          <span class="score">6.9</span>
          <span class="stars">★★★</span>
        </div>

        <p class="detalles">Saliendo desde Buenos Aires</p>
        <p class="detalles">Hotel + Vuelo</p>

        <div class="oferta-tag">Oferta Imbatible</div>

        <hr class="divisor">

        <div class="seccion-precio">
          <p class="texto-precio">Precio final por persona</p>
          <div class="precio-final"><span>$</span> 241.456</div>
          <p class="impuestos">Incluye impuestos, tasas y cargos</p>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-dark">
    <footer>
      <div class="containerf">
        <div class="row">
          <div class="columna">
            <h3>Servicios</h3>
            <ul>
              <li><a href="#">Diseño de Web</a></li>
              <li><a href="#">Clase</a></li>
              <li><a href="#">Hosteado</a></li>
            </ul>
          </div>
          <div class="columna">
            <h3>About</h3>
            <ul>
              <li><a href="#">Compañia</a></li>
              <li><a href="#">Acerca de nosotros</a></li>
              <li><a href="#">Informacion</a></li>
            </ul>
          </div>
          <div class="columna">
            <h3>Aerius</h3>
            <p> © 2025 Aerius. Todos los derechos reservados.</p>
          </div>
          <div class="col item social"></i></a><a href="#"><i class="fa-brands fa-square-facebook"></i>></i></a><a
              href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i
                class="fa-brands fa-instagram"></i>></i></a></div>
        </div>

      </div>
    </footer>
  </div>
</body>

</html>