
<style>
*{
    font-size: 25px;
}
</style>
<?php
$connection = new mysqli("localhost", "root", "", "base_donne_eauf");

if ($connection ->connect_error) {
    echo "Connexion Echouer";
    
}

else {
    echo "Connexion Etablie avec succes";
}

?>