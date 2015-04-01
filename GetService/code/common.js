// JavaScript Document
var responseData;

function load(url)
{

	try
	{
		
		responseData = null;
		var xmlhttp;
		if (window.XMLHttpRequest)
		{ // code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}
		else
		{ // code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function()
		{
			//alert(xmlhttp.status);
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{

				responseData = xmlhttp.responseText;


			}
		}
		xmlhttp.open("GET", url, false);
		xmlhttp.send();
	}
	catch (e)
	{
		alert("Connection Error Please Check your data connection or try again later!");
	}
}