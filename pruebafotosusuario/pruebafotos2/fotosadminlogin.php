<?php

require("header4.php");
?>

<!DOCTYPE html>
<html>
<head>
    
	<title>Galería de Imatges</title>
</head>
<body>


	<form action="fotosadminlogin.php" method="post" enctype="multipart/form-data" style="margin: 20px;">
		<input type="file" name="archivo">
		<input type="submit" value="Pujar Imatge" onclick="alert('Imatge Pujada correctament')"><br><br>
	</form>
<br><br><br><br>
<center>
	<h1>Galería de Imatges</h1>
</center>

	
	
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
    echo "<div style='border: 1px solid black; margin: 20px; height:550px; width:550px; float:left;' class='foto'>";
    echo " <img style=' height:550px; width:550px;' src='fotos/" . $fotos[$i] . "'>";
    echo "<form action='eliminar.php' method='post'>";
    echo "<input type='hidden' name='foto' value='" . $fotos[$i] . "'>";
     ?> <input style='margin:5px;' type='submit' value="Eliminar" onclick="alert('Imatge eliminada correctament')"><?php
    echo "</form>";
    echo "</div>";
}

?>
<a href="../../pruebasbot/pruebasbot/index.php"><img src="../../asistente.png" align="left" height="100px" width="100px"></a>
