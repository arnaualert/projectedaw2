<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        .content {
            text-align: center;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.5em;
            line-height: 1.5;
            margin-bottom: 40px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 1em;
        }
    </style>
    <title>Editar Activitat</title>
</head>
<body>
<?php 
    include_once 'header4.php'
?>
    <form action=index.php method="GET">
    <input type="hidden" name=controlador value=Ocupacions>
    <input type="hidden" name=accion value=gravar_modificacio>
        <table>
            <?php 
                $item = $listado->fetch();
                foreach($item as $key=>$value) { ?>
                        <tr>
                            <td><label for=<?php echo $key ?>><?php echo $key ?></label></td>
                            <td><input type=text name=<?php echo $key ?> id=<?php echo $key ?> value="<?php echo $value ?>"></td>
                        </tr><?php
                    }
                 ?>
        </table>
        <input type="submit" value="Grabar dades">

        <table>
            <?php
            $item = $items->fetch();
            foreach($item as $key=>$value) { ?>
                <th><?php echo $key ?></th><?php
            }
            do { ?>
                <tr><?php
                foreach($item as $key=>$value) { ?>
                    <td><?php echo $value ?></td><?php

                } ?>
            <td><a href="index.php?controlador=Ocupacions&accion=formulario_modificar&param=<?php echo $item["id_activitat"] ?>">Editar </a></td><a href="">Eliminar</a></td>
                </tr> <?php
            } while($item = $items->fetch()); ?>
        </table>




    </form>
</body>
</html>