<?php

$equipe = array(
                    array("id"=>1,"nom"=>"Nicolas Cardon", "niveau"=>2, "age"=>27),
                    array("id"=>2,"nom"=>"Jerome Sourdin", "niveau"=>2, "age"=>18),
                    array("id"=>3,"nom"=>"Xavier Bizot", "niveau"=>1, "age"=>15),
                    array("id"=>4,"nom"=>"Felix Sportelli", "niveau"=>3, "age"=>65)

);
//Infos
/*
niveau : debutant(1), intermédiare(2), expert(3)
tranche age : mineur(0-17), majeur(18,60), senior(60+)
trigramme : 1ere lettre du prénm + 2 premieres lettres du nom
*/
//tableau 
/*
id trigramme niveau "tranche age"

*/
function getNiveau($niveau) 
{
    switch ($niveau) {
        case '1':
            $niveauNom = 'debutant';
            break;
        case '2' :
            $niveauNom = 'intermédiaire';
            break;
        case '3':
            $niveauNom = 'expert';
            break;
        default:
            $niveauNom = 'inconnu';
            break;
    }
    return $niveauNom;
}

function getTrancheAge($age)
{
        /*
    if($age<=17)
    {
        $tranche = "Mineur";
    }
    else if($age>=18 && $age<=60)
    {
        $tranche = "Majeur";
    }
    else if($age>=61)
    {
        $tranche = "Senior";
    }
    */
    /*
    OU
    */
    $tranche = ($age<=17) ? "Mineur" :(($age>=18 && $age<=60) ? "Majeur" : "Senior");

    /*
    */
    return $tranche;
}

function getTrigramme($nom)
{
    $tabNom = explode(" ", $nom);
    $prenom = $tabNom[0];
    $nom2 = $tabNom[1];
    /*
    $trigramme = strtoupper(substr($prenom, 0, 1));
    $trigramme.= strtoupper(substr($nom2, 0, 2));
    */
    
         $trigramme = strtoupper(substr($prenom, 0, 1).substr($nom2, 0, 2));
    
    return $trigramme;
}
?>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Trigramme</th>
            <th>Niveau</th>
            <th>Tranche age</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($equipe as $membre) 
            {
                echo "<tr>";
                    echo "<td>". $membre['id'] ."</td>";
                    echo "<td>". getTrigramme($membre['nom']) ."</td>";
                    echo "<td>". getNiveau($membre['niveau']) ."</td>";
                    echo "<td>". getTrancheAge($membre['age']) ."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>