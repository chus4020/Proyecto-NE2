<?php
mb_internal_encoding("iso-8859-1");
include("conexion.php");

function consultageneral($id_empleado)
{
   $db = new BDSQL();
   $consulta = $db->consulta("select * from empleado");

echo '<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Información</title>
<link href="../css/styles.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                           <div class="card-header"><h3 class="text-center font-weight-light my-4">Información del empleado</h3></div>
                           <div class="card-body">
                            
                              <table border="3" class="table">
                              <thead>
                              <tr>
                              <th>Clave empleado</th>
                              <th>Apellidos</th>
                              <th>Nombre</th>
                              <th>Usuario</th>
                              <th>Teléfono</th>
                              <th>Email</th>
                              <th>Contraseña</th>
                              </tr>
                              </thead>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </main>
      </div>
</div>'; 


    while($resultados = $db->fetch_array($consulta)) 
    {
      echo '<tr><td>';
      echo $resultados["id_empleado"];
      echo '</td><td>';
      echo $resultados["apellidos"];
      echo "</td><td>";
      echo $resultados["nombre"];
      echo "</td><td>";
      echo $resultados["nombreUS"];
      echo "</td><td>";
      echo $resultados["telefono"];
      echo "</td><td>";
      echo $resultados["correo"];
      echo "</td><td>";
      echo $resultados["passEmp"];
      echo "</td></tr>";
    }

 echo "</table>";
}

function consultaind($id_empleado)
{
   $db = new BDSQL();
   $consulta = $db->consulta("select * from empleado where id_empleado ='".$id_empleado."'");

echo '<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Información</title>
<link href="../css/styles.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                           <div class="card-header"><h3 class="text-center font-weight-light my-4">Información del empleado</h3></div>
                           <div class="card-body">
                            
                              <table border="3" class="table">
                              <thead>
                              <tr>
                              <th>Clave empleado</th>
                              <th>Apellidos</th>
                              <th>Nombre</th>
                              <th>Usuario</th>
                              <th>Teléfono</th>
                              <th>Email</th>
                              <th>Contraseña</th>
                              </tr>
                              </thead>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </main>
      </div>
</div>'; 


    while($resultados = $db->fetch_array($consulta)) 
    {
      echo '<tr><td>';
      echo $resultados["id_empleado"];
      echo '</td><td>';
      echo $resultados["apellidos"];
      echo "</td><td>";
      echo $resultados["nombre"];
      echo "</td><td>";
      echo $resultados["nombreUS"];
      echo "</td><td>";
      echo $resultados["telefono"];
      echo "</td><td>";
      echo $resultados["correo"];
      echo "</td><td>";
      echo $resultados["passEmp"];
      echo "</td></tr>";
    }

 echo "</table>";
}

function insertar($apellidos,$nombre,$nombreUS,$telefono,$correo,$passEmp)
{
   $db = new BDSQL();
   $consulta = $db->consulta("insert into empleado (apellidos,nombre,nombreUS,telefono,correo,passEmp)values ('".$apellidos."','".$nombre."','".$nombreUS."','".$telefono."','".$correo."','".$passEmp."')");

}

function actualizar($id_empleado,$apellidos,$nombre,$nombreUS,$telefono,$correo,$passEmp)
{
   $db = new BDSQL();
   $consulta = $db->consulta("update empleado set apellidos='".$apellidos."',nombre='".$nombre."',nombreUS='".$nombreUS."',telefono='".$telefono."',correo='".$correo."',passEmp='".$passEmp."' where id_empleado= '".$id_empleado."'");
   

}

function borrar($id_empleado)
{
   $db = new BDSQL();
   $consulta = $db->consulta("delete from empleado where id_empleado ='".$id_empleado."'");
}

//<link href="../css/styles.css" rel="stylesheet" />
//"update re set paterno='".$pat."',materno='".$mat."',usuario='".$usuario."',password='".$password."' where correo = '".$correo."'");

?>