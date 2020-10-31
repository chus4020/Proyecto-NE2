<?php
session_start();
require_once '../conexion/conexion.php';

if(empty($_POST['usuario']) && empty($_POST['password']))
{
  echo '<div class="msj">Algunos datos están vacios</div>';
}
else
{
  $sql = 'SELECT * FROM empleado WHERE nombre_usuario = "'.$_POST['usuario'].'"';
  $query = $db->prepare($sql);
  $query->execute();
  $result = $query->fetch(PDO::FETCH_ASSOC);
   

   if(count($result) > 0 && password_verify($_POST['password'], $result['pass']))
   {
     $_SESSION['usuario'] = $result['nombre_usuario'];
     echo "ok";
   }
   else
   {
     echo '<div class="msj">Usuario o contraseña incorrecta</div>';
   }
   
}
