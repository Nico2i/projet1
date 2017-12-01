<?php
    if(isset($_POST['envoyer']))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $identite = array("id"=>1,"nom"=>$nom, "prenom"=>$prenom );
        echo "<pre>";
        print_r($identite);
        echo "</pre>";

    }

    /*
    OU
    $nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
    $prenom = (isset($_POST['prenom'])) ? $_POST['prenom'] : "";

    header('Content-type: application/json');
    if($prenom !="" && $nom != "") 
    {
        $user = array();
        $user['id'] = rand(1,1000);
        $user['nom'] = $nom; 
        $user['prenom'] = $prenom;
        return json_encode($user);
    }
    */
?>