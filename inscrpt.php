
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
       <form action="./transi.php" method="post">
           <legend for="">nom</legend>
            <input type="text" name="nom" id=""> <br> <br>
            <legend for="">prenom</legend>
            <input type="text" name="prenom" id=""> <br> <br>
            <legend for="">email</legend>
            <input type="text" name="email" id=""> <br> <br>
            <legend for=""> mot_de_pass</legend>
            <input type="password" name="mot_de_pass"> <br> <br>
            <legend for="">confirme le mot_de_pass</legend>
            <input type="password" name="mot_de_pass2"> <br> <br>
            <?php
                    if(isset($non)){
                        echo "<div class='alert alert-danger'>
                        <strong>Erreur!</strong> les mots de passe ne sont pas identiques
                        </div>";
                    }
                    ?>
            <input   type="submit" value="Enregistrer" name="submit">  
          <a href="./accueil.php" ></a>
       
            </div>   
        </div>
        
    </div>
  
</body>
<script>
    let form =document.getElementById('form');
    form.addEventListener("submit", function (event) {
        if(form.mot_de_pass.value != form.mot_de_pass1.value){
            alert("les mots de passe ne sont pas identiques");
            form.mot_de_pass.value = "";
            form.mot_de_pass1.value = "";
            event.preventDefault();
            form.mot_de_pass.focus();
        }
    });

</script>     
</html>
