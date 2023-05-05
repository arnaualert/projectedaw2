<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MVC - Modelo, Vista, Controlador - Jourmoly</title>
</head>
<body>
<table border="1">
    <tr><?php 
    $item = $listadoo2->fetch();
    foreach($item as $key=>$value) { ?> 
                <th><?php echo $key ?></th><?php
    } ?>
    </tr>
    <tr><?php
        foreach($item as $key=>$value) { ?>
            <th><?php echo $value ?></th><?php
        } ?>
    </tr>
    
    <tr><?php
        foreach($item as $key=>$value) { ?>
            <th><?php echo $value ?></th><?php
        } ?>
    </tr>
</table>

<table border="1">
    <tr><?php 
    $item = $listadoo2->fetch();
    foreach($item as $key=>$value) { ?> 
                <th><?php echo $key ?></th><?php
    } ?>
    </tr>
    <tr><?php
        foreach($item as $key=>$value) { ?>
            <th><?php echo $value ?></th><?php
        } ?>
    </tr>
    
    <tr><?php
        foreach($item as $key=>$value) { ?>
            <th><?php echo $value ?></th><?php
        } ?>
    </tr>
</table>
</body>
</html>