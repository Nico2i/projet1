<?php
$niveau = 0;

switch($niveau) {
    case 0:
        echo "débutant";
        break;
    case 1:
        echo "Intermédiaire";
        break;
    case 2:
        echo "expert";
        break;
    default:
        echo "inconnu";
        break;
}
echo "<br />";

$lang = "FR";
//Test FR, IT, EN, DE
//Afficher Francais, Italien, Anglais, Allemand

switch($lang) {
    case 'FR':
        echo "français";
        break;
    case 'IT':
        echo "italien";
        break;
    case 'EN':
        echo "anglais";
        break;
    case 'DE':
        echo "allemand";
        break;
    default:
        echo "inconnu";
        break;
}