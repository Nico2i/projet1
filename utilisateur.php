<?php
echo "M&eacute;thode appel&eacute;e : " . $_SERVER['REQUEST_METHOD'];
echo "<br />";
echo "nom = " . $_POST['nom'];
echo "<br />";
echo "prenom = " . $_POST['prenom'];
echo "<br />";
echo "sexe = " . $_POST['sexe'];
echo "<br />";
echo "rememberMe = " . $_POST['rememberMe'];
echo "<br />";
echo "departement = " . $_POST['departement'];
echo "<br />";
echo "departement de formation = ";
foreach($_POST['departementFormation'] as $departement)
	echo $departement . '/';	
echo "<br />";
echo "departement en datalist = " . $_POST['dep'];
?>