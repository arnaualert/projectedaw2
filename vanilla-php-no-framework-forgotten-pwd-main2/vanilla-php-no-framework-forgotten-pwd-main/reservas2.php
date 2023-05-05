<?php
   session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>


<?php
   include_once 'header3.php'
?>
 <center>
   <br><br><br>
<form method="post" action="reservar2.php" style="width: 400px;">
 <label for="actividad">Actividad:</label>
 <input type="text" name="actividad" style="text-align: center;" value="<?php echo'Risoterapia'?>" readonly>
   <label for="nombre">Nombre:</label>
 <input type="text" name="nombre" value="<?php if(isset($_SESSION['usersId'])){
       echo explode(" ", $_SESSION['usersName'])[0];
   }else{
       echo 'Guest';
   }
   ?>" style="text-align: center;" readonly>


 <label for="fecha">Fecha:</label>
 <input type="date" name="fecha" style="text-align: center;" required>


 <label for="hora">Hora:</label>
 <input type="time" name="hora" style="text-align: center;" required>




  <input type="submit" value="Reservar">
</form>
 </center>




</body>
</html>
