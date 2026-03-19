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
        <i class="fa-solid fa-house" style="color: #006a71"></i>
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

  <div class="fotos-aloj">
    <img
      src="https://media.staticontent.com/media/pictures/ca5bd8a9-3f04-46da-b7e4-b92336d58176/853x380?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
      alt="" class="img1" data-index="0" />
    <img
      src="https://media.staticontent.com/media/pictures/4fcffd75-839b-40e4-92cd-13bf3be47698/422x250?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
      alt="" class="img2" data-index="1" />
    <img
      src="https://media.staticontent.com/media/pictures/d61f5b2a-1d2c-4184-9800-52c86ff9d0cb/208x125?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
      alt="" class="img3" data-index="2" />
    <img
      src="https://media.staticontent.com/media/pictures/296f88c7-9588-4a9d-a0b6-e5516388260d/208x125?op=TRUNCATE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1"
      alt="" class="img4" data-index="3" />
    <!-- Modal Popup para el carrusel -->
    <div id="carruselModal"
      style="display:none; position:fixed; z-index:9999; left:0; top:0; width:100vw; height:100vh; background:rgba(0,0,0,0.8); justify-content:center; align-items:center;">
      <div id="carruselModalContent" style="position:relative; max-width:95vw; max-height:95vh; margin:auto;">
        <div class="galeriaimg" style="background:none; box-shadow:none; margin:0;">
          <button onclick="retrocederimagenes()" class="btn-retro" id="atrasModal">
            <span class="material-symbols-outlined">arrow_back_ios</span>
          </button>
          <div class="imagenes" id="imagenModal">
            <ul>
              <li><img
                  src="https://media.staticontent.com/media/pictures/ca5bd8a9-3f04-46da-b7e4-b92336d58176/1120x700?op=fit"
                  alt="" width="900" height="400" /></li>
              <li><img
                  src="https://media.staticontent.com/media/pictures/4fcffd75-839b-40e4-92cd-13bf3be47698/1120x700?op=fit"
                  alt="" width="900" height="400" /></li>
              <li><img
                  src="https://media.staticontent.com/media/pictures/d61f5b2a-1d2c-4184-9800-52c86ff9d0cb/1120x700?op=fit"
                  alt="" width="900" height="400" /></li>
              <li><img
                  src="https://media.staticontent.com/media/pictures/296f88c7-9588-4a9d-a0b6-e5516388260d/1120x700?op=fit"
                  alt="" width="900" height="400" /></li>
            </ul>
          </div>
          <button onclick="avanzarimagenes()" class="btn-avan" id="adelanteModal">
            <span class="material-symbols-outlined">arrow_forward_ios</span>
          </button>
        </div>
      </div>
    </div>
    <script>
      // Carrusel funcional para galeriaimg y modal popup
      document.addEventListener('DOMContentLoaded', function () {
        // Carrusel principal (en página)
        const lista = document.querySelector('.galeriaimg .imagenes ul');
        const slides = Array.from(lista.children);
        let currentIndex = 0;

        function showSlide(index) {
          slides.forEach((li, i) => {
            li.style.display = i === index ? 'block' : 'none';
          });
        }

        function avanzarimagenes() {
          currentIndex = (currentIndex + 1) % slides.length;
          showSlide(currentIndex);
        }

        function retrocederimagenes() {
          currentIndex = (currentIndex - 1 + slides.length) % slides.length;
          showSlide(currentIndex);
        }

        showSlide(currentIndex);
        window.avanzarimagenes = avanzarimagenes;
        window.retrocederimagenes = retrocederimagenes;

        // Carrusel Modal (popup)
        const modal = document.getElementById('carruselModal');
        const modalContent = document.getElementById('carruselModalContent');
        const listaModal = document.querySelector('#imagenModal ul');
        const slidesModal = Array.from(listaModal.children);
        let currentIndexModal = 0;


        function showSlideModal(index) {
          slidesModal.forEach((li, i) => {
            li.style.display = i === index ? 'block' : 'none';
          });
        }

        function avanzarimagenesModal() {
          currentIndexModal = (currentIndexModal + 1) % slidesModal.length;
          showSlideModal(currentIndexModal);
        }

        function retrocederimagenesModal() {
          currentIndexModal = (currentIndexModal - 1 + slidesModal.length) % slidesModal.length;
          showSlideModal(currentIndexModal);
        }

        // Botones del modal
        document.getElementById('adelanteModal').onclick = avanzarimagenesModal;
        document.getElementById('atrasModal').onclick = retrocederimagenesModal;

        // Cerrar modal al hacer click fuera del contenido
        modal.addEventListener('click', function (e) {
          if (!modalContent.contains(e.target)) {
            modal.style.display = 'none';
          }
        });

        // Mostrar solo la primera imagen del modal al cargar
        showSlideModal(currentIndexModal);

        // Hacer click en las imágenes chicas abre el modal en la imagen correspondiente
        document.querySelectorAll('.fotos-aloj img').forEach(function (img) {
          img.style.cursor = 'pointer';
          img.addEventListener('click', function () {
            const idx = parseInt(img.getAttribute('data-index')) || 0;
            currentIndexModal = idx;
            showSlideModal(currentIndexModal);
            modal.style.display = 'flex';
          });
        });
      });
    </script>
    
  </div>
  <!-- Tarjeta de precio estilo Despegar -->
    <div class="tarjeta-precio">

      <div class="tarjeta-subtitulo">Vuelo + Alojamiento</div>
      <div class="tarjeta-titulo">Habitación Doble Superior con Vista</div>
      <div class="tarjeta-precio-persona">Precio final por persona</div>
      <div class="tarjeta-precio-tachado">$ 551.994</div>
      <div class="tarjeta-precio-final">
        <span class="tarjeta-precio-icono"><i class="fa-solid fa-circle-info"></i></span> $ 464.958
      </div>
      <div class="tarjeta-precio-total">Final 2 personas $ 929.916</div>
      <div class="tarjeta-precio-detalle">Incluye impuestos, tasas y cargos</div>
      <div class="tarjeta-precio-detalle tarjeta-precio-sin-imp">Precio sin impuestos nacionales: $ 806.163</div>
      <button class="tarjeta-btn">Comprar</button>
    </div>


    <section class="hotel-header">
      <div class="hotel-header__main">
        <h1 class="hotel-header__title">Deco Collection</h1>
        <div class="hotel-header__stars">
          <span class="fa fa-star" style="color: rgb(214, 182, 3);"></span>
          <span class="fa fa-star" style="color: rgb(214, 182, 3);"></span>
          <span class="fa fa-star" style="color: rgb(214, 182, 3);"></span>
          <span class="fa fa-star" style="color: rgb(214, 182, 3);"></span>
        </div>
        <div class="hotel-header__location">
          Buenos Aires, Argentina. A 1,52 km del centro
          <a href="#" class="hotel-header__map"></a>
        </div>
      </div>
    </section>
  <!-- Servicios del alojamiento -->
  <section class="aloj-servicios">
    <h2 class="aloj-servicios__titulo">El alojamiento ofrece</h2>
    <div class="aloj-servicios__lista">
      <div class="aloj-servicio">
        <span class="fa-solid fa-person-swimming aloj-servicio__icon"></span>
        <div class="aloj-servicio__desc">Piscina al aire libre<br>de temporada</div>
      </div>
      <div class="aloj-servicio">
        <span class="fa-solid fa-wifi aloj-servicio__icon"></span>
        <div class="aloj-servicio__desc">Wi-Fi gratis en<br>zonas comunes</div>
      </div>
      <div class="aloj-servicio">
        <span class="fa-solid fa-check aloj-servicio__icon"></span>
        <div class="aloj-servicio__desc">Jardín</div>
      </div>
      <div class="aloj-servicio">
        <span class="fa-regular fa-champagne-glasses aloj-servicio__icon"></span>
        <div class="aloj-servicio__desc">Bar</div>
      </div>
      <div class="aloj-servicio">
        <span class="fa-solid fa-check aloj-servicio__icon"></span>
        <div class="aloj-servicio__desc">Desayuno</div>
      </div>
      <div class="aloj-servicio">
        <span class="fa-solid fa-check aloj-servicio__icon"></span>
        <div class="aloj-servicio__desc">Servicio de<br>comida a la<br>habitación</div>
      </div>
      <div class="aloj-servicio">
        <span class="fa-solid fa-check aloj-servicio__icon"></span>
        <div class="aloj-servicio__desc">Restaurante</div>
      </div>
    </div>
  </section>
<br><br><br><br>
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
</body>






</html>