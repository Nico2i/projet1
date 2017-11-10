var tabEntier = [1,2,3];
console.log(tabEntier[0]);

//taille d'un tableau
console.log(tabEntier.length);

//Afficher la somme de toutles les valeurs de mon array
var cmpt = 0 ;
for(var i=0; i<tabEntier.length; i++) 
{
	cmpt = cmpt + tabEntier[i];
	//ou cmpt += tabEntier[i];
}
console.log(cmpt);

var tabChar = ["Jerome","Benjamin","Nicolas"];
console.log("tabChar :");
for (var i = tabChar.length - 1; i >= 0 ; i--) {
	console.log("- " + tabChar[i]);
}