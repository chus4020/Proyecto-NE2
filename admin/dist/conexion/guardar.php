<?php
include("funciones.php");

insertar($_POST["apellidos"],$_POST["nombre"],$_POST["usuario"],$_POST["telefono"],$_POST["direccion"],$_POST["contrasena"]);

echo "<script> alert('Registro correcto');
   location.href= '../vistaAdmin.html';
   </script> ";

//header ("Location: vistaAdmin.html");

/*$apellidos=$_POST['apellidos'];
$nombre=$_POST['nombre'];
$nombreUS=$_POST['usuario'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$passEmp=$_POST['contrasena'];

$insertar = "INSERT INTO empleado VALUES ('$apellidos','$nombre','$nombreUS','$telefono','$direccion','$passEmp') ";

$query=mysqli_query($conectar, $insertar);

if($query){

    echo "<script> alert('Registro correcto');
    location.href= '../register.html';
    </script> ";
}else{
    echo "<script> alert('Registro incorrecto, verifica los campos');
    location.href= '../register.html';
    </script> ";
}*/

?>