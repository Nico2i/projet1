/*
Définir une variable voitureFelix
qui a^pour proprietes :
-marque
-model
-motorisation
-etat (arret,avance, recul)
et a qui a pour méthode 
-getProprietes() qui renvoie marque+model+motorisatoin+etat
-avancer()
-arreter()
-reculer()
*/

var voitureFelix = {"marque":"Lamborghini","model":"Terzo","motorisation":"electrique","etat":"arret"};

var getProprietes = function() {
	console.log("C'est une voiture de la marque " + this.marque + ", de modèle " + this.model +", de motorisation "+ this.motorisation +". Son état est : "+ this.etat +""); 
}		

var avancer = function() {
	voitureFelix['etat']="Avance";
}

var arreter = function() {
	voitureFelix['etat']="Arret";
}

var reculer = function() {
	voitureFelix['etat']="Recule";
}


voitureFelix.getProprietes = getProprietes;
voitureFelix.avancer = avancer;
voitureFelix.arreter = arreter;
voitureFelix.reculer = reculer;
voitureFelix.getProprietes();
console.log("Appel de la fonction avancer");
voitureFelix.avancer();
voitureFelix.getProprietes();
console.log("Appel de la fonction arret");
voitureFelix.arreter();
voitureFelix.getProprietes();
console.log("Appel de la fonction reculer");
voitureFelix.reculer();
voitureFelix.getProprietes();