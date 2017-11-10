/*
Ojet felix
attribut tab enfants
2 methodes :
nouvelenfant(nom enfant)
listerenfant : affihcer les enfants
*/

var nicolas = [];
var personne = {"nom":"magali"};
console.log(nicolas);
var nouvelEnfant = function(nom) {
	nicolas.push(nom);
}

var getEnfants = function() {
	console.log("Les enfants de "+ personne.nom);
	for (var i = 0; i < nicolas.length; i++) {
		console.log(nicolas[i]);
	}
}

nicolas.nouvelEnfant = nouvelEnfant;
nicolas.getEnfants = getEnfants;
nicolas.nouvelEnfant("Lily-Rose");
nicolas.nouvelEnfant("Eleonore");
nicolas.getEnfants();

var personne = {"nom":"Nicolas", "enfants":[]};
personne.nouvelEnfant = function(nomEnfant) {
	this.enfants.push(nomEnfant);
}

personne.listerEnfants = function() {
	console.log("Enfants de " + this.nom + ":");
	for (var i = 0; i < this.enfants.length; i++) {
		console.log(this.enfants[i]);
	}
}

personne.nouvelEnfant("Lily");
personne.nouvelEnfant("Leo");
personne.listerEnfants();
