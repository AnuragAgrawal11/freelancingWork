// JavaScript Document
var globalUrl = "http://getserviced.com.au/getservice_mindbowser/mobile/";
var locationName;
var serviceName;
var requestorLatitude = null;
var requestorLongitude = null;
var JSONObject1;
var JSONObject2;
var isLogin = 'false';
var value;
var dis;
var dis8;
var dis10;
var dis9;
var dis11;
var dis12;
var geocoder;
var requestorCity;
var name;
var phone;
var IP;
var countdown;
var countdown_number;
var app_notes1;
var app_appointment1;
var app_date;
var rem_date;
var edit_app_notes1;
var edit_app_appointment1;
var edit_app_date;
var edit_rem_date;

document.addEventListener("deviceready", onDeviceReady, false);


function onDeviceReady()
{
	
	
	
	geocoder = new google.maps.Geocoder();
	navigator.geolocation.getCurrentPosition(onSuccess, onError);

}



function onSuccess(position)
{
	var element = document.getElementById('geolocation');


	requestorLatitude = position.coords.latitude;
	requestorLongitude = position.coords.longitude;
	var lat = parseFloat(position.coords.latitude);
	var lng = parseFloat(position.coords.longitude);
	//var lat = parseFloat(48.850258);
	// var lng = parseFloat(2.351074);
	var latlng = new google.maps.LatLng(lat, lng);

	geocoder.geocode(
	{
		'latLng': latlng
	}, function(results, status)
	{

		if (status == google.maps.GeocoderStatus.OK)
		{
			if (results[0])
			{
				var arrAddress = results[0].address_components;
				// iterate through address_component array
				$.each(arrAddress, function(i, address_component)
				{
					if (address_component.types[0] == "locality")
					{
						console.log(address_component.long_name); // city
						//alert(address_component.long_name);
						//var zipcode = arrAddress[arrAddress.length - 1].long_name;
						//alert(zipcode);
						requestorCity = address_component.long_name;
						//alert(requestorCity);
						//document.searchForm.location.value = requestorCity;
						$("#location").val(requestorCity);
						
						
						
						console.log(address_component.long_name); // city
						//alert(address_component.long_name);
						//var zipcode = arrAddress[arrAddress.length-1].long_name;
						//alert(arrAddress.length);
						//var requestorZipcode = address_component.long_name;
						//alert(requestorZipcode);
						
						
						return false; // break
					}
					
					
					
						
					
					
					
				});
				
				
					
					
			
				
				
				
			}
			else
			{
				alert("No results found");
			}
		}
		else
		{
			alert("Geocoder failed due to: " + status);
		}
	});



}

// onError Callback receives a PositionError object
//

function onError(error)
{
	alert('code: ' + error.code + '\n' + 'message: ' + error.message + '\n');
}





function validateSearch()
{

	serviceName = document.forms["searchForm"]["service"].value;
	if (serviceName == null || serviceName == "")
	{
		alert("Service Can't be empty.");
		return false;
	}
	locationName = document.forms["searchForm"]["location"].value;
	if (locationName == null || locationName == "")
	{
		alert("Location Can't be empty.");
		return false;
	}

	return true;


}




function validate()
{



	var isValidated = validateSearch();
	if (isValidated == true)
	{
		callSearch();

	}

}


function callSearch()
{
	showLoading();
	setTimeout(function()
	{
		try
		{
			var encodedUrl = globalUrl + 'searchService.php?service=' + serviceName + '&location=' + locationName + '&latitude=' + requestorLatitude + '&longitude=' + requestorLongitude + '&city=' + requestorCity;
			load(encodedUrl);
			//alert(responseData);

			JSONObject1 = eval(responseData);
			dis = new Array();
			for (var x in JSONObject1)
			{

				dis[x] = JSONObject1[x];

			}
			if (dis.length == 0)
			{
				hideLoading();
				alert("Sorry! No results are found");
				//window.location="#search";

			}

			else
			{
				hideLoading();
				window.location = "#options";
				//initialize();
			}

		}
		catch (e)
		{
			alert(e);
		}
	}, 1000);
}


function validateLogin()
{
	username = document.forms["loginForm"]["username"].value;
	if (username == null || username == "")
	{
		alert("Username Can't be empty.");
		return false;
	}
	password = document.forms["loginForm"]["password"].value;
	if (password == null || password == "")
	{
		alert("Password Can't be empty.");
		return false;
	}
	return true;


}


function login()
{	
	var isValidated = validateLogin();
	if (isValidated == true)
	{showLoading();
		try
		{
			var encodedUrl = globalUrl + 'validateLogin.php?username=' + username + '&password=' + password + '&latitude=' + requestorLatitude + '&longitude=' + requestorLongitude;
			//	alert(encodedUrl);
			load(encodedUrl);
			//alert(value);
			//alert(responseData);
			JSONObject2 = eval(responseData);
			dis8 = new Array();
			for (var x in JSONObject2)
			{

				dis8[x] = JSONObject2[x];

			}

			//alert(dis2.length);

			if (dis8.length != 0)
			{
				//alert(dis2[0].tune);
				isLogin = 'true';
				//	alert(JSONObject2);

				//alert('Logged In');

				$("#searchlink1").html('LATEST LEADS');
				$("#searchlink1").attr("href", "#register");
				$("#searchlink2").html('MY APPOINTMENTS');
				$("#searchlink2").attr("href", "#myAppoinments");
				$("#searchlink3").html('F.A.Q. AND HELP');
				$("#searchlink3").attr("href", "#help");
				$("#searchlink4").html('SETTINGS');
				$("#searchlink4").attr("href", "#settings");
				$("#searchlink5").html('LOG-OUT');
				$("#searchlink5").attr("href", "#logout");
				$("#optionslink1").html('LATEST LEADS');
				$("#optionslink1").attr("href", "#register");
				$("#optionslink2").html('MY APPOINTMENTS');
				$("#optionslink2").attr("href", "#myAppoinments");
				$("#optionslink3").html('F.A.Q. AND HELP');
				$("#optionslink3").attr("href", "#help");
				$("#optionslink4").html('SETTINGS');
				$("#optionslink4").attr("href", "#settings");
				$("#optionslink5").html('LOG-OUT');
				$("#optionslink5").attr("href", "#logout");
				$("#getQuoteslink1").html('LATEST LEADS');
				$("#getQuoteslink1").attr("href", "#register");
				$("#getQuoteslink2").html('MY APPOINTMENTS');
				$("#getQuoteslink2").attr("href", "#myAppoinments");
				$("#getQuoteslink3").html('F.A.Q. AND HELP');
				$("#getQuoteslink3").attr("href", "#help");
				$("#getQuoteslink4").html('SETTINGS');
				$("#getQuoteslink4").attr("href", "#settings");
				$("#getQuoteslink5").html('LOG-OUT');
				$("#getQuoteslink5").attr("href", "#logout");
				$("#resultslink1").html('LATEST LEADS');
				$("#resultslink1").attr("href", "#register");
				$("#resultslink2").html('MY APPOINTMENTS');
				$("#resultslink2").attr("href", "#myAppoinments");
				$("#resultslink3").html('F.A.Q. AND HELP');
				$("#resultslink3").attr("href", "#help");
				$("#resultslink4").html('SETTINGS');
				$("#resultslink4").attr("href", "#settings");
				$("#resultslink5").html('LOG-OUT');
				$("#resultslink5").attr("href", "#logout");
				$("#successlink1").html('LATEST LEADS');
				$("#successlink1").attr("href", "#register");
				$("#successlink2").html('MY APPOINTMENTS');
				$("#successlink2").attr("href", "#myAppoinments");
				$("#successlink3").html('F.A.Q. AND HELP');
				$("#successlink3").attr("href", "#help");
				$("#successlink4").html('SETTINGS');
				$("#successlink4").attr("href", "#settings");
				$("#successlink5").html('LOG-OUT');
				$("#successlink5").attr("href", "#logout");
				setSettings();
				hideLoading();
			}
			else
			{	hideLoading();
				alert('You are not registered. Register before login.', 'Error');
				window.location = "#register";
			}



		}
		catch (e)
		{
			alert(e);
		}
	}

}




function validateInput()
{
	name = document.forms["submit3"]["name"].value;
	if (name == null || name == "")
	{
		alert("Name Can't be empty.");
		return false;
	}
	phone = document.forms["submit3"]["phone"].value;
	if (phone == null || phone == "")
	{
		alert("Phone Number Can't be empty.");
		return false;
	}
	if ((phone.length < 1) || (phone.length > 10))
	{
		alert(" Your Mobile Number must be 1 to 10 Integers");
		return false;
	}
	return true;


}


function sub3()
{

	var jsonObj = []; //declare array

	for (var i = 0;
	(i < dis.length) && (i < 3); i++)
	{
		jsonObj.push(
		{
			id: dis[i].user_id,
			name: dis[i].contact_name,
			phone: dis[i].contact_phone
		});
	}

	JSONObject2 = eval(jsonObj);
	dis2 = new Array();
	for (var x in JSONObject2)
	{

		dis2[x] = JSONObject2[x];

	}
	myJSON = JSON.stringify(dis2);
	//alert(myJSON);
	//alert(JSONObject2[0].id);
	//alert(dis2[1].id);
	var isValidated = validateInput();
	if (isValidated == true)
	{
		try
		{
			var encodedUrl = globalUrl + 'leads.php?name=' + name + '&phone=' + phone + '&city=' + requestorCity + '&ip=' + IP + '&keyword=' + serviceName + '&arr=' + myJSON;
			//alert(encodedUrl);
			//alert(dis2.length);
			load(encodedUrl);
			//alert(jsonObj[0].id);
			var ret = eval(responseData);
			//alert(inserted);
			//alert(responseData);
			//alert(ret);
			if (ret === true)
			{
				success();
			}
			else
			{
				alert("There is an Error.Please try agian.");
				window.location = "#search";
			}
		}
		catch (e)
		{
			alert(e);
		}
	}
}



function validateInput0()
{
	name = document.forms["submit0"]["name"].value;
	if (name == null || name == "")
	{
		alert("Name Can't be empty.");
		return false;
	}
	phone = document.forms["submit0"]["phone"].value;
	if (phone == null || phone == "")
	{
		alert("Phone Number Can't be empty.");
		return false;
	}
	if ((phone.length < 1) || (phone.length > 10))
	{
		alert(" Your Mobile Number must be 1 to 10 Integers");
		return false;
	}
	return true;


}

function validateInput1()
{
	name = document.forms["submit1"]["name"].value;
	if (name == null || name == "")
	{
		alert("Name Can't be empty.");
		return false;
	}
	phone = document.forms["submit1"]["phone"].value;
	if (phone == null || phone == "")
	{
		alert("Phone Number Can't be empty.");
		return false;
	}
	if ((phone.length < 1) || (phone.length > 10))
	{
		alert(" Your Mobile Number must be 1 to 10 Integers");
		return false;
	}
	return true;


}

function validateInput2()
{
	name = document.forms["submit2"]["name"].value;
	if (name == null || name == "")
	{
		alert("Name Can't be empty.");
		return false;
	}
	phone = document.forms["submit2"]["phone"].value;
	if ((phone == null) || (phone == ""))
	{
		alert("Phone Number Can't be empty.");
		return false;
	}
	if ((phone.length < 1) || (phone.length > 10))
	{
		alert(" Your Mobile Number must be 1 to 10 Integers");
		return false;
	}
	return true;


}

function sub0()
{

	var jsonObj = []; //declare array


	jsonObj.push(
	{
		id: dis[0].user_id,
		name: dis[0].contact_name,
		phone: dis[0].contact_phone
	});


	var JSONObject2 = eval(jsonObj);
	var ins2 = new Array();
	for (var x in JSONObject2)
	{

		ins2[x] = JSONObject2[x];

	}

	var myJSON = JSON.stringify(ins2);

	var isValidated = validateInput0();
	if (isValidated == true)
	{
		try
		{
			var encodedUrl = globalUrl + 'leads.php?name=' + name + '&phone=' + phone + '&city=' + requestorCity + '&ip=' + IP + '&keyword=' + serviceName + '&arr=' + myJSON;

			var ret = eval(responseData);

			if (ret === true)
			{
				success();
			}
			else
			{
				alert("There is an Error.Please try agian.");
				window.location = "#search";
			}

		}
		catch (e)
		{
			alert(e);
		}
	}
}

function sub1()
{

	var jsonObj = []; //declare array


	jsonObj.push(
	{
		id: dis[1].user_id,
		name: dis[1].contact_name,
		phone: dis[1].contact_phone
	});


	var JSONObject2 = eval(jsonObj);
	var ins3 = new Array();
	for (var x in JSONObject2)
	{

		ins3[x] = JSONObject2[x];

	}
	var myJSON = JSON.stringify(ins3);

	var isValidated = validateInput1();
	if (isValidated == true)
	{
		try
		{
			var encodedUrl = globalUrl + 'leads.php?name=' + name + '&phone=' + phone + '&city=' + requestorCity + '&ip=' + IP + '&keyword=' + serviceName + '&arr=' + myJSON;

			load(encodedUrl);

			var ret = eval(responseData);

			if (ret === true)
			{
				success();
			}
			else alert("There is an Error.Please try agian.");
			//window.location = "#search";

		}
		catch (e)
		{
			alert(e);
		}
	}
}

function sub2()
{

	var jsonObj = []; //declare array


	jsonObj.push(
	{
		id: dis[2].user_id,
		name: dis[2].contact_name,
		phone: dis[2].contact_phone
	});


	var JSONObject2 = eval(jsonObj);
	var ins4 = new Array();
	for (var x in JSONObject2)
	{

		ins4[x] = JSONObject2[x];

	}
	var myJSON = JSON.stringify(ins4);

	var isValidated = validateInput2();
	if (isValidated == true)
	{
		try
		{
			var encodedUrl = globalUrl + 'leads.php?name=' + name + '&phone=' + phone + '&city=' + requestorCity + '&ip=' + IP + '&keyword=' + serviceName + '&arr=' + myJSON;

			load(encodedUrl);

			var ret = eval(responseData);

			if (ret === true)
			{
				success();
			}
			else alert("There is an Error.Please try agian.");
			//window.location = "#search";

		}
		catch (e)
		{
			alert(e);
		}
	}
}

function success()
{
	window.location = "#success";
}

function signIn()
{ //isLogin = true;
	if (isLogin != 'false')
	{

		alert('Logged In');
		window.location = "#dashboard";



	}
	else
	{
		window.location = "#signIn";
	}
}

function logout()
{
	isLogin = 'false';
				$("#searchlink1").html('SIGN IN');
				$("#searchlink1").attr("href", "javascript:signIn()");
				$("#searchlink2").html('REGISTER YOUR BUSINESS');
				$("#searchlink2").attr("href", "#register");
				$("#searchlink3").html('HOW IT WORKS');
				$("#searchlink3").attr("href", "#how");
				$("#searchlink4").html('F.A.Q.');
				$("#searchlink4").attr("href", "#faq");
				$("#searchlink5").html('CONTACT');
				$("#searchlink5").attr("href", "#contact");
				
				$("#optionslink1").html('SIGN IN');
				$("#optionslink1").attr("href", "javascript:signIn()");
				$("#optionslink2").html('REGISTER YOUR BUSINESS');
				$("#optionslink2").attr("href", "#register");
				$("#optionslink3").html('HOW IT WORKS');
				$("#optionslink3").attr("href", "#how");
				$("#optionslink4").html('F.A.Q.');
				$("#optionslink4").attr("href", "#faq");
				$("#optionslink5").html('CONTACT');
				$("#optionslink5").attr("href", "#contact");
				
				$("#getQuoteslink1").html('SIGN IN');
				$("#getQuoteslink1").attr("href", "javascript:signIn()");
				$("#getQuoteslink2").html('REGISTER YOUR BUSINESS');
				$("#getQuoteslink2").attr("href", "#register");
				$("#getQuoteslink3").html('HOW IT WORKS');
				$("#getQuoteslink3").attr("href", "#how");
				$("#getQuoteslink4").html('F.A.Q.');
				$("#getQuoteslink4").attr("href", "#faq");
				$("#getQuoteslink5").html('CONTACT');
				$("#getQuoteslink5").attr("href", "#contact");
				
				$("#resultslink1").html('SIGN IN');
				$("#resultslink1").attr("href", "javascript:signIn()");
				$("#resultslink2").html('REGISTER YOUR BUSINESS');
				$("#resultslink2").attr("href", "#register");
				$("#resultslink3").html('HOW IT WORKS');
				$("#resultslink3").attr("href", "#how");
				$("#resultslink4").html('F.A.Q.');
				$("#resultslink4").attr("href", "#faq");
				$("#resultslink5").html('CONTACT');
				$("#resultslink5").attr("href", "#contact");
				
				$("#successlink1").html('SIGN IN');
				$("#successlink1").attr("href", "javascript:signIn()");
				$("#successlink2").html('REGISTER YOUR BUSINESS');
				$("#successlink2").attr("href", "#register");
				$("#successlink3").html('HOW IT WORKS');
				$("#successlink3").attr("href", "#how");
				$("#successlink4").html('F.A.Q.');
				$("#successlink4").attr("href", "#faq");
				$("#successlink5").html('CONTACT');
				$("#successlink5").attr("href", "#contact");
				
				
			
	window.location = "#signIn";
}

function showLoading()
{
	jQuery('#loading-image').show();

}

function hideLoading()
{
	setTimeout(function()
	{
		jQuery('#loading-image').hide();
	}, 1000);

}

function under()
{
	alert("Under Development Process");
}



function latestLeads()
{
	showLoading();
	setTimeout(function()
	{
		try
		{
			var encodedUrl = globalUrl + 'latestLeads.php?user_id=' + dis8[0].user_id;

			load(encodedUrl);
			//alert(encodedUrl);
			//alert(responseData);

			var JSONObject4 = eval(responseData);
			dis9 = new Array();
			for (var x in JSONObject4)
			{

				dis9[x] = JSONObject4[x];
				//alert(dis9[x]);
			}
			if (dis9.length == 0)
			{
				hideLoading();
				alert("No, Active Leads for you today");
				window.location = "#dashboard";

			}

			else
			{
				//	alert('in else');
				window.location = "#latestLeads";
				showLeads();
				countdown_init();
			}

		}
		catch (e)
		{
			//alert('hello');
			alert(e);
		}
	}, 2000);

}



function replacetable(clicked_id)
{
	showLoading();

	//alert( clicked_id.charAt( clicked_id.length-1 ) );

	try
	{
		var count = clicked_id.charAt(clicked_id.length - 1);
		//alert(count);

		var encodedUrl = globalUrl + 'leads_accept.php?lead_id=' + dis9[count].lead_id + '&provider_id=' + dis9[count].provider_id;
		//jalert(encodedUrl, 'alert Dialog');
		//alert(encodedUrl);
		//alert(dis2.length);
		//alert('hello');
		load(encodedUrl);
		//alert(jsonObj[0].id);
		var JSONObject5 = eval(responseData);

		for (var x in JSONObject5)
		{

			dis10 = JSONObject5[x];

		}
		if (dis10.length == 0)
		{
			hideLoading();
			alert("Somthing went wrong. Please try again");

		}
		else
		{
			//alert(dis10.requestor_name);
			//alert(clicked_id);
			hideLoading();
			var class1 = clicked_id;


			$('.' + clicked_id).replaceWith('<form style="margin-top:-5%; margin-bottom:-6%" name="submit2"><table><tr><td><input type="text" name="name" value="" id="qwe' + count + '" readonly style="width:80%;margin-bottom:1%;background-image: url(images/contacti.png);background-repeat: no-repeat;background-position-x: 8px;background-position-y: 8px;padding-left: 30px;" class="ui-shadow-inset ui-btn-corner-all ui-btn-shadow ui-input-text ui-body-c ui-corner-all"></td><td rowspan="2" style="text-align:center;padding-left:15px;"><a href="tel:' + dis10.requestor_phone + '"><img src="images/button_call_now.png" onClick="pagechange()"></a></td></tr><tr><td width="60%"><input type="text" name="phone" value="" id="qwer' + count + '" readonly style="width:80%;background-image: url(images/tele.png);background-repeat: no-repeat;background-position-x: 8px;background-position-y: 8px;padding-left: 30px;" class="ui-shadow-inset ui-btn-corner-all ui-btn-shadow ui-input-text ui-body-c ui-corner-all"></td></tr></table></form>');
			$("#qwe" + count).val(dis10.requestor_name);
			$('#qwer' + count).val(dis10.requestor_phone);
		}

	}
	catch (e)
	{
		alert(e);
	}



}

function pagechange(){
	//alert('inside pagechange');
	window.location="#bookitIn";
	}

function decline(clicked)
{
	showLoading();

	//alert( clicked_id.charAt( clicked_id.length-1 ) );

	try
	{
		var count = clicked.charAt(clicked.length - 1);
		//alert(clicked)

		var encodedUrl = globalUrl + 'leads_decline.php?lead_id=' + dis9[count].lead_id + '&provider_id=' + dis9[count].provider_id;

		load(encodedUrl);
		//alert(encodedUrl);
		var ret = eval(responseData);
		//alert(ret);
		hideLoading();
		if (ret === true)
		{
			//alert('test');
			//alert('.accept'+count);
			alert('Request has been declined');
			$('.accept' + count).hide();

		}
		else
		{
			alert('Unable to process the request this time, please try again later.');



		}

	}
	catch (e)
	{
		alert(e);
	}



}




function countdown_init()
{
	clearTimeout(countdown);
	if (dis8[0].battery_saver_mode == 1)
	{
		countdown = setTimeout('countdown_trigger()', 300000);
	}
	else
	{
		countdown = setTimeout('countdown_trigger()', 100000);
	}
	//alert('in the countdown');

}

function countdown_trigger()
{
	//latestLeads();
}


function countdown_clear()
{
	clearTimeout(countdown);
}




function validateAppointment()
{





	app_date = document.forms["appointmentForm"]["appointmentdate"].value;
	if (app_date == null || app_date == "")
	{
		alert("Appointment date Can't be empty.");
		return false;
	}
	rem_date = document.forms["appointmentForm"]["reminderdate"].value;
	if ((rem_date == null) || (rem_date == ""))
	{
		alert("Reminder date Can't be empty.");
		return false;
	}


	 appDate = new Date(Date.parse(app_date, "yyyy:MM:dd hh:mm"));
	 remDate = new Date(Date.parse(rem_date, "yyyy:MM:dd hh:mm"));
	//myDate = new Date(correctFormat);
	//alert(sDate.getTime());

	// var app_date1 = app_date.substring(0,10);
	//var rem_date1 = rem_date.substring(0,10);
	//alert(app_date1);

	//  alert(rem_date1);
	if (remDate.getTime() > appDate.getTime())
	{

		alert("Invalid Date Range!\nReminder Date cannot be after Appointment Date!");
		return false;
	}

	app_appointment1 = document.forms["appointmentForm"]["app_appointment"].value;
	if ((app_appointment1 == null) || (app_appointment1 == ""))
	{
		alert("Appiontment Can't be empty.");
		return false;
	}

	app_notes1 = document.forms["appointmentForm"]["app_notes"].value;
	if ((app_notes1 == null) || (app_notes1 == ""))
	{
		alert("Notes date Can't be empty.");
		return false;
	}



	return true;
}


function newAppointment()
{	
	var isValidated = validateAppointment();
	if (isValidated == true)
	{	showLoading();
		//alert("inside success");
		var encodedUrl = globalUrl + 'new_appointment.php?reminderdate=' + rem_date + '&appointmentdate=' + app_date + '&app_appointment=' + app_appointment1 + '&app_notes=' + app_notes1+ '&provider_id=' + dis8[0].user_id;

		load(encodedUrl);
		//alert(encodedUrl);
		var ret = eval(responseData);
		//alert(ret);
		hideLoading();
		if (ret === true)
		{
			alert('Appointment has been Inserted');
			window.location="#bookitIn";
		}
		else
		{
			alert('Unable to process the request this time, please try again later.');

		}
		
	}
}



function appointmentList()
{
	showLoading();
	setTimeout(function()
	{
		try
		{
			var encodedUrl = globalUrl + 'appointmentList.php?user_id=' + dis8[0].user_id;

			load(encodedUrl);
			//alert(encodedUrl);
			//alert(responseData);

			var JSONObject5 = eval(responseData);
			dis11 = new Array();
			for (var x in JSONObject5)
			{

				dis11[x] = JSONObject5[x];
				//alert(dis9[x]);
			}
			if (dis11.length == 0)
			{
				hideLoading();
				alert("No, Active Reminder for you");
				

			}

			else
			{
				//	alert('in else');
				window.location = "#myAppointment";
				showAppointments();
				
			}

		}
		catch (e)
		{
			//alert('hello');
			alert(e);
		}
	}, 2000);

}



function getEditReminder(userid,remid)
{	//alert(userid);
	//alert(remid);
	showLoading();
	setTimeout(function()
	{
		try
		{
			var encodedUrl = globalUrl+'getEditReminder.php?user_id='+userid+'&rem_id='+remid;

			load(encodedUrl);
			//alert(encodedUrl);
			//alert(responseData);

			var JSONObject6 = eval(responseData);
			
			dis12 = new Array();
			for (var x in JSONObject6)
			{

				dis12[x] = JSONObject6[x];
				//alert(dis9[x]);
			}
			if (dis12.length == 0)
			{
				hideLoading();
				alert("Can't process your request");
				

			}

			else
			{
				//alert('in else');
				
				showEditReminder1();
				
			}

		}
		catch (e)
		{
			//alert('hello');
			alert(e);
		}
	}, 2000);

}




function validateReminder()
{





	edit_app_date = document.forms["editReminderForm"]["edit_appointmentdate"].value;
	if (edit_app_date == null || edit_app_date == "")
	{
		alert("Appointment date Can't be empty.");
		return false;
	}
	edit_rem_date = document.forms["editReminderForm"]["edit_reminderdate"].value;
	if ((edit_rem_date == null) || (edit_rem_date == ""))
	{
		alert("Reminder date Can't be empty.");
		return false;
	}


	 edit_appDate = new Date(Date.parse(edit_app_date, "yyyy:MM:dd hh:mm"));
	 edit_remDate = new Date(Date.parse(edit_rem_date, "yyyy:MM:dd hh:mm"));
	//myDate = new Date(correctFormat);
	//alert(sDate.getTime());

	// var app_date1 = app_date.substring(0,10);
	//var rem_date1 = rem_date.substring(0,10);
	//alert(app_date1);

	//  alert(rem_date1);
	if (edit_remDate.getTime() > edit_appDate.getTime())
	{

		alert("Invalid Date Range!\nReminder Date cannot be after Appointment Date!");
		return false;
	}

	edit_app_appointment1 = document.forms["editReminderForm"]["edit_app_appointment"].value;
	if ((edit_app_appointment1 == null) || (edit_app_appointment1 == ""))
	{
		alert("Appiontment Can't be empty.");
		return false;
	}

	edit_app_notes1 = document.forms["editReminderForm"]["edit_app_notes"].value;
	if ((edit_app_notes1 == null) || (edit_app_notes1 == ""))
	{
		alert("Notes date Can't be empty.");
		return false;
	}



	return true;
}





function editReminder()
{	showLoading();
	//alert('inside edit reminder');
	var isValidated = validateReminder();
	if (isValidated == true)
	{
	//	alert("after validation success");
		var encodedUrl = globalUrl + 'reminderEdit.php?reminderdate=' + edit_rem_date + '&appointmentdate=' + edit_app_date + '&app_appointment=' + edit_app_appointment1 + '&app_notes=' + edit_app_notes1+ '&provider_id=' + dis8[0].user_id+ '&rem_id=' + dis12[0].rem_id;

		load(encodedUrl);
		//alert(encodedUrl);
		var ret = eval(responseData);
		//alert(ret);
		hideLoading();
		if (ret === true)
		{
			alert('Appointment has been Updated');
			appointmentList();
		}
		else
		{
			alert('Unable to process the request this time, please try again later.');

		}
		
	}
}

function deleteReminder()
{		showLoading();
	//alert('inside edit reminder');
	
	
	//	alert("after validation success");
		var encodedUrl = globalUrl + 'appointment_delete.php?&rem_id=' + dis11[0].rem_id;

		load(encodedUrl);
		//alert(encodedUrl);
		var ret = eval(responseData);
		//alert(ret);
		hideLoading();
		if (ret === true)
		{
			alert('Appointment has been Deleted');
			appointmentList();
		}
		else
		{
			alert('Unable to process the request this time, please try again later.');

		}
		
	
}

function saveSettings(){
	showLoading();
	var notification = document.forms["settingsForm"]["notification"].value;
	var tune = document.forms["settingsForm"]["tune"].value;
	var alarm = document.forms["settingsForm"]["alarm"].value;
	var battery_saver = document.forms["settingsForm"]["battery_saver"].value;
	var volume = document.forms["settingsForm"]["volume"].value;
	
	var encodedUrl = globalUrl + 'settingsUpdate.php?notification=' + notification + '&tune=' + tune + '&alarm=' + alarm + '&battery_saver=' + battery_saver+ '&volume=' + volume+ '&provider_id=' + dis8[0].user_id;

		load(encodedUrl);
		//alert(encodedUrl);
		var ret = eval(responseData);
		//alert(ret);
		hideLoading();
		if (ret === true)
		{
			alert('Settings have been Saved');
			window.location="#dashboard";
		}
		else
		{
			alert('Unable to process the request this time, please try again later.');

		}
		

	
	
	}