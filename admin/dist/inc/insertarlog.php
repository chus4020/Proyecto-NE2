<?php 
session_start();
	$conexion=mysqli_connect('localhost','root','','dallim');

	/*$ficha=$_POST['ficha'];
	$nombre=$_POST['nombre'];
	$paterno=$_POST['paterno'];
	$materno=$_POST['materno'];
	$curp=$_POST['curp'];
	$sexo=$_POST['sexo'];
	$carrera=$_POST['carrera'];

$sql="insert into prepa (matricula,paterno,materno,nombre,curp,sexo,carrera) values (".$ficha.",'".$nombre."','".$paterno."','".$materno."','".$curp."','".$sexo."','".$carrera."')";*/
	if (mysqli_query($conexion,$sql)==1)
	{
		echo '<div class="msjgood">Registro Exitoso</div>';
	}
	else
	{
		echo '<div class="msj">Insert fail</div>';
	}


	
 ?>