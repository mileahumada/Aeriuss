<?php
session_start();

include 'conexion.php';

$usuario = strtolower(trim($_POST["nombre"]));
$apellido = strtolower(trim($_POST["apellido"]));
$email = strtolower(trim($_POST["email"]));
$clave = trim($_POST["contraseña"]);
$clave_rep = trim($_POST["contrarepetida"]);

if ((!empty($usuario)) && (!empty($clave)) && (!empty($clave_rep)) && (!empty($email)) && (!empty($apellido)) ) //verificamos si la variable no es null con la funcion isset
{
   
   if ($clave==$clave_rep) // VERIFICA QUE SEAN LAS MISMAS CLAVES
   {
    if ((preg_match_all('/[A-Z]/', $clave) >= 1) && (preg_match_all('/[0-9]/', $clave)>=1) && (strlen($clave)>=8))
    {
        
        $_SESSION["usuario"] = $usuario;
    
      
        $password_hash = password_hash($clave, PASSWORD_DEFAULT); //creamos un hash seguro para la contraseña
        
        $sql = "INSERT INTO usuarios (nombre, apellido, email, contraseña) VALUES (?,?,?,?)"; //insercion para la DB, ? los usamos para mejorar la seguridad
        
        $stmt = $conexion->prepare($sql);

        $stmt->bind_param("ssss", $usuario,$apellido,$email,$password_hash); // vinculamos los ? con los valores a reemplazar, la 's' significa que enviamos un String

        if($stmt->execute()){
            echo "Registro creado exitosamente.";
            header("Location:InicioSesion.php");
        }
        else{
            echo "Error";
        }

        // Cerrar la conexión
        $conexion->close();
        
        
    }
    else
    {
        $clave = null;
        $clave_rep = null;
        $usuario = null;
        echo "<script type='text/javascript'>alert('Clave Incorrecta');
        window.location.href = 'registroO.php';</script>";
    }
   }
   else
   {
    if (isset($_GET["usuario"]) && (str_contains($usuario, "@gmail.com")))
    {
        echo "<script type='text/javascript'>alert('No coinciden las contraseñas');
        window.location.href = 'registroO.php';</script>";
        $clave = null;
        $clave_rep = null;
        $usuario = null;
        exit;
    }
    else
    {
        echo "<script type='text/javascript'>alert('La cuenta debe ser gmail');
        window.location.href = 'registroO.php';</script>";
        $clave = null;
        $clave_rep = null;
        $usuario = null;
        exit;
    }
    
   }
}
else
{
        echo "<script type='text/javascript'>alert('Campos Vacios');
        window.location.href = 'registroO.php';</script>";
        $clave = null;
        $clave_rep = null;
        $usuario = null;
        exit; // detiene el script
}



    



?>