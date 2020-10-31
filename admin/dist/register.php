<?php

include("conexion/guardar.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro Administrador</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de empleados</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="conexion/guardar.php">
                                            <div class="form-row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Apellido(s)</label>
                                                        <input class="form-control py-4" name="apellidos" id="inputLastName" type="text" placeholder="Ingresa tus apellidos" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Nombre</label>
                                                        <input class="form-control py-4" name="nombre" id="inputFirstName" type="text" placeholder="Ingresa tu nombre" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Usuario</label>
                                                        <input class="form-control py-4" name="usuario" id="inputFirstName" type="text" placeholder="Ingresa tu nombre de usuario" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputphone">Telefono</label>
                                                        <input class="form-control py-4" name="telefono" id="inputphone" type="text" placeholder="Ingresa numero telefónico" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputAddres">Dirección</label>
                                                        <input class="form-control py-4" name="direccion" id="inputAddress" type="text" aria-describedby="emailHelp" placeholder="Ingresa tu dirección de correo" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Contraseña</label>
                                                        <input class="form-control py-4" name="contrasena" id="inputPassword" type="password" placeholder="Ingresa una contraseña" />
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block" id="enviar">Crear cuenta</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.html">¿Ya tienes una cuenta? Ingresa</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Dallim Store 2020</div>
                            <div>
                                <a href="#">Politicas de privacidad</a>
                                &middot;
                                <a href="#">Terminos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
