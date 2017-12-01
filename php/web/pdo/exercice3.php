<?php
$hostDB = "localhost";
$userDB = "formation";
$passDB = "formation";
$nameDB = "formation";
$charset = "utf-8";
$user = array(
    "identifiant"=>"jerome",
    "email"=>"jerome@sourdin.fr",
    "motdepasse"=>"jerome"
);
// data source name
$dsn = "mysql:host=$hostDB;dbname=$nameDB";
$pdo = new PDO($dsn, $userDB, $passDB);

// la requete SQl 

$sql = "INSERT INTO utilisateurs(u_identifiant, u_motdepasse, u_email) VALUES (:identifiant, :motdepasse, :email)";

//préparer la requete pour éviter les injections sql
$stmt = $pdo->prepare($sql);
$stmt->execute([
                    "email"=>$user['email'],
                    "identifiant"=> $user['identifiant'],
                    "motdepasse"=> $user['motdepasse']
]);
while($ligne = $stmt->fetch())
{
    echo "j'ai trouvél'utilisateur :".$ligne['identifiant']."<br />";
}