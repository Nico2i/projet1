var message = '{"nom":"nicolas"}';
console.log(message);
console.log(message.nom); //undefined

var utilisateur = JSON.parse(message);
console.log(utilisateur);
console.log(utilisateur.nom);
utilisateur.age = 28;
console.log(utilisateur); // format js

var messageAEnvoyer = JSON.stringify(utilisateur);
console.log(messageAEnvoyer);
