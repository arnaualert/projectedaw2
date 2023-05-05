<?php
if (isset($_POST['metodo_pago'])) {
    $metodo_pago = $_POST['metodo_pago'];
    header('Location: ../index3.php?mensaje=' . $metodo_pago);
} else {
    header('Location: ../index3.php?mensaje=error');
}
?>