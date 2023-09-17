<?php
$reservado = false;
$fecha = "";
$hora = "";
$cantidad = "";
$nombre = "";
if (
    !empty($_POST['fecha'])
    && !empty($_POST['hora'])
    && !empty($_POST['cantidad'])
    && !empty($_POST['nombre'])

) {

    $reservado = true;
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $cantidad = $_POST['cantidad'];
    $nombre = $_POST['nombre'];
    // Si está todo OK, asignar los valores a las variables php
    // Para mostrar los datos de reserva.    
}
?>