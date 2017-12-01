<?php
$fichier="ressources/monfichier.txt";

echo "file_get_contents : <br />";
$contenu = file_get_contents($fichier);
echo $contenu;


//fopen et fgets
echo "fopen + fgets : <br\>";

$inputFile = fopen($fichier, "r");
if($inputFile)
{
    while(($line = fgets($inputFile)) != false)
    {
        echo $line ."<br />";
    }
}
fclose($inputFile);