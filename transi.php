<?php
     include("./connexion.php");
     
$conn=mysqli_connect('localhost','root','','base_donne_eauf')or die("error");


if(isset($_POST["submit"])) {
    $nom=htmlentities(trim( $_POST["nom"]));
    $prenom=htmlentities(trim($_POST["prenom"]));
    $email=htmlentities(trim($_POST["email"]));
    $mot_de_pass=htmlentities(trim($_POST["mot_de_pass"]));
if(!empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($mot_de_pass)){




    $query='INSERT INTO admin(nom, prenom, email, mot_de_pass)
     VALUES ("'.$nom.'","'.$prenom.'","'.$email.'","'.$mot_de_pass.'")'
     or die('erreur:'.mysql_error());
     if($res){
         $passwordHash = $res['mot_de_pass'];
         if(password_verify($mot_de_pass,$passwordHash)){
             
         
     
    
    $res=mysqli_query($conn, $query);
    
        
       echo "ok!";
    header("location: index.php");
  }
   else  echo "erreur, un champs est vide";
} 
}
       }  
     
?>