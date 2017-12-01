<?php
/*
function recup_utilisateur_par_identifiant($identifiant)
{
    //TODO: A récupérer de la base de données !!
    $user = array("id" => 4 , 
                    "identifiant" => $identifiant, 
                    "nom" => "sportelli" , 
                    "password" => "abc");
    return $user;
}
*/

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

function recup_utilisateur_par_identifiant($identifiant)
{
    $pdo = connectDB();
    $sql = "SELECT u_id, u_identifiant, u_motdepasse,u_email FROM utilisateurs WHERE u_identifiant= :identifiant";
    $user = array();
    //préparer la requete pour éviter les injections sql
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["identifiant"=>$identifiant]);
    while($ligne = $stmt->fetch())
    {
        $user['identifiant']=$ligne['u_identifiant'];
        $user['password']=$ligne['u_motdepasse'];
        $user['email']=$ligne['u_email'];
        $user['id']=$ligne['u_id'];
        $user['nom']=$ligne['u_identifiant'];
    }
    
    return $user;

}

function ajouter_utilisateur(string $identifiant, string $email, string $motdepasse)
{
    $pdo = connectDB();
    $sql = "INSERT INTO utilisateurs(u_identifiant, u_motdepasse, u_email) VALUES (:identifiant, :motdepasse, :email)";
    $code = false;
    //préparer la requete pour éviter les injections sql
    $stmt = $pdo->prepare($sql);
    try {
        $stmt->beginTransaction();
        $code = $stmt->execute([
            "email"=>$email,
            "identifiant"=> $identifiant,
            "motdepasse"=> $
            ]);
        $pdo->commit();
    } catch (Execption $e) {
        $pdo->rollback();
    }
  
   
    if($code) 
    {
        return recup_utilisateur_par_identifiant($identifiant);
    }
    else 
    {
        return null;
    }
    
}