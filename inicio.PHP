



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
          <div id="sugerencias-destino"></div>        </div>

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
    <button>Ver todo</button>
  </div>

  <div class="container">
    <div class="tarjeta">
      <a href="">
        <figure>
          <img src="imagenes/lugar1.jpg" alt="" width="500" />
        </figure>
        <div class="contenido">
          <p>Paquete</p>
          <h3>Moscu</h3>
          <p>
            6 DIAS / 5 NOCHES
            <BR></BR>
            HOTEL HILTON GARDEN
            <BR></BR>
          <h3> $1.600.000 POR PERSONA </h3>
          </p>

        </div>
      </a>
    </div>
    <div class="tarjeta">

      <a href="">
        <figure>
          <img src="imagenes/lugar2.jpg" alt="" width="500" />
        </figure>
        
        <div class="contenido">
          <p>Paquete</p>
          <h3>España</h3>
          <p>
            14 DIAS / 13 NOCHES
            <BR></BR>
            HOTEL ASIA GARDENS
            <BR></BR>
          <h3>$2.000.000 POR PERSONA</h3>
          </p>

        </div>
      </a>
    </div>
    <div class="tarjeta">
      <a href="">
        <figure>
          <img src="imagenes/lugar3.jpg" alt="" width="500" />
        </figure>
        <div class="contenido">
          <p>Paquete</p>
          <h3>Paris</h3>
          <p>
            7 DIAS / 6 NOCHES
            <BR></BR>
            HOTEL NAPOLEON
            <BR></BR>
          <h3>$2.100.000 POR PERSONA</h3>

          </p>

        </div>
      </a>
    </div>
  </div>

  <div class="titulos">
    <h1>Alojamientos</h1>
    <button>Ver todo</button>
  </div>
  <div class="container">
    <div class="tarjeta">
      <figure>
        <img src="imagenes/hotel1.jpg" alt="" width="500" />
        <a href="">
      </figure>
      <div class="contenido">
        <p>Alojamiento</p>
        <h3>Pella In Hostel</h3>
        <p>
          <span class="material-symbols-outlined" style="color: #d8a409; font-size: 16px;">
            kid_star
            kid_star
            kid_star
          </span>
          <br>
        <p> 1 noche, 2 personas</p>
        <br>
        <h3> $200.000 </h3>
        </p>

      </div>
      </a>
    </div>
    <div class="tarjeta">
      <a href="">
        <figure>
          <img src="imagenes/hotel2.jpg" alt="" width="500" />
        </figure>
        <div class="contenido">
          <p>Alojamiento</p>
          <h3>Diva Pyramids view inn</h3>
          <p>
            <span class="material-symbols-outlined" style="color: #d8a409; font-size: 16px;">
              kid_star
              kid_star
              kid_star
            </span>
            <br>
          <p> 1 noche, 2 personas</p>
          <br>
          <h3>$149.000</h3>
          </p>

        </div>
      </a>

    </div>
    <div class="tarjeta">
      <a href="  ">
        <figure>
          <img src="imagenes/hotel3.jpg" alt="" width="500" />
        </figure>
        <div class="contenido">
          <p>Alojamiento</p>
          <h3>The Muse New York</h3>

          <p>
            <span class="material-symbols-outlined" style="color: #d8a409; font-size: 16px;">
              kid_star
              kid_star
              kid_star
              kid_star
            </span>
            <br>
          <p>2 noches, 3 personas </p>
          <br>
          <h3>$300.000</h3>
          </p>

        </div>
      </a>

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