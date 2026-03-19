<?PHP
/*
En PHP, los m�todos GET y POST son los dos m�todos m�s comunes para enviar datos desde un formulario HTML al servidor. Cada uno tiene caracter�sticas y usos espec�ficos.
Diferencias entre GET y POST:
Visibilidad de los datos:

GET: Los datos se env�an a trav�s de la URL, lo que significa que son visibles para todos. Ejemplo: http://example.com/page.php?nombre=Juan&edad=25.
POST: Los datos se env�an en el cuerpo de la solicitud HTTP, lo que los hace invisibles en la URL.
Seguridad:

GET: Es menos seguro porque los datos se muestran en la URL, lo que los hace vulnerables al ser almacenados en historiales y cach�s. No debe usarse para enviar informaci�n sensible como contrase�as.
POST: Es m�s seguro ya que los datos no se muestran en la URL. Es preferible para enviar informaci�n confidencial.
Tama�o de los datos:

GET: Tiene una limitaci�n de tama�o en la URL (generalmente unos 2048 caracteres).
POST: No tiene limitaci�n de tama�o, permitiendo enviar grandes cantidades de datos, como formularios largos o archivos.
Idempotencia:

GET: Es idempotente, lo que significa que hacer la misma solicitud varias veces no cambia el estado del servidor. Se utiliza principalmente para obtener datos.
POST: No es idempotente y puede alterar el estado del servidor. Se usa para enviar datos y realizar cambios.
Cach� y marcadores:

GET: Es compatible con el cach� del navegador y puede ser guardado como marcador o favorito.
POST: No se almacena en cach� y no se puede guardar como marcador.
*/

 session_start();

if ((isset($_SESSION["usuario"])) || (isset($_SESSION["clave"])) )
{
   
    session_unset();
    session_destroy();
}

?>
