<?php
$hostDB = "localhost";
$userDB = "formation";
$passDB = "formation";
$nameDB = "formation";
$charset = "utf-8";

// data source name
$dsn = "mysql:host=$hostDB;dbname=$nameDB";
$pdo = new PDO($dsn, $userDB, $passDB);

// la requete SQl 
$email = "nicolas@cardon.fr";
$sql = "SELECT u_id, u_identifiant as identifiant, u_motdepasse, u_email FROM utilisateurs WHERE u_email= :email";

//préparer la requete pour éviter les injections sql
$stmt = $pdo->prepare($sql);
$stmt->execute(["email"=>$email]);
while($ligne = $stmt->fetch())
{
    echo "j'ai trouvél'utilisateur :".$ligne['identifiant']."<br />";
}