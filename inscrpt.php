<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="inscrip.css">
    <title>inscription</title>
</head>
<body>
<header>
        LOGICIEL DE GESTION DES ABONNES DE L'AUF 
</header> 
<div class="col formulaire">
        <img src="./images/logo auf.jpg" alt="">
    </div> 
<div class="admin">
  <strong> BIENVENU CHER ADMINSTRATEUR</strong> <br> <br>
    Veuillez VOUS INSCRIRE
</div>
<?php
            include("./connexion.php");
            ?>
<div class="form">
    <div class="container">
        <div class="col">
            <legend for="">Nom</legend>
            <input type="text" name="identifiant" id=""> <br> <br>
            <legend for="">Prenom</legend>
            <input type="text" name="mot de passe" id=""> <br> <br>
            <legend for="">Email</legend>
            <input type="text" name="mot de passe" id=""> <br> <br>
            <legend for=""> Mot de passe</legend>
            <input type="password" name="mot de passe" id=""> <br> <br>

            <a href="./accueil.php" ><input class="input"  type="submit" value="Enregistrer"></a>
            </div>   
        </div>
        
    </div>
        

</body>
</html>