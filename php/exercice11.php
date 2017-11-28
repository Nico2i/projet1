<?php
$personne1 = array("id"=>0,"nom"=>"Cardon", "prenom"=>"Nicolas", "age"=>"28","sexe"=>"M");
$personne2 = array("id"=>1,"nom"=>"Poisson", "prenom"=>"Magali", "age"=>"38","sexe"=>"F");
$personne3 = array("id"=>3,"nom"=>"Doe", "prenom"=>"Jon", "age"=>"inconnu","sexe"=>"");
$personnes = array($personne1, $personne2, $personne3);
echo "<pre>";
var_dump($personnes);
echo "</pre>";
?>

<html>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>AGE</th>
                    <th>SEXE</th>
                </tr>
            
            </thead>
            <tbody>
                <?php
                    $i=0;
                    while($i < count($personnes))
                    {
                        $sexe = $personnes[$i]["sexe"];
                        $nomSexe = ($sexe == "M") ? "Homme" : (($sexe == "F") ? "Femme" : "inconnu"); 
                        echo "
                            <tr>
                                <td>". $personnes[$i]['id'] ."</td>
                                <td>". $personnes[$i]['nom'] ."</td>
                                <td>". $personnes[$i]['prenom'] ."</td>
                                <td>". $personnes[$i]['age'] ."</td>
                                <td>". $nomSexe ."</td>
                            </tr>";
                            $i++;
                    }
                ?>
            </tbody>
        </table>

        OU
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>AGE</th>
                    <th>SEXE</th>
                </tr>
            
            </thead>
            <tbody>
                <?php
                    $cles = array("id","nom","prenom","age","sexe");
                    
                    $i=0;
                    while($i < count($personnes))
                    {
                        
                        echo "<tr>";
                            $j=0;
                            while($j < count($cles)) 
                            {
                                if($cles[$j] == "sexe") {
                                    $sexe = $personnes[$i]["sexe"];
                                    $nomSexe = ($sexe == "M") ? "Homme" : (($sexe == "F") ? "Femme" : "inconnu"); 
                                    echo "<td>". $nomSexe ."</td>";
                                }
                                else
                                {
                                    echo "<td>". $personnes[$i][$cles[$j]] ."</td>";
                                }
                                $j++;
                            }
                        echo "</tr>";
                        $i++;
                    }
                ?>
            </tbody>
        </table>

    </body>
</html>