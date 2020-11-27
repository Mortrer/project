<?php
include 'conexion.php';
//variables de los datos
$serial = $_POST["serial"]
$tipo = $_POST["tipo"]
$marca = $_POST["marca"]
$modelo = $_POST["modelo"]
$unidades = $_POST["unidades"]
$cantidad = $_POST["cantidad"]
//insercion de datos
$insertar = ="Insert into inventario values('$serial', '$tipo', '$marca', '$modelo', '$unidades', $cantidad);";
$resultado = mysqli_query($conexion, $insertar);
echo $serial;
echo $tipo;
echo $marca;
echo $modelo;
echo $unidades;
echo $cantidad;
if (!$resultado){
    echo 'Error';
}else{
    echo 'registrado';
}
mysqli_close();
?>