<?php
$id_reserva = $_POST["id_reserva"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$nombre = $_POST["nombre"];

$sql = "UPDATE reservas SET dia='$fecha', hora='$hora', nombre='$nombre' WHERE id=$id_reserva";
mysqli_query($conn, $sql);
?>