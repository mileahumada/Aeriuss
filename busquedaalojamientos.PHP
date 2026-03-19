<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/68e2fe5586.js" crossorigin="anonymous"></script>
  <title>Aerius</title>

</head>

<body>
  <header>
    <a href="inicio.html" class="logo">
      <img src="imagenes/logo con letra.png" alt="" width="150" class="logo" />
    </a>
    <nav>
      <a href="paquetes.html" class="link">
        <i class="fa-solid fa-suitcase"></i>
        Paquetes
      </a>
      <a href="inicio.html" class="link">
        <i class="fa-solid fa-plane-departure"></i>
        Vuelos
      </a>
      <a href="alojamientos.html" class="link">
        <i class="fa-solid fa-house " style="color: #006a71"></i>
        Alojamientos
      </a>
      <a href="ofertas.html" class="link">
        <i class="fa-solid fa-fire"></i>
        Ofertas
      </a>
      <a href="InicioSesion.html" class="buttons"><button>Iniciar Sesion</button></a>
      <a href="Registro.html" class="buttons"><button>Registrarse</button></a>
    </nav>
  </header>
  <div class="busqueda-main">
    <div class="filtros-col">
      <!-- Aquí van tus filtros (todo lo que está antes de los cuadros de alojamiento) -->
      <h1>Filtros</h1>
      <h2>Alternativas de pago</h2>
      <!-- From Uiverse.io by Na3ar-17 -->
      <div class="radio-inputt">
        <label class="label">
          <input type="radio" id="value-1" checked="" name="value-radio1" value="value-1" />
          <p class="text">Todas</p>
        </label>
        <label class="label">
          <input type="radio" id="value-2" name="value-radio1" value="value-2" />
          <p class="text">En cuotas</p>
        </label>
        <label class="label">
          <input type="radio" id="value-3" name="value-radio1" value="value-3" />
          <p class="text">Pago al alojamiento</p>
        </label>
      </div>



      <h2>Tipo de alojamientos</h2>
      <h2>SOY MILE</h2>
      <h2>SOY LUCAS</h2>

      <div class="radio-input">
        <label class="label">
          <input type="radio" id="value-2" checked="" name="value-radio2" value="value-2" />
          <p class="text">Todos los alojamientos</p>
        </label>
        <label class="label">
          <input type="radio" id="value-2" name="value-radio2" value="value-2" />
          <p class="text">Casas</p>
        </label>
        <label class="label">
          <input type="radio" id="value-3" name="value-radio2" value="value-3" />
          <p class="text">Departamentos</p>
        </label>
        <label class="label">
          <input type="radio" id="value-3" name="value-radio2" value="value-3" />
          <p class="text">Hoteles</p>
        </label>
        <label class="label">
          <input type="radio" id="value-3" name="value-radio2" value="value-3" />
          <p class="text">Condominios</p>
        </label>
      </div>


      <h2>Alimentacion</h2>

      <div class="radio-input">
        <label class="label">
          <input type="radio" id="value-2" checked="" name="value-radio3" value="value-2" />
          <p class="text">Todas las opciones</p>
        </label>
        <label class="label">
          <input type="radio" id="value-2" name="value-radio3" value="value-2" />
          <p class="text">Desayuno</p>
        </label>
        <label class="label">
          <input type="radio" id="value-3" name="value-radio3" value="value-3" />
          <p class="text">Solo hospedaje</p>
        </label>
        <label class="label">
          <input type="radio" id="value-3" name="value-radio3" value="value-3" />
          <p class="text">Media Pension</p>
        </label>
      </div>

      <h2>Servicios destacados</h2>

      <div class="radio-input">
        <label class="label">
          <input type="radio" id="value-2" checked="" name="value-radio4" value="value-2" />
          <p class="text">Estacionamiento</p>
        </label>
        <label class="label">
          <input type="radio" id="value-2" name="value-radio4" value="value-2" />
          <p class="text">Pet friendly</p>
        </label>
        <label class="label">
          <input type="radio" id="value-3" name="value-radio4" value="value-3" />
          <p class="text">Pileta</p>
        </label>
        <label class="label">
          <input type="radio" id="value-3" name="value-radio4" value="value-3" />
          <p class="text">Servicios para niños</p>
        </label>
        <label class="label">
          <input type="radio" id="value-3" name="value-radio4" value="value-3" />
          <p class="text">Servicio de traslado</p>
        </label>
      </div>
    </div>

    <div class="aloj-lista">
      <div class="contenedor-aloj">
        <div class="img-box">
          <div class="carussel-aloj">
            <ul>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/4fbbefca-ab8b-4af7-bedf-37ee7d8fe9bf/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/6acca5c1-e4b9-4e58-9611-ac1e01d441c8/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/b899fab6-995c-4030-abd9-6022b5576e79/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/9d4aaedc-bacb-48ae-862e-630f7015c93e/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/46681be6-10d8-4fda-8528-06ee329580a2/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
            </ul>
          </div>

        </div>

        <div class="text-box">
          <h2>American Park Hotel</h2>
          <p>
            <span class="material-symbols-outlined" style="color: #d8a409; font-size: 16px;">
              kid_star
              kid_star
              kid_star
            </span>
          </p>
          <h5>Precio por noche: $110.000</h5>
          <p>
            Impuestos incluidos
            <span class="material-symbols-outlined" style="color: #4297f8; font-size: 16px;">
              info
            </span>
          </p>
          <p>Precio sin impuestos:$96.000</p>
          <a href="detallesAloj.html"> 
           <button class="btn" >Ver detalles</button>
          </a>
         
        </div>
      </div>

      <div class="contenedor-aloj2">
        <div class="img-box">
          <div class="carussel-aloj">
            <ul>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/9994e67f-6064-474a-a42a-8f154e379b19/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/aea7b7ee-f068-4b99-9c35-a9f380750f76/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/ddf0f916-816e-4b89-b404-ab65e5f4889a/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/9ac2abcb-7482-4ad5-9fc2-10f26b5ffcb7/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/99fb8461-b520-4258-a824-32a3ef584efe/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
            </ul>
          </div>

        </div>

        <div class="text-box">
          <h2>Hilton</h2>
          <p>
            <span class="material-symbols-outlined" style="color: #d8a409; font-size: 16px;">
              kid_star
              kid_star
              kid_star
              kid_star
              kid_star

            </span>
          </p>
          <h5>Precio por noche: $110.000</h5>
          <p>
            Impuestos incluidos
            <span class="material-symbols-outlined" style="color: #4297f8; font-size: 16px;">
              info
            </span>
          </p>
          <p>Precio sin impuestos:$96.000</p>
          <a href="detallesaloj2.html"> 
            <button class="btn">Ver detalles</button>
          </a>
          
        </div>
      </div>

      <div class="contenedor-aloj3">
        <div class="img-box">
          <div class="carussel-aloj">
            <ul>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/1068fed3-91a5-4dde-a12f-68cc1c346c73/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/97a38917-a057-4713-ae64-71011cf2faa5/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/875e7808-ef8a-4421-a191-a3abb59f95e0/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/4f220e4e-93b2-43ff-b411-4424f5ef036a/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/ad77f65b-f2d0-448b-b0ad-b39e9ee65f41/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
            </ul>
          </div>

        </div>

        <div class="text-box">
          <h2>Hotel Las Americas</h2>
          <p>
            <span class="material-symbols-outlined" style="color: #d8a409; font-size: 16px;">
              kid_star
              kid_star
              kid_star
              kid_star
            </span>
          </p>
          <h5>Precio por noche: $110.000</h5>
          <p>
            Impuestos incluidos
            <span class="material-symbols-outlined" style="color: #4297f8; font-size: 16px;">
              info
            </span>
          </p>
          <p>Precio sin impuestos:$96.000</p>
          <button class="btn">Ver detalles</button>
        </div>
      </div>

      <div class="contenedor-aloj4">
        <div class="img-box">
          <div class="carussel-aloj">
            <ul>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/290b466b-2505-4e42-afdb-cf87cb33e142/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/2bba5bfe-433c-46dc-9e53-1d0a8b10a3fa/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/8efd99ba-a379-4023-b115-f9d6d3e65059/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/e56fda25-b471-4293-a05f-507952c38f73/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/f4758b9c-18a1-4813-8f68-388e8daf2998/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
            </ul>
          </div>

        </div>

        <div class="text-box">
          <h2>Cyan Americas</h2>
          <p>
            <span class="material-symbols-outlined" style="color: #d8a409; font-size: 16px;">
              kid_star
              kid_star
              kid_star
              kid_star
            </span>
          </p>
          <h5>Precio por noche: $110.000</h5>
          <p>
            Impuestos incluidos
            <span class="material-symbols-outlined" style="color: #4297f8; font-size: 16px;">
              info
            </span>
          </p>
          <p>Precio sin impuestos:$96.000</p>
          <button class="btn">Ver detalles</button>
        </div>
      </div>

      <div class="contenedor-aloj5">
        <div class="img-box">
          <div class="carussel-aloj">
            <ul>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/effa9372-d85f-4f54-8309-cf08ec736d2a/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/c35c77b2-0238-449f-9aa0-3ef9e3137ef4/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/6768339e-1503-4b9a-81e5-3dac1b4b5e37/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/45a430dd-c2b7-4ed9-9f4b-09ee78266abb/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
              <li>
                <img
                  src="https://media.staticontent.com/media/pictures/44e42cda-b044-46c9-8dc8-096613826259/316x311?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
                  alt="" />
              </li>
            </ul>
          </div>

        </div>

        <div class="text-box">
          <h2>Hotel Madero</h2>
          <p>
            <span class="material-symbols-outlined" style="color: #d8a409; font-size: 16px;">
              kid_star
              kid_star
              kid_star
              kid_star
              kid_star
            </span>
          </p>
          <h5>Precio por noche: $110.000</h5>
          <p>
            Impuestos incluidos
            <span class="material-symbols-outlined" style="color: #4297f8; font-size: 16px;">
              info
            </span>
          </p>
          <p>Precio sin impuestos:$96.000</p>
          <button class="btn">Ver detalles</button>
        </div>
      </div>


    </div>


  </div>


  <div class="paginado">
    <button>
      <span class="material-symbols-outlined">
        chevron_left
      </span>
    </button>
    <h3>1</h3>
    <button>
      <span class="material-symbols-outlined">
        chevron_right
      </span>
    </button>
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