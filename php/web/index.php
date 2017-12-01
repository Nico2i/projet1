<?php
session_start();
if(isset($_SESSION['utilisateur']))
{
    $utilisateur = $_SESSION['utilisateur'];
    echo "Bonjour". $utilisateur['identifiant'];
}
else 
{
?>

<html>
    <head></head>
    <body>
        Vous n'êtes pas connectés ! Connectez vous !
        <form method="post" action="accueil.php">
            <input type="text" name="login" placeholder="Login" />
            <input type="password" name="mdp" placeholder="Mot de passe" />
            <input type="submit" name="connexion" value="Se connecter" />
        </form>
    </body>

</html>
<?php
}
?>