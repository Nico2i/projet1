<?php

$fichier="ressources/monfichierdest.txt";

$machaine = "ciao tutto bene ?";
file_put_contents($fichier, $machaine, FILE_APPEND);
//file_append permet d'écrire sans efacer le fichier


//suppression de fichier
unlink($fichier);