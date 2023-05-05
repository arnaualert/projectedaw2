<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="cover.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
 
<body>
<?php 
    include_once 'header4.php'
?>
<br><br><br><br>  
<center><img src="logo.png"></center>
<br><br><br>
<center><p style="padding: 130px;">La nostre empresa es dedica a ofrerir diferents serveis com <br>
  poder fer reunions de empresa, fer charles coach i fer activitas del team building</p>
 <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2986.485464962891!2d1.8720385513779094!3d41.537084879149084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a48bad943435eb%3A0xe689850f99ec8254!2sPasseig%20del%20Castell%2C%207%2C%2008292%20Esparreguera%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1673969893966!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</center> 
<a href="pruebasbot/pruebasbot/index3.php"><img src="asistente.png" align="left" height="100px" width="100px"></a>
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

<link rel="stylesheet" href="index.js">
</body>
</html>
