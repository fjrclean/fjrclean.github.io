function WriteCategories(idWriteTo)
{
	categories = document.getElementById(idWriteTo);
	
	categories.innerHTML = 
		"<h3> browse by category: </h3>" +
		"<h4> websites </h4>" +
		"<h4> <a href=\"categories/wii_hacking\"> wii hacking </a> </h4>";
	categories.setAttribute("class","leftBar");
}