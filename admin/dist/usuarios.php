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
                                            
                                            $result = mysqli_query($con,"SELECT * FROM usuario");

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
                                                            <div class="row justify-content-right">
                                                                <div class="col-lg-12">
                                                                    <div class="card shadow-lg border-3 rounded-lg mt-5">
                                                                    <div class="card-header"><h3 class="text-center font-weight-light my-6">Clientes registrados</h3></div>
                                                                    <div class="card-body">
                                                                        
                                                                        <table border="3" class="table">
                                                                        <thead>
                                                                        <tr>
                                                                        <th>Clave usuario</th>
                                                                        <th>Nombre</th>
                                                                        <th>Apellido paterno</th>
                                                                        <th>Apellido materno</th>
                                                                        <th>Nombre usuario</th>
                                                                        <th>Correo</th>
                                                                        <th>Telefono</th>
                                                                        <th>Dirección</th>
                                                                        <th>Fecha nac</th>
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
                                                echo $row["id_usuario"];
                                                echo '</td><td>';
                                                echo $row["nombre"];
                                                echo "</td><td>";
                                                echo $row["ap_pat"];
                                                echo "</td><td>";
                                                echo $row["ap_mat"];
                                                echo "</td><td>";
                                                echo $row["nombre_usuario"];
                                                echo "</td><td>";
                                                echo $row["correo"];
                                                echo "</td><td>";
                                                echo $row["telefono"];
                                                echo "</td><td>";
                                                echo $row["direccion"];
                                                echo "</td><td>";
                                                echo $row["fecha_nac"];
                                                echo "</td></tr>";
                                                }

                                            echo "</table>";
                                        
                                        ?>

<?php require_once "vistas/inferior.php"?>