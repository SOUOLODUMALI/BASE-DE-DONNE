<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/enregistrement.css">
    <title>Document</title>
</head>
<body>
 <header>
 <h3>
        LOGICIEL DE GESTION DES ABONNES DE L'AUF
    </h3>
 </header> 
<img src="./logo auf.jpg" alt="logo">
<?php

include("connexion.php");
?>

<div class="tout">
<form action="./ajout.php" method="post">
    <input type="text" name="nom" 
    id="nom" placeholder="Veuillez entrer votre nom">
    <br><br>
    <input type="text" name="prenom" 
    id="prenom" placeholder="Veuillez entrer votre prenom">
    <br><br>
    <input type="date" name="date de naissance" 
    id="date de naissance" placeholder="Veuillez entrer votre date de naissance">
    <br><br>
    <input type="number" name="numero de telephone" 
    id="numero de telephone" placeholder="Veuillez entrer votre numero de telephone">
    <br><br>
    <input type="text" name="email" 
    id="adresse e-mail" placeholder="Veuillez entrer votre adresse e-mail">
    <br><br>
    <input type="date" name="date_d_abonnement" 
    id="date d'abonnement" placeholder="Veuillez entrer votre date d'abonnement">
    <br><br>
    <input type="submit" value="ajouter" name="submit">
    <a href="accueil.php"></a>
</form>
</div>
?>
</body>
</html>