<?php 
include './conexion.php';
$conexion = conexion();
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];

$sql = "INSERT INTO t_autos(
    nombre,
    marca,
    modelo,
    color)
    VALUES (
        '$nombre',
        '$marca',
        '$modelo',
        '$color')";

$respuesta = mysqli_query($conexion, $sql);
if ($respuesta) {
    header('location:../index.php');
}else{
    echo 'No se pudo agregar el vehiculo';
}

?>