var monP = document.getElementById("p1");
console.log(monP);

var mesPPair = document.getElementsByClassName("pair");
console.log(mesPPair);

var _monP = document.querySelector("#p1");
console.log(_monP);

var _mesPPair = document.querySelectorAll(".pair");
console.log(_mesPPair);

var _mesP = document.querySelectorAll("p");
console.log(_mesP);

var firstChild = document.querySelector("#p1").firstChild;
console.log("1er enfant :" + firstChild.nodeName);

function changeContenu()
{
	console.log('test');
	var p1 = document.querySelector("#p1");
	p1.textContent = "bienvenue !";
}

document.querySelector("#bouton2").onclick = function() {
	className = document.querySelector("#monImg").className;
	if(className == "hidden") {
		className = "";
	}
	else {
		className = "hidden";	
	}
	document.querySelector("#monImg").className = className;
}