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
                                            
                                            $result = mysqli_query($con,"SELECT * FROM articulo");

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
                                                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Información artículos</h3></div>
                                                                    <div class="card-body">
                                                                        
                                                                        <table border="3" class="table">
                                                                        <thead>
                                                                        <tr>
                                                                        <th>Clave artículo</th>
                                                                        <th>Nombre</th>
                                                                        <th>Precio</th>
                                                                        <th>Color</th>
                                                                        <th>Existencia</th>
                                                                        <th>Descripción</th>
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
                                                echo $row["id_articulo"];
                                                echo '</td><td>';
                                                echo $row["nombre_articulo"];
                                                echo "</td><td>";
                                                echo $row["precio"];
                                                echo "</td><td>";
                                                echo $row["color"];
                                                echo "</td><td>";
                                                echo $row["existencia"];
                                                echo "</td><td>";
                                                echo $row["descripción"];
                                                echo "</td></tr>";
                                                }

                                            echo "</table>";
                                        
                                        ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
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
                                            
                                            $result = mysqli_query($con,"SELECT * FROM articulo_categoria");

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
                                                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Categorías</h3></div>
                                                                    <div class="card-body">
                                                                        
                                                                        <table border="3" class="table">
                                                                        <thead>
                                                                        <tr>
                                                                        <th>Clave</th>
                                                                        <th>Categoria</th>
                                                                        <th>Tipo de Artículo</th>
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
                                                echo $row["id_categoria"];
                                                echo '</td><td>';
                                                echo $row["tipo_categoria"];
                                                echo '</td><td>';
                                                echo $row["tipo_articulo"];
                                                echo "</td></tr>";
                                                }

                                            echo "</table>";
                                        
                                        ?>


<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
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
                                            
                                            $result = mysqli_query($con,"SELECT * FROM articulo_visita");

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
                                                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Visitas registradas</h3></div>
                                                                    <div class="card-body">
                                                                        
                                                                        <table border="3" class="table">
                                                                        <thead>
                                                                        <tr>
                                                                        <th>Clave de visita</th>
                                                                        <th>Usuario</th>
                                                                        <th>Articulo</th>
                                                                        <th>Fecha</th>
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
                                                echo $row["id_visita"];
                                                echo '</td><td>';
                                                echo $row["id_usuario"];
                                                echo '</td><td>';
                                                echo $row["id_articulo"];
                                                echo '</td><td>';
                                                echo $row["fecha"];
                                                echo "</td></tr>";
                                                }

                                            echo "</table>";
                                        
                                        ?>

<?php require_once "vistas/inferior.php"?>

