<?php
if (isset($_POST['pseudo']) and isset($_POST['mdp']))
{
    echo $_POST['pseudo'];
    echo ' ';
    echo $_POST['mdp'];
    echo '</br>';
}

if (isset($_POST['mdp']) and $_POST['mdp']!=2020){
    echo "Mauvais couple identifiant/mot de passe";
    echo "</br>";
    echo '<a href="connexion.php" > Connexion </a>';
}

else {
    $_SESSION['id']= $_POST['pseudo'];
    header('Location: mini-site-routing.php');
}

?>    