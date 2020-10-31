<?php
session_start();
require_once '../conexion/conexiondos.php';

if(empty($_POST['usuario']) && empty($_POST['contrasena']))
{
  echo '<div class="msj">Algunos datos están vacios</div>';
}
else
{
  $sql = 'SELECT * FROM empleado WHERE nombreUS = "'.$_POST['usuario'].'"';
  $query = $db->prepare($sql);
  $query->execute();
  $result = $query->fetch(PDO::FETCH_ASSOC);
   

   if(count($result) > 0 && password_verify($_POST['contrasena'], $result['passEmp']))
   {
     $_SESSION['usuario'] = $result['nombreUS'];
     echo "ok";
   }
   else
   {
     echo '<div class="msj">Usuario o contraseña incorrecta</div>';
   }
   
}
?>
