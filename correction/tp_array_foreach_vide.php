<?php
/**
 * Enoncé : 
 * 1. Définir un array PHP représentant : 
 *  Array PHP 
 *      id prenom nom age sexe 
 *      1 Felix SPORTELLI 32 M
 *      2 Aurelie SPORTELLI 31 F
 *      3 ...
 * 
 * 2. Trouver l'algorithme permettant de récupérer 
 * chaque ligne de l'array et en faire un tableau HTML
 * 
 * 
 * 3. Si sexe = M , afficher "Homme", si sexe = F, afficher "Femme"
 * sinon afficher "Inconnu"
 * 
 */

// On définit notre array
$famille = array (
        array ( "id" => 1 , "prenom" => "Felix", "nom" => "SPORTELLI" , "age" => 32, "sexe" => "M"),
        array ( "id" => 2 , "prenom" => "Aurelie", "nom" => "SPORTELLI" , "sexe" => "F", "taille" => "1.60"),
        array ( "id" => 3 , "prenom" => "Lea", "nom" => "SPORTELLI" , "age" => 3, "sexe" => "", "taille" => "80"),
);

$entetes = array();

echo "<table>";
echo "<tbody>";
// On parcourt l'array 
foreach ($famille as $membre)
{
        foreach ($membre as $attribut => $valeur) {
                        // Attribut 
            // Tableau keys
            // On définit un booléen à faux
            $trouve = false;
            
            // On parcourt toutes les clés déjà renseignées
            foreach ($entetes as $cle) { 

                // Si on trouve la clé en cours => on met le booléen à vrai
                if ($cle == $attribut)
                    $trouve = true;
            }

            // Si booléen faux (ie. attribut non trouvé dans $keys)
            if ( $trouve == false )
                // On ajoute l'attribut dans $keys
                $entetes[$attribut] = $attribut;
            }
}

foreach ($famille as $membre)
{
        echo "<tr>";   
        foreach ($entetes as $entete) 
        {
            $attribut = ( isset($membre[$entete]) ) ? $membre[$entete] : null;

            if ( $attribut == null ){
                echo "<td></td>";
            }

            else 
            {
                if ( $entete != "sexe"){
                    echo "<td>" . $membre[$entete] . "</td>";
                }
                else {
                    $sexeStr= "Inconnu";
                    $sexe = $membre[$entete];
        
                    // $sexe vaut M, F ou autre chose 
                    if ($sexe == "M"){
                        echo "<td>" . "Homme". "</td>";
                    }
                    elseif ($sexe == "F") {
                        echo "<td>" ."Femme". "</td>";
                    } else {
                        echo "<td>" ."Inconnu". "</td>";
                    }
                }
            }
        }
    echo "</tr>";
}
echo "</tbody>";
echo "<thead><tr>";
foreach ($entetes as $cle => $valeur) {
    echo "<th>" . $cle . "</th>";
}
echo "</tr></thead>";

echo "</table>";
