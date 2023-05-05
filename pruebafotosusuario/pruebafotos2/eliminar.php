<?php
if (isset($_POST["foto"])) {
    $nombre = $_POST["foto"];
    $ruta = "fotos/" . $nombre;
    unlink($ruta);
    echo "<script>alert('Foto Eliminada correctament')</script> ";
}

header("Location: fotosadminlogin.php");
exit;
?>



