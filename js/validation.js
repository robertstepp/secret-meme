function validateForm() {
    var x = document.forms.registration.email.value;
	var u = document.forms.registration.username.value;
	var illegalChars = /\W/; // allow letters, numbers, and underscores
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		document.forms.registration.email.className = "inputreq";
        alert("Not a valid e-mail address");
        return false;
    }
	if (u === "") {
		document.forms.registration.username.className = "inputreq";
		alert("You didn't enter a username.\n");
		return false;
	}	else if (document.forms.registration.username.value.length < 5) {
		document.forms.registration.username.className = "inputreq";
		alert("The username is too short.");
		return false;
	}	else if (document.forms.registration.username.value.length > 100)	{
		document.forms.registration.username.className = "inputreq";
		alert("The username is too long.");
		return false;
	}	else if (illegalChars.test(document.forms.registration.username.value))	{
		document.forms.registration.username.className = "inputreq";
		alert("The username can only contain letters, numbers and underscores.");
		return false;
	}
	var password1 = document.forms.registration.password1.value;
	var password2 = document.forms.registration.password2.value;
	if (document.forms.registration.password1.value.length <= 16 || document.forms.registration.password2.length <= 16)	{
		document.forms.registration.password2.className = "inputreq";
		document.forms.registration.password1.className = "inputreq";
		alert("The password is too short.");
		return false;
	}	else if (password1 !== password2)	{
		document.forms.registration.password2.className = "inputreq";
		document.forms.registration.password1.className = "inputreq";
		alert("The passwords don't match.");
		return false;
	}	else if (document.forms.registration.password1.value.length == document.forms.registration.username.value)	{
		document.forms.registration.password2.className = "inputreq";
		document.forms.registration.password1.className = "inputreq";
		alert("The password can't be the same as your username.");
		return false;
	}	
	var re = /[0-9]/;
	if (!re.text(document.forms.registration.password1.value))	{
		document.forms.registration.password2.className = "inputreq";
		document.forms.registration.password1.className = "inputreq";
		alert("The password must contain at least one number.");
		return false;
	}
	re = /[a-z]/; 
	if(!re.test(document.forms.registration.password1.value)) { 
		document.forms.registration.password2.className = "inputreq";
		document.forms.registration.password1.className = "inputreq";
		alert("The password must contain at least one lowercase letter.");
		return false;
	}
	re = /[A-Z]/;
	if(!re.test(document.forms.registration.password1.value)) {
		document.forms.registration.password2.className = "inputreq";
		document.forms.registration.password1.className = "inputreq";
		alert("The password must contain at least one uppercase letter.");
		return false;
	}
	re = /^[a-zA-Z0-9!@#\$%\^\&*\)\(+=._-]+$/g;
	if(!re.test(document.forms.registration.password1.value))	{
		document.forms.registration.password2.className = "inputreq";
		document.forms.registration.password1.className = "inputreq";
		alert("The password must contain at least one special character.");
		return false;
	}
}
