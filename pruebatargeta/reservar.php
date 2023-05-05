<?php

session_start();
// Conectarse a la base de datos (reemplaza los valores de host, usuario, contraseña y nombre de la base de datos con los tuyos)
$con = mysqli_connect("localhost", "root", "P@ssw0rd", "bd_luks_troplantair");

// Recoger los datos del formulario
$nombre = $_POST['nombre'];
$nombre_actividad = $_POST['actividad'];
$targeta = "yes";
$user = $_SESSION['usersName'];

// Consultar si la fecha y hora están disponibles
$query = "SELECT * FROM users WHERE usersName = '$user'";  

if ("SELECT * FROM users WHERE usersName = '$user'") {
  // La fecha y hora están disponibles, guardar la reserva en la base de datos
  $query = "INSERT INTO targeta (usersName,targeta) VALUES ('$user','$targeta')";
  echo "<script>alert('Targeta comprada correctamente por $user.');
  window.location.href = 'formulari.php';
</script>";
} else {

    echo "<script>alert('No se ha podido comprar la targeta, intentalo de nuevo.');
  window.location.href = 'reservas.php';
</script>";
}
$result = mysqli_query($con, $query);

// Cerrar la conexión a la base de datos
mysqli_close($con);
?>