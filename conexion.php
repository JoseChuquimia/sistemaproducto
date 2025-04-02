<?php
$servername="localhost";//servidor
$database="DBpanaderia";//nombre de la base de datos creado
$username="root";//nombre del usuario de la base de datos 
$password="";//contraseña en este caso es vacio
$port=3307;// puerto
//linea para conectar a una base de datos
//usando libreria mysqli
$conn= new mysqli($servername,$username,$password,$database,$port);
//verificar la conexion
if($conn->connect_error)
{
    die("error de conexion" .$conn->connect_error);
}
else
{
    echo "conexion exitosa";
}
?>