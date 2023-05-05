<?php
if ($_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
    $nombre = $_FILES["archivo"]["name"];
    $ruta = "fotos/" . $nombre;
    move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta);
}
?>



<?php

echo " <a href='fotos2.php'>Añadir Imatges</a><br><br>";
$fotos = scandir("fotos/");
for ($i = 2; $i < count($fotos); $i++) {
    echo "<div style='border: 1px solid black; margin: 20px; height: 450px; width: 450px; float:left;' class='foto'>";
    echo "<img style=' height: 450px; width: 450px;' src='fotos/" . $fotos[$i] . "'>";
    echo "<form action='eliminar.php' method='post'>";
    echo "<input type='hidden' name='foto' value='" . $fotos[$i] . "'>";
    echo "<input type='submit' value='Eliminar'>";
    echo "</form>";
    echo "</div>";
}
?>

