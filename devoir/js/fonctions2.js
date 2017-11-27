function ajoutUtilisateurDB(user)
{
	var utilisateurs = [];
	if ( localStorage["users"] != null ) 
	{
		utilisateurs = JSON.parse(localStorage["users"]);
	}
	utilisateurs.push(user);
	localStorage["users"] = JSON.stringify(utilisateurs);
}
function removeElementsByClass(className){
    var elements = document.getElementsByClassName(className);
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
}
function ajouteUtilisateursClic()
{
	var user = {};
	user.nom = document.querySelector("#nom").value;
	user.prenom = document.querySelector("#prenom").value;

	ajoutUtilisateurDB(user);
	dessineTableau();
	
	document.querySelector("#nom").value = document.querySelector("#prenom").value = "";
}

function supprimerUtilisateur(userId)
{
		console.log("user ID :"+ userId);
	if ( localStorage["users"] != null ) 
		{
			utilisateurs = JSON.parse(localStorage["users"]);
			classTR = ".user"+userId;
			$(classTR).remove();
			/*
			localStorage.removeItem(utilisateurs[userId]);
			console.log("suppressio de "+utilisateurs[userId]);
			classTR = "user"+userId;
			console.log(classTR);
			removeElementsByClass(classTR);
			dessineTableau();
			*/

		}
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
		for (var i = 0; i < utilisateurs.length; i++)
		{
			str += "<tr class='user"+ i +"'><td>" + i + "</td><td>" + utilisateurs[i].nom + "</td><td>" + utilisateurs[i].prenom + "</td><td><i class='fa fa-pencil' onclick='editUtilisateur("+ i +")'></i>  <i class='fa fa-trash' onclick='supprimerUtilisateur("+ i +")'></i></td></tr>";
		}
		tab.innerHTML = str;
	}
}