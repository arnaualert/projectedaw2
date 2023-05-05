<?php
if (isset($_POST['metodo_pago'])) {
    $metodo_pago = $_POST['metodo_pago'];
    header('Location: pagament1.php?mensaje=' . $metodo_pago);
} else {
    header('Location: pagament1.php?mensaje=error');
}
?>
