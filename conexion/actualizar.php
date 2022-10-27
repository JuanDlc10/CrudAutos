<?php
include "./conexion.php";
$conexion = conexion();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$sql = "UPDATE t_autos SET nombre = '$nombre',
                                marca = '$marca',
                                modelo = '$modelo',
                                color = '$color' 
                                WHERE id = '$id'";
    $respuesta = mysqli_query($conexion,$sql);
    if($respuesta){
        header('location:../index.php');
    }else{
        echo 'No se pudo actualizar';
    }
?>