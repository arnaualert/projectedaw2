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
<style>
  * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  height: 100vh;
  position: relative;
  background-color: silver;
}

nav ul {
  list-style: none;
  overflow: hidden;
  background-color: #f2f2f2;
}

nav ul li {
  font-size: 1.5em;
  -webkit-transition: background-color 0.5s;
  transition: background-color 0.5s;
  padding: 20px;
}

nav ul a:nth-child(1) {
  float: left;
}

nav ul a:nth-child(n+2) {
  float: right;
}

nav ul li:hover {
  background-color: #cccccc;
}

@media (max-width: 600px) {
  nav li {
    margin: unset !important;
    text-align: center;
    padding: 10px 0;
  }
  nav a {
    float: unset !important;
  }
  nav ul {
    overflow: unset !important;
  }
}

#index-text {
  color: black;
  text-align: center;
  margin-top: 60px;
  font-size: 4rem;
}

form {
  margin: 10px auto 0 auto;
  max-width: 600px;
  width: 100%;
  padding: 0 20px;
}

form input {
  width: 100%;
  outline: none;
  border: 1px solid black;
  margin: 10px 0;
  padding: 10px 10px 10px 5px;
}

form button {
  margin-top: 10px;
  padding: 10px 20px;
}

/*Remove Default Form Styling*/
button, input, select, textarea {
  font-family: inherit;
  font-size: 100%;
}

#footer {
  position: absolute;
  bottom: 0;
  left: 0;
  background-color: #f2f2f2;
  width: 100%;
}

#footer p {
  text-align: center;
  font-size: 1.5rem;
  padding: 30px 0;
}

@media (max-height: 800px) {
  #footer {
    position: static;
    margin-top: 400px;
  }
  #footer p {
    padding: 30px 0 200px 0;
  }
}

.header {
  text-align: center;
  margin-top: 20px;
}

.form-message {
  margin: 20px auto 0 auto;
  border-radius: 10px;
  text-transform: capitalize;
  max-width: 560px;
  width: 90%;
  height: 80px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.form-message p {
  text-align: center;
  font-size: 1.6rem;
}

.form-message-red {
  background-color: #ffb3b3;
  border: 2px solid #ff0000;
}

.form-message-green {
  background-color: lightgreen;
  border: 2px solid green;
}

.form-sub-msg {
  margin: 20px auto 0 auto;
  width: 90%;
  max-width: 560px;
  color: #00334d;
}

a, a:link, a:visited, a:hover, a:active {
  text-decoration: none;
  color: inherit;
}
/*# sourceMappingURL=style.css.map */


.btn-light,
.btn-light:hover,
.btn-light:focus {
  color: black;
  text-shadow: none; 
}





.cover-container {
  max-width: 42em;
}


.nav-masthead .nav-link {
  color: rgba(255, 255, 255, .5);
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 0rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

#level-gnav ul{
  padding-left:0;
}

#level-gnav{
 background:black;


}

#menu-btn{
 color:#fff;
 display:none;
}

.level-1{
 display:flex;
 flex-wrap: wrap;
 margin:0 auto;
 max-width:1200px;
 justify-content: center; 
}

.level-1 li{
 list-style: none;
 position:relative;
}

#level-gnav a{
 color:#fff;
 text-decoration: none;
 display:block;
 padding:15px 18px;
 font-size:16px;
}

#level-gnav a:hover{
 background:#777;
}


.level-2{
 position:absolute;
 background:#333;
 top:100%;
 left:0;
 display:none;
 z-index: 2;
 width:125%;
}



@media(max-width:960px){
 
 #menu-btn{
   display:block;
   padding-left:10%;
   padding-top:10px;
   padding-bottom:10px;
   text-align:left;
 }

 .level-1{
   display:none;
 }

 .level-2{
   position:static;
 }

 #level-gnav a{
   text-align:left;
 }

 #level-gnav .level-2 li a{
   padding-left:35px;
 }

}

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script><div id="level-gnav">
<div id="menu-btn">
        <i class="blogicon-reorder"></i>
      </div>
      <ul class="level-1">
        <li><a href="../../index.html">Home</a></li>
        <li><a href="#">Activitas <i class="blogicon-chevron-down"></i></a>
          <ul class="level-2">
            <li><a href="../../MVC2/index2.php">Team Bulding</a></li>
            <li><a href="../../MVC2/index3.php">Celebrecions i Reunions</a></li>
            <li><a href="../../MVC2/index5.php  ">Marketing</a></li>
            <li><a href="../../MVC2/index4.php">Charles Coach</a></li>
          </ul>
        </li>
        <li><a href="../../pruebafotosusuario/pruebafotos2/fotos.php">Fotos</a></li>
        <li><a onclick="alert('Inicia sessió')">Targeta</a></li>
        <li><a href="../../vanilla-php-no-framework-forgotten-pwd-main2/vanilla-php-no-framework-forgotten-pwd-main/signup.php">Registra-se</a></li>
        <li><a href="../../conf.login.html">Iniciar Sessió</a></li>
      </ul>
  </div>