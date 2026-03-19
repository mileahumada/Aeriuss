<?php
     if ($_SERVER["REQUEST_METHOD"] == "post") {
    $contraseña = $_POST['contrarepetida'];
    $clave = $_POST['contraseña'];

    // Comparar con los valores permitidos
    if ($clave == $contraseña) {
        
 echo "<script>
          alert('Se Inicio Sesion con exito');
          window.location.href = 'inicio.php';
        </script>";
  exit();
    } 
    else{
         echo "<script>
          alert('Contraseñas no coinciden');
          window.location.href = 'Registro.php';
        </script>";
  exit();
    }

  }
?>