<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pago</title>
    <style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
}

form {
  margin: 50px auto;
  max-width: 500px;
  padding: 20px;
  border: 1px solid #ccc;
}

h2 {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="number"],
select {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="radio"] {
  margin-right: 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

.payment-methods {
  margin-bottom: 20px;
}

.payment-methods label {
  display: inline-block;
  margin-right: 10px;
}

.card-details {
  display: none;
}

.show-card-details {
  display: block;
}

.card-details label {
  display: block;
  margin-bottom: 10px;
}

.card-details input[type="text"],
.card-details input[type="number"] {
  width: 48%;
  margin-right: 4%;
}

.payment-successful {
  margin-top: 20px;
  padding: 10px;
  background-color: #d4edda;
  color: #155724;
  border: 1px solid #c3e6cb;
  border-radius: 4px;
}

      </style>
</head>
<body>
  <center>
    <h1>Formulario de Pago</h1>
</center>   
    <form action="procesar_pago2.php" method="post">
        <legend>Información de pago:</legend>
            <label for="actividad">Actividad:</label>
            <input type="text" name="actividad" style="text-align: center;" value="<?php echo'Bublble football'?>" readonly><br><br>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php if(isset($_SESSION['usersId'])){
                  echo explode(" ", $_SESSION['usersName'])[0];
              }else{
                  echo 'Guest';
              } 
              ?>" style="text-align: center;" readonly><br><br>
            <label for="tipo_pago">Tipo de pago:</label>
            <select name="tipo_pago" id="tipo_pago" required>
              <option value="">Elije el método de pagament</option>
                <option value="visa">Visa</option>
                <option value="mastercard">Mastercard</option>
                <option value="efectivo">Efectivo</option>
            </select>
            <br><br>
            <div id="informacion_tarjeta" style="display:none;">
                <label for="nombre_titular">Nombre del titular:</label>
                <input type="text" name="nombre_titular" pattern="[A-Za-z]+" required>
                <br><br>
                <label for="numero_tarjeta">Número de tarjeta: (XXXXX-XXXXX-XXXXX-XXXXX)</label>
                <input type="text" name="numero_tarjeta" pattern="\d{5}-\d{5}-\d{5}-\d{5}" required>
                <br><br>
                <label for="fecha_vencimiento">Fecha de vencimiento:</label>
                <input type="date" name="fecha_vencimiento" required>
                <br><br>
                <label for="codigo_seguridad">CVC:</label>
                <input type="text" name="codigo_seguridad" maxlength="4" minlength="3" required pattern="^[0-9]+$" required>
            </div>
        <br>
        <input type="submit"  value="Pagar">
    </form>

    <script>
        const tipoPago = document.getElementById('tipo_pago');
        const informacionTarjeta = document.getElementById('informacion_tarjeta');

        tipoPago.addEventListener('change', (event) => {
            if (event.target.value === 'efectivo') {
                informacionTarjeta.style.display = 'none';
            } else {
                informacionTarjeta.style.display = 'block';
            }
        });

        
  const form = document.querySelector('form');
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const tipoPago = document.getElementById('tipo_pago');
    if (tipoPago.value === 'efectivo') {
      alert('Pago en efectivo');
    } else {
      alert('Pago completado'); 
    }
    form.submit();
  });

  

</script>

</body>
</html>
