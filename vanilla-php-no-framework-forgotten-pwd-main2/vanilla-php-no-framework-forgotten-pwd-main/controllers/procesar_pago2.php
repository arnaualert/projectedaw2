<?php
if (isset($_POST['metodo_pago'])) {
    $metodo_pago = $_POST['metodo_pago'];
    header('Location:/a/projectedaw2/index.html .php?mensaje=' . $metodo_pago);
} else {
    header('Location:/a/projectedaw2/index.html?mensaje=error');
}
?>
