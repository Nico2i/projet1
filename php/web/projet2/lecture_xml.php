<?php

$xml =simplexml_load_file("ressources/export.xml");
print_r($xml->person->first_name);
print_r($xml->person->last_name);

print_r($xml->person->attributes());
foreach($xml->person->children() as $key=>$value)
{
    echo "J'ai trouvé le noeud $key (valeur : $value)\n";
}