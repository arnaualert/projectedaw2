<?php 
    include_once 'header2.php';
    include_once './helpers/session_helper.php';
?>

    <h1 class="header">Please Signup</h1>

    <?php flash('register') ?>

    <form method="post" action="./controllers/Users.php">
        <input type="hidden" name="type" value="register">
        <input type="text" name="usersName" 
        placeholder="Full name...">
        <input type="text" name="usersEmail" 
        placeholder="Email...">
        <input type="text" name="usersUid" 
        placeholder="Username...">
        <input type="password" name="usersPwd" 
        placeholder="Password...">
        <input type="password" name="pwdRepeat" 
        placeholder="Repeat password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <a href="../../pruebasbot/pruebasbot/index.php"><img src="../../asistente.png" align="left" height="100px" width="100px"></a>

