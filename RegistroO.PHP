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
    <title>Registro</title>
  </head>
   <header>
    <a href="inicio.php" class="logo">
      <img src="imagenes/logo con letra.png" alt="" width="120" class="logo" />
    </a>
    
    
    </nav>
  </header>

  <body class="hero">
    <div class="form">
      <form action="registro.php" method="post">
        
        <p>Nombre</p>
        <input type="text" class="input" placeholder="Nombre" name="nombre" />
        <p>Apellido</p>
        <input
          type="text"
          class="input"
          placeholder="Apellido"
          name="apellido"
        />
        <p>Email</p>
        <input type="text" class="input" placeholder="Email" name="email" />
        <p>Contraseña</p>
        <input
          type="text"
          class="input"
          placeholder="Contraseña"
          name="contraseña"
        />
        <p>Repetir contraseña</p>
        <input
          type="text"
          class="input"
          placeholder="Repetir contraseña"
          name="contrarepetida"
        />
        <br /><br />
        <input type="submit" value="Registrarse" class="button" />
      </form>
    </div>
  </body>
</html>
