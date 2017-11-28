<?php
$valeurs = array(5,10,15,20);
for ($i=0; $i < count($valeurs); $i++) {
    echo $valeurs[$i]."<br />";
}

$utilisateur = array();
$utilisateur['nom']="Cardon";
$utilisateur['prenom']="Nicolas";


foreach ($utilisateur as $key => $value) {
    echo "Clé =" . $key ." - ";
    echo "Valeur =" . $value ."<br />";
}

$inscrits = array("felix", "aurelie", "leo");
echo "Inscrits :";
foreach($inscrits as $inscrit) {
    echo "$inscrit -";
}

$personne1 = array("id"=>0,"nom"=>"Cardon", "prenom"=>"Nicolas", "age"=>"28","sexe"=>"M","taille"=>178);
$personne2 = array("id"=>1,"nom"=>"Poisson", "prenom"=>"Magali", "age"=>"38","sexe"=>"F");
$personne3 = array("id"=>3,"nom"=>"Doe", "prenom"=>"Jon", "age"=>"inconnu","sexe"=>"");
$personnes = array($personne1, $personne2, $personne3);

?>

<html>
    <body>
        <table>
            <thead>
                <tr>
                   <?php
                        foreach ($personne1 as $key => $value) {
                            echo "<th>". $key ."</th>";
                        }
                   ?>
                </tr>
            
            </thead>
            <tbody>
                <?php
                    foreach($personnes as $personne) 
                    {
                        echo "<tr>";
                            foreach($personne as $attr) 
                            {
                                echo "<td>". $attr ."</td>";
                            }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        <?php
        $tab = array();
        echo "<br /><br /><br />";
        foreach($personnes as $cle => $membre)
        {
            foreach ($membre as $key => $value) {
                echo $key . "-";
            }
        }

        foreach($personnes as $cle => $membre)
        {
            foreach ($membre as $key => $value) {
                $tab[] = $key;
            }
        }
        echo "<br /><br /><br />";
        echo "<pre>";
        var_dump($tab);
        echo "</pre>";
        
        $tab2 =array();
        
        //Créer par nicolas
        foreach($tab as $key=>$value)
        {
            $bool = false;
            if(count($tab2)==0) {
                array_push($tab2, $value);
            }
            else
            {
                foreach($tab2 as $cle)
                {
                    if($cle == $value) 
                    {
                        $bool = true; 
                    }
                }
                if($bool==false) {
                    array_push($tab2, $value);
                }
            }
        }

        $entete = "<tr>";
        foreach($tab2 as $colonne) 
        {
            $entete.="<td>". $colonne ."</td>";
        }
        $entete.= "</tr>";
?>

<table>
        <thead>
            <?php echo $entete; ?>
        </thead>
        <tbody></tbody>
</table>
       
