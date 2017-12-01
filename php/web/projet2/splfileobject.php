<?php

$fichier="ressources/monfichier.txt";
$file = new SplFileObject($fichier,"r");
foreach($file as $line)
{
    echo "$line <br/>";
}

$ligneAEcrire = "nouvelle ligne";
$file = new SplFileObject($fichier, "a");
$file->fwrite($ligneAEcrire);

$file = new SplFileObject($fichier, "r");
foreach($file as $line)
{
    echo "$line <br/>";
}


echo "<br />";
echo "<br />";
$fichierCSV = "ressources/fichier.csv";
$file = new SplFileObject($fichierCSV, "r");
$file->setFlags(SplFileObject::READ_CSV);
$file->setCsvControl(";",'"','"');
foreach($file as $line)
{
    foreach($line as $value)
    {
        echo "$value ";
    }
    echo "<br />";
    print_r($line);
}