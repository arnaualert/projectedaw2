<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<?php 
    include_once 'header3.php'
?>
    <div id="container" class="container">
        <div>
        <img src="bot.png" height="400vh" alt="Chatbot clipart"><xºbr>
        <h1 style="margin-left: 100px;">   Bot Juan</h1>
    </div>
         <div id="chat" class="chat">
          <div id="messages" class="messages">Hola en que le puedo ayudar <?php if(isset($_SESSION['usersId'])){
        echo explode(" ", $_SESSION['usersName'])[0];
    }else{
        echo 'Guest';
    } 
    ?></div>
          <input id="input" type="text" placeholder="Escribe tu pregunta..." autocomplete="off" autofocus="true" />
        </div>
      </div>
      <script src="index.js"></script> 
</body>
</html>