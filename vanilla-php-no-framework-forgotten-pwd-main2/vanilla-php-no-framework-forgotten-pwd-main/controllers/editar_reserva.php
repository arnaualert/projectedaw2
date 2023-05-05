<?php
// Obtener la reserva que se va a editar
$id = $_GET["id"];
$sql = "SELECT * FROM reservas WHERE id = $id";
$resultado = mysqli_query($conn, $sql);
$reserva = mysqli_fetch_assoc($resultado);

// Mostrar un formulario con los detalles de la reserva que se va a editar
echo "<form method='POST' action='guardar_reserva.php'>";
echo "<input type='hidden' name='id' value='" . $reserva["id"] . "'>";
echo "Dia: <input type='date' name='dia' value='" . $reserva["dia"] . "'><br>";
echo "Hora: <input type='time' name='hora' value='" . $reserva["hora"] . "'><br>";
echo "Nombre: <input type='text' name='nombre' value='" . $reserva["nombre"] . "'><br>";
echo "<input type='submit' value='Guardar'>";
echo "</form>";


?>