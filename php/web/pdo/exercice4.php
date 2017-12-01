<?php
$hostDB = "localhost";
$userDB = "formation";
$passDB = "formation";
$nameDB = "formation";
$charset = "utf-8";
$userEmail = "jerome@sourdin.fr";
// data source name
$dsn = "mysql:host=$hostDB;dbname=$nameDB";
$pdo = new PDO($dsn, $userDB, $passDB);

// la requete SQl 

$sql = "SELECT u_identifiant as identifiant FROM utilisateurs WHERE u_email= :user";

//préparer la requete pour éviter les injections sql
$stmt = $pdo->prepare($sql);
$stmt->execute(["user"=>$userEmail]);
while($ligne = $stmt->fetch())
{
    $oldIdentifiant = $ligne['identifiant'];
}

$newIdentifiant = strtoupper($oldIdentifiant);
echo $newIdentifiant;

$sql2 = "UPDATE utilisateurs SET u_identifiant=:user  WHERE u_email= :useremail";
$stmt2 = $pdo->prepare($sql2);
$stmt2->execute(["user"=>$newIdentifiant, "useremail"=>$userEmail]);
