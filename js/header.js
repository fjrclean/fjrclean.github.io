function WriteHeader(idWriteTo)
{
	header = document.getElementById(idWriteTo);
	
	header.innerHTML =
		"<h1> Tenuous Denizen </h1>" +
		"<a href=\"about.html\"> about </a>" +
		"<a href=\"standards_syntax.html\"> standards/syntax </a>" +
		"<a href=\"contact.html\"> contact </a>";
	header.setAttribute("class","header");
}