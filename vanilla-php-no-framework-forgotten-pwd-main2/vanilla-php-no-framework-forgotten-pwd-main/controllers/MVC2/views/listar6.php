<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MVC - Modelo, Vista, Controlador</title>
</head>
<body>
<table border="1">
    <tr>
        <th>ID Preferncia</th>
        <th>Preferencia</th>
        <th>Nom</th>

    </tr>
    <?php
    // $listado es una variable asignada desde el controlador ItemsController.
    while($item = $listado6->fetch())
    {
    ?>
    <tr>
        <td><?php echo $item['id_preferencia']?></td>
        <td><?php echo $item['prefencia']?></td>
        <td><?php echo $item['nom']?></td>



    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>