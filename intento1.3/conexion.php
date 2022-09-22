<?php
//conexion para bd

function conn(){

    $host = "localhost";
    $user ="root";
    $pass="";
    $db="tarea";

    $conexion= mysqli_connect($host, $user,$pass,$db);
    return $conexion;


     
}



?>