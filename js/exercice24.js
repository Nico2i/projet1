var test=42;

function bonjour() {
	//variable locale
	var nom="test test"
	console.log('bonjour');
	//bonjourNom();
}
bonjour();

function bonjourNom(name) {
	console.log(test);
	console.log("bonjour " + name);
}

bonjourNom('Nicolas');
//Signature A
function a() {
	console.log("Je suis dans la fonction a");
}

function a(b) {
	console.log("Je suis dans la fonction a b");
}
a();
a('b');

var affSomme = function(a,b) {
	console.log(a+b);
}

affSomme(1,2);

/*
var affPrenom = function() {
	console.log(this.prenom);
}

var nicolas = {"prenom","Nicolas"};
nicolas.affichePrenom = affPrenom;
var felix = {"prenom":"felix"};
filex.affichePrenom = function() {
	console.log(this.prenom);

}

felix.affichePrenom();
*/

var nicolas = {"prenom":"Nicolas"};
nicolas.affichePrenom = function(minmaj) {
	if(minmaj == true) {
		console.log(this.prenom.toUpperCase());
	}
	else 
	{
		console.log(this.prenom);
	}
}

nicolas.affichePrenom(false);
/*
var affPrenomMaj = function(isUpperCase) {
	if(isUpperCase == true) {
		console.log(this.prenom.toUpperCase());
	}
	else {
		console.log(this.prenom);
	}
}
nicolas.affPrenomMaj() = affPrenomMaj;
nicolas.affPrenomMaj(true);
nicolas.affPrenomMaj(false);
*/
var affSommeReturn = function(a,b) {
	return a+b;
}

//Créer une méthreode isMajeur
//qui va récupérer l'age mon objet
//et me renvoyer true ou flase en fonction de son age

var isMajeurFunc = function() {
	if(this.age<18) {
		return false;
	}
	else {
		return true;
	}
}
nicolas.age = 18;
nicolas.isMajeur = isMajeurFunc;
if(nicolas.isMajeur()) {
	console.log("PASSER")
}
else {
	console.log("REFUSER");
}


var somme = affSommeReturn(2,3);
console.log(somme);

