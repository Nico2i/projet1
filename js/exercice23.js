console.log('exercice23.js');

var a=2;
var b=3;
var somme=a+b;
console.log(somme);

var client= {"prenom":"frederique","lunettes":true, "type":3};
console.log(client);
console.log(client.prenom);
console.log(client["prenom"]);
var prenom = client.prenom;
console.log(prenom);

if( client.lunettes == true )
{
	console.log("Attention lunettes !!!!!!!!!!!!");
}
else if (client.lunettes == false) 
{
	console.log('pas de lunettes, tout va bien');
}
else 
{
	console.log('inconnu');	
}
switch (client.type) {
	case 0 :
		console.log("prospect");
		break;
	case 1 :
		console.log("client");
		break;
	case 2 :
		console.log("vip");
		break;
	case 3 :
		console.log("ex-client");
		break;
}
var i=0;
while(i<10) 
{
	console.log("j'en suis à " + i);
	i=i+1;
}
var j=0;
j++;
console.log(j);
j--;
console.log(j);
console.log(j++); /*affiche la valeur de j et non j++ pour qu'il affiche j++ il faut ++j */
console.log(j--);
console.log("j="+j);
j+=2;
console.log(j);
j-=5;
console.log(j);
j*=10;
console.log(j);

j=10;
do {
	console.log(j++);
} while (j < 10);

{
	console.log("a");
}

for (var i=0; i<10; i++) 
{
	console.log("i="+i);
}

for (var i=10; i>0; i--) 
{
	console.log("i="+i);
}
