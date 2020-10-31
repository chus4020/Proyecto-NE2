<?php
//$dsn = 'mysql:host=localhost;dbname=clases';
/***********datos modificables para la conexion a la servidor mysql y a la base de datos 
host=ip/localhost etc
dbname=la base de datos
***/
$creedb = 'mysql:host=localhost;dbname=dallim';
$userdb = 'root';
$passdb = '';
/*Se utiliza el nuevo metodo de uso de conexion de base de datos.*/
try
{
    $db = new PDO($creedb, $userdb, $passdb);
    return $db;
}
catch(PDOException $e)
{
    echo '<p>!Error!: <mark>'.$e->getMessage().'</mark></p>';
    die();
}
