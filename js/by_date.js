function WriteBrowseDate(idWriteTo)
{
	byDate = document.getElementById(idWriteTo);
	
	byDate.innerHTML = 
		"<h3> browse by date: </h3>" +
		"dates...";
	byDate.setAttribute("class","rightBar");
}