<?php 
session_start();
	$conexion=mysqli_connect('localhost','root','','dallim');

	/*$ficha=$_POST['nombre'];
	$nombre=$_POST['pass'];
	/*$paterno=$_POST['paterno'];
	$materno=$_POST['materno'];
	$curp=$_POST['curp'];
	$sexo=$_POST['sexo'];
	$carrera=$_POST['carrera'];

$sql="insert into empleado (nombreUs, passEmp) values (".$nombre.",'".$pass."')";*/
	if (mysqli_query($conexion,$sql)==1)
	{
		echo '<div class="msjgood">Registro Exitoso</div>';
	}
	else
	{
		echo '<div class="msj">Insert fail</div>';
	}


	
 ?>