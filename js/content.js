function WriteContent(idWriteTo,title)
{
	content = document.getElementById(idWriteTo);
	
	path = document.location.pathname;
	dir = path.substring(path.indexOf('/', 1)+1, path.lastIndexOf('/'));
	
	content.innerHTML = 
		"<span class=\"identifier\"> " + dir + " </span>"
	content.setAttribute("class","content");
}