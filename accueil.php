<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil.css">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>Page d'accueil</title>
</head>
<body>
    <div class="col titre">
    LOGICIEL DE GESTION DES ABONNES AUF
    </div>
    <div class="col formulaire">
        <img src="./images/logo auf.jpg" alt="">
    </div>
    <div class="container">
        <div class="col">
            <legend for="">email</legend>
            <input type="text" name="identifiant" id=""> <br> <br>
            <legend for=""> mot de passe</legend>
            <input type="password" name="mot de passe" id=""> <br> 
            <br>
            <a href="./enregistrement.php" ><input   type="submit" value="Enregister"></a>


        </div>
    </div>


 <!-- if($_POST['mot_de_pass']==password_verify ($_POST['mot_de_pass'],$mot_de_pass)){ -->
     

</body>
</html>