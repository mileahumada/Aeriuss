<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="formularios.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/68e2fe5586.js"
      crossorigin="anonymous"
    ></script>
    <title>Inicio Sesion</title>
  </head>

  <body class="hero">
    <div class="form">
      <form action="formularios.php" method="POST">
        <a href="inicio.html"
          ><img src="imagenes/logo con letra.png" alt="" width="100"
        /></a>
        <p>Email</p>
        <input
          type="email"
          class="input"
          placeholder="Email"
          name="email"
          required
        />
        <p>Contraseña</p>
        <input
          type="text"
          class="input"
          placeholder="Contraseña"
          name="contraseña"
          required
        />
        <br /><br />
        <a href="">Olvidaste tu contraseña?</a>
        <br /><br />
        <input type="submit" value="Iniciar sesion" class="button" />
        <br /><br />
        <p>No tenes cuenta?</p>

        <a href="Registro.html">
          <button class="button" href="Registro.html">Registrarse</button>
        </a>
      </form>
    </div>
  </body>
</html>
