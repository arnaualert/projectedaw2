<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
    <link rel="stylesheet" href="./style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<script>
    $(function(){
      $(window).on('load resize',function(){
        if(window.matchMedia("(max-width:960px)").matches){
          $(".level-2").show();
        }else{
          $(".level-1 > li").hover(function(){
            $(this).find("ul").slideDown();
          },
          function(){
            $(this).find("ul").slideUp();
          });         
        };
      });
    
      $("#menu-btn").click(function(){
        $(".level-1").slideToggle();
      });
    
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><div id="level-gnav">
        <div id="menu-btn">
          <i class="blogicon-reorder"></i>
        </div>
        <ul class="level-1">
          <li><a href="../../index4.php">Home</a></li>
          <li><a href="../../MVC admin/index.php?controlador=Ocupacions&accion=ocupacions">Editar Activitas <i class="blogicon-chevron-down"></i></a>
          </li>
          <li><a href="#">Fotos</a></li>
          <li><a onclick="alert('El admin no pot comprar una targeta')">Targeta</a></li>
       
          <li><a href="./vanilla-php-no-framework-forgotten-pwd-main/controllers/Users.php?q=logout">
             <?php if(isset($_SESSION['usersId'])){
        echo explode(" ", $_SESSION['usersName'] )[0] ;

    }?></a></li>
        </ul>
  </div>