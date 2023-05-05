<?php
$con = mysqli_connect("localhost", "arnau", "P@ssw0rd", "bd_luks_troplantair");

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$nombre = $_POST['nombre'];
$nombre_actividad = $_POST['actividad'];

if (in_array(date('m-d', strtotime($fecha)), array('12-24', '12-25', '12-31','01-05','23-06','09-04'))) {
  echo "<script>alert('Cerrado por festivo.');
  window.location.href = 'reservas.php';</script>";
  exit();
}
 
$hora_inicio = strtotime('8:00');
$hora_fin = strtotime('21:00');
$hora_seleccionada = strtotime($hora);
if ($hora_seleccionada < $hora_inicio || $hora_seleccionada > $hora_fin) {
  echo "<script>alert('Solo se permiten reservas entre las 8:00 y las 21:00.');
  window.location.href = 'reservas.php';</script>";
  exit();
}

$hora_anterior = date('H:i:s', strtotime('-1 hour', strtotime($hora)));
$hora_posterior = date('H:i:s', strtotime('+1 hour', strtotime($hora)));
$query = "SELECT * FROM reservas WHERE fecha = '$fecha' AND ((hora >= '$hora_anterior' AND hora <= '$hora') OR (hora >= '$hora' AND hora <= '$hora_posterior'))";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<script>alert('La fecha y hora ya están reservadas por otro usuario.');
              window.location.href = 'reservas.php';
        </script>";
} else {
  $query = "INSERT INTO reservas (fecha, hora, nombre, nombre_actividad) VALUES ('$fecha', '$hora', '$nombre', '$nombre_actividad')";
  mysqli_query($con, $query);
  echo "<script>alert('Reserva realizada correctamente.');
  window.location.href = 'pagament1.php';
</script>";
}

mysqli_close($con);
?>
