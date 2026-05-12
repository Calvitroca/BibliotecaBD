<?php
//Equipo3
$host     = "localhost";
$port     = "5432";
$dbname   = "Biblioteca";
$user     = "postgres";
$password = "12345678";

$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conexion) {
    die("Error: No se pudo conectar a la base de datos.");
} else {
    echo "Conexión exitosa a la base de datos Biblioteca.";
}
?>
