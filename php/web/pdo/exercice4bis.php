<?php
function connectDB()
{
    $hostDB = "localhost";
    $userDB = "formation";
    $passDB = "formation";
    $nameDB = "formation";
    $charset = "utf-8";
    $userEmail = "jerome@sourdin.fr";
    // data source name
    $dsn = "mysql:host=$hostDB;dbname=$nameDB";
    $pdo = new PDO($dsn, $userDB, $passDB);
    return $pdo;
}

function createUser(array $user)
{
    $pdo = connectDB();
    $sql = "INSERT INTO utilisateurs(u_identifiant, u_motdepasse, u_email) VALUES (:identifiant, :motdepasse, :email)";
    
    //préparer la requete pour éviter les injections sql
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
                        "email"=>$user['email'],
                        "identifiant"=> $user['identifiant'],
                        "motdepasse"=> $user['motdepasse']
    ]);
}

function getUserIdentifiant($pdo, $email) 
{
    $pdo = connectDB();
    $sql = "SELECT u_identifiant as identifiant FROM utilisateurs WHERE u_email= :user";
    
    //préparer la requete pour éviter les injections sql
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["user"=>$email]);
    while($ligne = $stmt->fetch())
    {
        $oldIdentifiant = $ligne['identifiant'];
    }
    
    $newIdentifiant = strtoupper($oldIdentifiant);
    return $newIdentifiant;
}

function updateUserIdentifiant($pdo, $newIdentifiant, $email)
{
    $pdo = connectDB();
    $sql2 = "UPDATE utilisateurs SET u_identifiant=:user  WHERE u_email= :useremail";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute(["user"=>$newIdentifiant, "useremail"=>$email]);
}

function deleteUserEmail(string $email)
{
    $pdo = connectDB();
    $sql = "DELETE FROM utilisateurs WHERE u_email= :useremail";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["useremail"=>$email]);
}
$identifiant = getUserIdentifiant($pdo, 'nicolas@cardon.fr');
updateUserIdentifiant($pdo, $identifiant, 'nicolas@cardon.fr');