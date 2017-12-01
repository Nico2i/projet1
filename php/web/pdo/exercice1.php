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
$sql = "SELECT u_id, u_identifiant as identifiant, u_motdepasse, u_email FROM utilisateurs";
$stmt = $pdo->query($sql);
while($ligne = $stmt->fetch())
{
    echo "j'ai trouvél'utilisateur :".$ligne['identifiant']."<br />";
}