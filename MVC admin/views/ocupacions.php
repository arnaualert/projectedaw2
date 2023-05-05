<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
<?php 
    include_once 'header4.php'
?>
    <h2 id="titol">Activitats Administrador</h2>
    <table  border="1">
        <thead><tr style="border:10px;"><?php
        $item = $listado->fetch();
        foreach($item as $key=>$value) { ?>
            <th style="background-color: #97cba9; border:10px;"><?php echo $key ?></th><?php
        } ?>
            <th style="background-color: #97cba9; border:10px;">Editar Activtats</th>
        </tr>
<?php 
    do { ?>  
        <tr><?php
            foreach($item as $key=>$value) { ?>
                <td style="background-color: #bbe4e9"><?php echo $value ?></td><?php
            } ?>
            <td><a style="text-decoration:none; color:black;" href="index.php?controlador=Ocupacions&accion=formulario_modificar&param=<?php echo $item["id_sub_activiat"] ?>"><button style="background-color: #e7eaf6   line-height: 50px;
  text-align: center;
  width: 138px;
  height: 55px;">Editar Activitats</button></a></td>
        </tr> <?php
        } while($item = $listado->fetch());  ?>
    
    </table>   

</body>
</html>