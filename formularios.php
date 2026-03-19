<?php
  // Usuario y contraseña predefinidos
  $usuario_valido = "admin@gmail.com";
  $clave_valida = "12345678";

  // Si el formulario ha sido enviado
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emails = $_POST['email'];
    $clave = $_POST['contraseña'];

    // Comparar con los valores permitidos
    if ($emails === $usuario_valido && $clave === $clave_valida) {
  header('Location: inicio.html');
    } 
  else
  {
    echo "<script>
          alert('email o/y contraseña incorrecto');
          window.location.href = 'inicioSesion.html';
        </script>";
  exit();
  }
}
