function validateRequestForm()  {
	var x = document.forms.request_account.email.value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		document.forms.registration.email.className = "inputreq";
        alert("Not a valid e-mail address");
        return false;
    }
}