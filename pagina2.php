<?php

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


if(mail('helasai480@gmail.com', $asunto, $mensaje)){
echo"mail emviado";
}else{
echo "se ha producido un error";
}

?>