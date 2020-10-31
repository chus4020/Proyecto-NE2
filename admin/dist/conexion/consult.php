<?php

include("funciones.php");

if(@$_POST["consultar"]=="cons")
{
    consultaind($_POST["clavemp"]);
    
}
elseif (@$_POST["todos"]=="consreg") {
    consultageneral($_POST["clavemp"]);
}
elseif (@$_POST["borrar"]=="borra") {
    borrar($_POST["clavemp"]);
    echo "<script> alert('Registro de empleado eliminado');
   location.href= '../consulta.html';
   </script> ";
}


?>