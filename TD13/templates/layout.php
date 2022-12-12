<?php session_start(); ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title><?= $title ?></title>
      <link href="style.css" rel="stylesheet" /> 
   </head>

   <body>
      <?= $content ?>

<?php // formulaire de connexion ?>

       <div align="center">
<form method ="POST">
<div>
    <label for="login">Login:</label>
        <input type="text"  style = "padding: 8px 12px ;"placeholder="Entrez votre login"  name="login"> <br> <br>
    <label for="mdp">Mot de passe:</label> 
        <input type="password" style = "padding: 8px 12px ;" placeholder="Entrez votre mot de passe"  name="mdp"> <br> <br> 
        <center> <input type="submit" value="Envoyer" name= "send_con"> </center> <br>

        <?php //echo   ?>
        
</div>

   </body>
</html>
