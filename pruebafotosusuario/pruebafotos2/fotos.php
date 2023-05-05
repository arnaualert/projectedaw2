<!DOCTYPE html>
<html>
<head>
	<title>Galería de Fotos</title>
</head>
<body>
<?php 
    include_once 'header.php'
?>
<br><br>
	<h1>Galería de Fotos</h1>
	
	<div class="galeria">

    </div>
</body>
</html>

<?php
if ($_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
    $nombre = $_FILES["archivo"]["name"];
    $ruta = "fotos/" . $nombre;
    move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
}
?>



<?php

$fotos = scandir("fotos/");
for ($i = 2; $i < count($fotos); $i++) {
    echo "<div style=' margin: 20px; height: 450px; width: 450px; float:left;' class='foto'>";
    echo "<img style=' height: 450px; width: 450px;' src='fotos/" . $fotos[$i] . "'>";
    echo "</div>";
}
?>
<a href="../../pruebasbot/pruebasbot/index.php"><img src="../../asistente.png" align="left" height="100px" width="100px"></a>
