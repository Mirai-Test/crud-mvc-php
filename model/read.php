<?php
include "../config/conexion.php";

$sql = "SELECT * from alumnos";
$res = mysqli_query($conexion, $sql);

$datos = array();
while ($fila = mysqli_fetch_assoc($res)) {
    $datos[] = $fila;
}