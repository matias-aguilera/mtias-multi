<?php
require_once("conexion.php");



//recibo datos
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


$conectar=conn();//ejecuta conexion
$sql="INSERT INTO  tarea1 (nombre, apellido, imagen)
VALUES ('$nombre','$apellido', '$imagen')";
$result = mysqli_query($conectar, $sql) or trigger_error("query failed! sql-error" .mysqli_error($conectar), E_USER_ERROR);



?>