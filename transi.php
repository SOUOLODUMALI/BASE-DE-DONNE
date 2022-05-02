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
    $email=htmlentities(trim($_POST["email"]));
    $mot_de_pass=password_hash($_POST["mot_de_pass"],PASSWORD_DEFAULT);
    $mot_de_pass=md5($mot_de_pass);

   

    

    if(!empty($nom) AND !empty($prenom)
AND !empty($email) AND !empty($mot_de_pass)){
   
    $query='INSERT INTO admins(nom, prenom,  email , mot_de_pass)
     VALUES ("'.$nom.'","'.$prenom.'","'.$email.'","'.$mot_de_pass.'")'
     or die('erreur:'.mysql_error());
    
    $res=mysqli_query($conn, $query);
    
        
       echo "ok!";
       header("location: ./accueil.php");
    
}
   else  echo "erreur, un champs est vide";
  
}

?>
</body>
</html>