function ajoutUtilisateurDB(user)
{
	var utilisateurs = [];
	if ( localStorage["users"] != null ) 
	{
		utilisateurs = JSON.parse(localStorage["users"]);
	}
	user.id = utilisateurs.length+1;

	if(user.id == null) 
	{
		utilisateurs.push(user);
		localStorage["users"] = JSON.stringify(utilisateurs);
	}
	else
	{
		for (var i=0; i < utilisateurs.length; i++) 
		{
			if(utilisateurs[i].id == user.id) 
			{
				utilisateurs[i].nom = user.nom;
				utilisateurs[i].prenom = user.prenom;

			}
		}
	}
}


function ajouteUtilisateursClic()
{
	var user = {};
	user.nom = document.querySelector("#nom").value;
	user.prenom = document.querySelector("#prenom").value;
	if(document.querySelector("#id").value != '')
	{

	}
	ajoutUtilisateurDB(user);
	dessineTableau();
	
	document.querySelector("#nom").value = document.querySelector("#prenom").value = "";
}


function dessineTableau()
{
	if ( typeof (localStorage) != null ) 
	{
		var utilisateurs = [];
		if ( localStorage["users"] != null ) 
		{
			utilisateurs = JSON.parse(localStorage["users"]);
		}

		var tab = document.querySelector("#bodytab");
		var str= "";
		var cmpt="";
		for (var i = 0; i < utilisateurs.length; i++)
		{
			if(utilisateurs[i] != null)
				{
					cmpt = i+1;
					str += "<tr class='user"+ cmpt +"'><td>" + i + "</td><td>" + utilisateurs[i].nom + "</td><td>" + utilisateurs[i].prenom + "</td><td><i class='fa fa-pencil' onclick='editUser("+utilisateurs[i].id+")'></i>  <i class='fa fa-trash' onclick='supprimerUtilisateur("+utilisateurs[i].id+")'></i></td></tr>";
				}
		}
		tab.innerHTML = str;
	}
}
function getUserDB(idUser) 
{
	var user = null;
	if ( localStorage["users"] != null ) 
		{
			var utilisateurs = JSON.parse(localStorage["users"]);
			for (var i = 0; i < utilisateurs.length; i++) {
					if(utilisateurs[i].id === idUser) {
						user =  utilisateurs[i];
					}
			}
		}
		return user;
}
/**
* Cette fonction permet d'éditer un utilisateur
*
* @arg id utilisateur
*/
function editUser(idUser) 
{
	var user = getUserDB(idUser);
	document.querySelector("#id").value = user.id;
	document.querySelector("#nom").value = user.nom;
	document.querySelector("#prenom").value = user.prenom;
}

/**
* Cette fonction permet d'éditer un utilisateur
*
* @arg id utilisateur
*/
function supprimerUtilisateur(idUser)
{

	if ( localStorage["users"] != null ) 
		{
			utilisateurs = JSON.parse(localStorage["users"]);
			classTR = ".user"+idUser;
			console.log(classTR);
			$(classTR).remove();
			for (var i=0; i<utilisateurs.length; i++) {
				if(utilisateurs[i].id === idUser)
				{
					delete utilisateurs[i];
				}
				
			}
			
			localStorage["users"] = JSON.stringify(utilisateurs.filter(function(i){return i != null; }));
		}
}