<?php

include("funciones.php");

actualizar($_POST["clavemp"],$_POST["apellidos"],$_POST["nombre"],$_POST["usuario"],$_POST["telefono"],$_POST["direccion"],$_POST["contrasena"]);

echo "<script> alert('Registro actualizado');
   location.href= '../vistaAdmin.html';
   </script> ";

?>
