<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
<tr><?php
 $item = $listado22-> fetch();
 foreach($item as $key =>$value){?>
    <th><?php echo $key ?></th><?php
}?>
</tr>

<tr><?php
 $item = $listado-> fetch();
 foreach($item as $key =>$value){?>
    <th><?php echo $key ?></th><?php
}?>
</tr>
<?php
while($item = $listado22->fetch()){?>
    <tr><?php
 $item = $listado22-> fetch();
 foreach($item as $key =>$value){?>
    <th><?php echo $key ?></th><?php
}?>
</tr><?php
} ?>
</table>
    
</body>
</html>