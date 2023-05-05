<?php
// Conexión a la base de datos
$con = mysqli_connect("localhost", "arnau", "P@ssw0rd", "bd_luks_troplantair");

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Seleccionar los datos de la tabla
$sql = "SELECT * FROM reservas";

// Ejecutar la consulta
$resultado = mysqli_query($conn, $sql);

// Obtener los datos de la tabla
if (mysqli_num_rows($resultado) > 0) {
    // Mostrar los datos
    while($fila = mysqli_fetch_assoc($resultado)) {
        echo "ID: " . $fila["id"] . "<br>";
        echo "Usuario: " . $fila["usuario"] . "<br>";
        echo "Fecha: " . $fila["fecha"] . "<br><br>";
    }
} else {
    echo "No se encontraron reservas.";
}

// Cerrar la conexión
mysqli_close($conn);
?>
