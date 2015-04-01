function createRequestObject()
{
	var request_o; 
	var browser = navigator.appName; //find the browser name
	if(browser == "Microsoft Internet Explorer"){
				request_o = new ActiveXObject("Microsoft.XMLHTTP");
		}else{
		
		request_o = new XMLHttpRequest();
	}
		return request_o; 
}
var http = createRequestObject(); 





function getEvent(EventId, Action){
	
	http.open('get', 'ajax/StdAjax.php?EventId='+EventId+'&Action='+Action+'&reason=getEvent');
	
	http.onreadystatechange = handlegetEvent; 
	
	http.send(null);
}
function handlegetEvent()
{
	if(http.readyState == 4){ 
		var response = http.responseText;
		document.getElementById('EventData').innerHTML = response;
	}
	else
	{
		document.getElementById('EventData').innerHTML = '<center><br><br>Loading...<br><br><img src="img/ajax_preloader.gif" /></center>';
	}
}



function getWorkshop(EventId, Action){
	
	http.open('get', 'ajax/StdAjax.php?EventId='+EventId+'&Action='+Action+'&reason=getWorkshop');
	
	http.onreadystatechange = handlegetWorkshop; 
	
	http.send(null);
	
}
function handlegetWorkshop()
{
	if(http.readyState == 4){ 
		var response = http.responseText;
		document.getElementById('WorkshopData').innerHTML = response;
	}
	else
	{
		document.getElementById('WorkshopData').innerHTML = '<center><br><br>Loading...<br><br><img src="img/ajax_preloader.gif" /></center>';
	}
}



function getCollege(clg){
	if(clg=='')
	{
		document.getElementById('institute_ladder').innerHTML = '&nbsp;';
		document.getElementById('institute_ladder').style.display='none';
	}
	else
	{		
		http.open('get', 'ajax/StdAjax.php?reason=getCollege&clg='+clg);
		http.onreadystatechange = handlegetCollege; 
		http.send(null);
	}
}
function handlegetCollege()
{
	if(http.readyState == 4){ 
		var response = http.responseText;
		document.getElementById('institute_ladder').innerHTML = response;
		document.getElementById('institute_ladder').style.display='block';
	}
	else
	{
		document.getElementById('institute_ladder').innerHTML = '&nbsp;';
		document.getElementById('institute_ladder').style.display='none';
	}
}



function getBranch(branch){
	if(branch=='')
	{
		document.getElementById('branch_ladder').innerHTML = '&nbsp;';
		document.getElementById('branch_ladder').style.display='none';
	}
	else
	{		
		http.open('get', 'ajax/StdAjax.php?reason=getBranch&branch='+branch);	
		http.onreadystatechange = handlegetBranch; 
		http.send(null);
	}
}
function handlegetBranch()
{
	if(http.readyState == 4){ 
		var response = http.responseText;
		document.getElementById('branch_ladder').innerHTML = response;
		document.getElementById('branch_ladder').style.display='block';
	}
	else
	{
		document.getElementById('branch_ladder').innerHTML = '&nbsp;';
		document.getElementById('branch_ladder').style.display='none';
	}
}



function getUsername(username){
	if(username=='')
	{
		document.getElementById('username_ladder').innerHTML = '&nbsp;';
		document.getElementById('username_ladder').style.display='none';
	}
	else
	{		
		http.open('get', 'ajax/StdAjax.php?reason=getUsername&username='+username);
		http.onreadystatechange = handlegetUsername; 
		http.send(null);
	}
}
function handlegetUsername()
{
	if(http.readyState == 4){ 
		var response = http.responseText;
		document.getElementById('username_ladder').innerHTML = response;
		document.getElementById('username_ladder').style.display='block';
	}
	else
	{
		document.getElementById('username_ladder').innerHTML = '&nbsp;';
		document.getElementById('username_ladder').style.display='none';
	}
}



function getPassword(password){
	if((password=='')||(document.getElementById('username').value==''))
	{
		document.getElementById('password_ladder').innerHTML = '&nbsp;';
		document.getElementById('password_ladder').style.display='none';
	}
	else
	{
		http.open('get', 'ajax/StdAjax.php?reason=getPassword&password='+password+'&username='+document.getElementById('username').value);
		http.onreadystatechange = handlegetPassword;
		http.send(null);
	}
}
function handlegetPassword()
{
	if(http.readyState == 4){ 
		var response = http.responseText;
		document.getElementById('password_ladder').innerHTML = response;
		document.getElementById('password_ladder').style.display='block';
	}
	else
	{
		document.getElementById('password_ladder').innerHTML = '&nbsp;';
		document.getElementById('password_ladder').style.display='none';
	}
}



function getRePassword(repassword){
	if((repassword=='')||(document.getElementById('password').value==''))
	{
		document.getElementById('repassword_ladder').innerHTML = '&nbsp;';
		document.getElementById('repassword_ladder').style.display='none';
	}
	else
	{
		http.open('get', 'ajax/StdAjax.php?reason=getRePassword&repassword='+repassword+'&password='+document.getElementById('password').value);
		http.onreadystatechange = handlegetRePassword; 
		http.send(null);
	}
}
function handlegetRePassword()
{
	if(http.readyState == 4){ 
		var response = http.responseText;
		document.getElementById('repassword_ladder').innerHTML = response;
		document.getElementById('repassword_ladder').style.display='block';
	}
	else
	{
		document.getElementById('repassword_ladder').innerHTML = '&nbsp;';
		document.getElementById('repassword_ladder').style.display='none';
	}
}



function getMobile(mobile)
{
	var filter=/(^\d+$)|(^\d+\.\d+$)/
	if(mobile=='')
	{
		document.getElementById('mobile_ladder').innerHTML = '&nbsp;';
		document.getElementById('mobile_ladder').style.display='none';
	}
	else if(mobile==0)
	{
		document.getElementById('mobile_ladder').innerHTML = '<font color="red">Only Ten Digit Required...</font>';
		document.getElementById('mobile_ladder').style.display='block';
	}
	else if(!(filter.test(mobile)))
	{
		document.getElementById('mobile_ladder').innerHTML = '<font color="red">Invalid Mobile Number...</font>';
		document.getElementById('mobile_ladder').style.display='block';
	}		
	else
	{
		http.open('get', 'ajax/StdAjax.php?reason=getMobile&mobile='+mobile);
		http.onreadystatechange = handlegetMobile;
		http.send(null);
	}
}
function handlegetMobile()
{
	if(http.readyState == 4){ 
		var response = http.responseText;
		document.getElementById('mobile_ladder').innerHTML = response;
		document.getElementById('mobile_ladder').style.display='block';
	}
	else
	{
		document.getElementById('mobile_ladder').innerHTML = '&nbsp;';
		document.getElementById('mobile_ladder').style.display='none';
	}
}



function getEmail(email){
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	if(email=='')
	{
		document.getElementById('email_ladder').innerHTML = '&nbsp;';
		document.getElementById('email_ladder').style.display='none';
	}
	else if(!(filter.test(email)))
	{
		document.getElementById('email_ladder').innerHTML = '<font color="red">Invalid Email Id...</font>';
		document.getElementById('email_ladder').style.display='block';
	}		
	else
	{
		http.open('get', 'ajax/StdAjax.php?reason=getEmail&email='+email);
		http.onreadystatechange = handlegetEmail;
		http.send(null);
	}
}
function handlegetEmail()
{
	if(http.readyState == 4){ 
		var response = http.responseText;
		document.getElementById('email_ladder').innerHTML = response;
		document.getElementById('email_ladder').style.display='block';
	}
	else
	{
		document.getElementById('email_ladder').innerHTML = '&nbsp;';
		document.getElementById('email_ladder').style.display='none';
	}
}



function sendSMS(phone, msg){

	http.open('get', 'ajax/StdAjax.php?reason=sendSMS&phone='+phone+'&msg='+msg);
	
	http.onreadystatechange = handlesendSMS; 
	
	http.send(null);
}
function handlesendSMS()
{
	if(http.readyState == 4){ 
		var response = http.responseText;
		//document.getElementById('').innerHTML = response;
		//document.getElementById('').style.display='block';
	}
}



function getExhibition(EventId, Action){
	
	http.open('get', 'ajax/StdAjax.php?EventId='+EventId+'&Action='+Action+'&reason=getExhibition');
	
	http.onreadystatechange = handlegetExhibition; 
	
	http.send(null);
	
}
function handlegetExhibition()
{
	if(http.readyState == 4){ 
		var response = http.responseText;
		document.getElementById('ExhibitionData').innerHTML = response;
	}
	else
	{
		document.getElementById('ExhibitionData').innerHTML = '<center><br><br>Loading...<br><br><img src="img/ajax_preloader.gif" /></center>';
	}
}