<?php require_once "vistas/superior.php"?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">TABLERO</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Información</li>
                        </ol>
                        
                         <div class="card mb-4">
                                        <?php
                                            $user="root";
                                            $pass="";
                                            $server="localhost";
                                            $db="dallim";
                                            $con=mysqli_connect($server,$user,$pass,$db);
                                            // Check connection
                                            if (mysqli_connect_errno())
                                            {
                                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                            }
                                            
                                            $result = mysqli_query($con,"SELECT * FROM empleado");

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
                                                                        <th>Correo</th>
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


                                                while($row = mysqli_fetch_array($result)) 
                                                {
                                                echo '<tr><td>';
                                                echo $row["id_empleado"];
                                                echo '</td><td>';
                                                echo $row["apellidos"];
                                                echo "</td><td>";
                                                echo $row["nombre"];
                                                echo "</td><td>";
                                                echo $row["nombreUS"];
                                                echo "</td><td>";
                                                echo $row["telefono"];
                                                echo "</td><td>";
                                                echo $row["correo"];
                                                echo "</td><td>";
                                                echo $row["passEmp"];
                                                echo "</td></tr>";
                                                }

                                            echo "</table>";
                                        
                                        ?>
                                    
                                    <form method="POST" name="work2" action="conexion/consult.php">

                                    <div class="form-row">                                            
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputLastName">Clave</label>
                                            <input class="form-control py-4" name="clavemp" id="clavemp" type="number" placeholder="Ingresa clave de empleado" />
                                        </div>
                                    </div>
                                    <div class="form-group">                                              
                                        <button type="submit" class="btn btn-primary btn-block" name="consultar" value="cons" id="cons">Consultar empleado</button>
                                    </div>
                                    <div class="form-group">                                              
                                        <button type="submit" class="btn btn-primary btn-block" name="borrar" value="borra" id="delete">Borrar registro de empleado</button>
                                    </div>
                                    </form>
                                    
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Dallim Store 2020</div>
                        </div>
                    </div>
                </footer>
            </div>

            <?php require_once "vistas/inferior.php"?>