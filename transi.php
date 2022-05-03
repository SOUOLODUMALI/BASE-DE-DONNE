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
    
    $nom=( $_POST["nom"]);
    $prenom=($_POST["prenom"]);
    $email=($_POST["email"]);
   $mot_de_pass=($_POST["mot_de_pass"]);
   $mot_de_pass2=($_POST["mot_de_pass2"]);
    
    


if($mot_de_pass == $mot_de_pass2 ){
 echo "ok";
 if(!empty($nom) AND !empty($prenom)
 AND !empty($email) AND !empty($mot_de_pass) AND !empty($mot_de_pass2)){
    
     $query=" INSERT INTO admins ( nom, prenom,  email , mot_de_pass)
      VALUES ( '$nom', '$prenom', '$email', md5('$mot_de_pass'))";
      
      $res=mysqli_query($conn, $query);
    
     
         
       echo "ok!";
  
     
 }

    header("location: ./accueil.php");  
   exit;
}
   
else{
    echo"erreur sur le mot de pass";
    
    header("location: ./inscrpt.php"); 
    exit;
} 
}    


?>
</body>
</html>