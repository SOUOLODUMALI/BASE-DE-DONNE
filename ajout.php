<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=ajout.css">
    <title>Document</title>
</head>
<body>
    

<?php


include("./connexion.php");

$conn=mysqli_connect('localhost','root','','base_donne_eauf')or die("error");


if(isset($_POST["submit"])) {
    $nom=htmlentities(trim( $_POST["nom"]));
    $prenom=htmlentities(trim($_POST["prenom"]));
    $date_de_naissance=htmlentities(trim($_POST["date_de_naissance"]));
    $email=htmlentities(trim($_POST["email"]));
    $numero_de_telephone=htmlentities(trim($_POST["numero_de_telephone"]));
    $date_d_abonnement=htmlentities(trim($_POST["date_d_abonnement"]));
if(!empty($nom) AND !empty($prenom) AND !empty($date_de_naissance)
AND !empty($email) AND !empty($numero_de_telephone) AND !empty($date_d_abonnement)){




    $query='INSERT INTO auf(nom, prenom, date_de_naissance, email, numero_de_telephone, date_d_abonnement)
     VALUES ("'.$nom.'","'.$prenom.'","'.$date_de_naissance.'","'.$numero_de_telephone.'","'.$email.'","'.$date_d_abonnement.'")'
     or die('erreur:'.mysql_error());
    
    $res=mysqli_query($conn, $query);
    
        
       echo "ok!";
    header("location: index.php");
  }
   else  echo "erreur, un champs est vide";
} 

?>
</body>
</html>