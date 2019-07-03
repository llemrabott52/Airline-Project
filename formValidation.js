function validateForm() {
	var x = document.forms["myForm"]["username"].value;
	var valid = 1;
	if(x == null || x == "") {
		alert("nom d'utilisateur doit être rempli ");
		valid = 0;
	}
	var y = document.forms["myForm"]["pwd1"].value;
	if(y == null || y == "") {
		alert("mot de passe doit être rempli ");
		valid = 0;
	}

	var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*[^a-zA-Z0-9])(.{6,})$/;
	if(!regex.test(y)){
			alert("le mot de passe doit être valide");
			valid = 0;
	}
	
	var z = document.forms["myForm"]["firstname"].value;
	if(z == null || z == "") {
		alert(" le prénom doit être renseigné");
		valid = 0;
	}
	var w = document.forms["myForm"]["lastname"].value;
	if(w == null || w == "") {
		alert(" nom de famille doit être rempli ");
		valid = 0;
	}
	var v = document.forms["myForm"]["email"].value;
	if(v == null || v == "") {
		alert("email doit être rempli");
		valid = 0;
	}
	var u = document.forms["myForm"]["tel"].value;
	if(u == null || u == "") {
		alert("le numéro de téléphone doit être rempli");
		valid = 0;
	}
	if(valid == 0)
	return false;
	else 
	return true;
}