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
    include_once 'header.php'
?>
  <center> 
    <br><br><br>
<form method="post" action="reservar.php" style="width: 400px;">
  <label for="actividad">Targeta:</label>
  <input type="text" name="actividad" style="text-align: center;" value="<?php echo'Targeta VIP'?>" readonly>
    <label for="nombre">Nombre:</label>
  <input type="text" name="nombre" value="<?php if(isset($_SESSION['usersId'])){
        echo explode(" ", $_SESSION['usersName'])[0];
    }else{
        echo 'Guest';
    } 
    ?>" style="text-align: center;" readonly>


  
  <input type="submit" value="Comprar">
</form>
  </center>

  <a href="../pruebasbot/pruebasbot/index.php"><img src="../asistente.png" align="left" height="100px" width="100px"></a>

</body>
</html>
