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
            <a href="Registro.php" class="buttons"><button>Registrarse</button></a>
        </nav>
    </header>

    <div class="datospersonales">
        <h2 class="t1">Ingresa tus datos personales</h2>
        <br>
        <div class="agrup1">
            <input type="text" name="" class="input-datosp" id="nombre" placeholder="Nombre" required>
            <input type="text" name="" class="input-datosp" id="apellido" placeholder="Apellido" required>
            <input type="text" name="" class="input-datosp" id="dni" placeholder="DNI" required>
        </div>

        <div class="agrup2">
            <input type="text" name="" class="input-datosp" id="nacionalidad" placeholder="Nacionalidad" required>
            <input type="date" name="" class="input-datosp" id="fechanacimiento" placeholder="Fecha de nacimiento"
                required>
        </div>

        <h2 class="t1">Tus datos de contacto</h2>
        <div class="agrup3 ">
            <input type="text" name="" class="input-datosp" id="telefono" placeholder="Telefono" required>
            <input type="text" name="" class="input-datosp" id="email" placeholder="Email" required>
        </div>

        <h2 class="t1">Metodo de pago</h2>
        <div class="agrup4">
            <!-- From Uiverse.io by gharsh11032000 -->
            <div class="tabs">
                <div class="tab-group">
                    <input checked="" id="tab1" name="tab" value="Credito" type="radio" />
                    <label for="tab1">
                        <span class="material-symbols-outlined">
                            credit_card
                        </span>
                        <span class="acomodar1"> Credito</span>
                    </label>
                </div>
                <div class="tab-group">
                    <input id="tab2" name="tab" value="Debito" type="radio" />
                    <label for="tab2">
                        <span class="material-symbols-outlined">
                            wallet
                        </span>
                    
                        <span class="acomodar1">Debito</span>
                    </label>
                </div>

            </div>



        </div>


        <h2 class="t1">Datos de la tarjeta</h2>

        <div class="agrup5">
            <input type="text" name="" class="input-datosp" id="nombretarjeta" placeholder="Nombre titular"
                required>
            <input type="text" name="" class="input-datosp" id="numerotarjeta" placeholder="Numero de la tarjeta"
                required>
        </div>
        <div class="agrup6">
            <input type="text" name="" class="input-datosp" id="cvv" placeholder="CVV" required>
            <input type="date" name="" class="input-datosp" id="vencimiento" placeholder="Vencimiento" required>
        </div>

        <div class="agrup7">
            <input type="text" name="" class="input-datosp" id="" placeholder="Direccion" required>
            <input type="text" name="" class="input-datosp" id="" placeholder="Ciudad" required>
            
        </div>

        <div class="agrup8">
            <input type="text" name="" class="input-datosp" id="" placeholder="Provincia" required>
            <input type="text" name="" class="input-datosp" id="" placeholder="Codigo Postal" required>

        </div>







        <div class="btn-continuar">
            <button>Continuar</button>
        </div>

    </div>


    <br><br><br><br><br><br><br><br>











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
                    
                </div>

            </div>
        </footer>
    </div>
</body>

</html>