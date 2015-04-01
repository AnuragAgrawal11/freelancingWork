<?php

$hostname = "localhost"; // usually is localhost, but if not sure, check with your hosting company, if you are with webune leave as localhost
$db_user = "root"; // change to your database password
$db_password = ""; // change to your database password
$database = "studio"; // provide your database name
$db_table = "member_info"; // leave this as is


# STOP HERE
####################################################################
# THIS CODE IS USED TO CONNECT TO THE MYSQL DATABASE
$db = mysql_connect($hostname, $db_user, $db_password);
mysql_select_db($database,$db);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript">
//alert ("Hello");
function checkform(form)
{
	if(form.password.value!=form.re_pass.value)
	{
	alert("password did not match");
	return false ;
	}
	else
		return true; 
	
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">



var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i

function checkmail(e){
var returnval=emailfilter.test(e.email.value);
if (returnval==false){
alert("Please enter a valid email address.");
e.email.select();
}
return returnval;
}

</script>

<script language="JavaScript">


function formCheck(formobj){
	// Enter name of mandatory fields
	var fieldRequired = Array("user_name", "password","re_pass","roll_no","gender","contact","email","hostel_no","room_no");
	// Enter field description to appear in the dialog box
	var fieldDescription = Array("user_name", "password","re_pass","roll_no","gender","contact","email","hostel_no","room_no");
		// dialog message
	var alertMsg = "Please complete the following fields:\n";
	
	var l_Msg = alertMsg.length;
	
	for (var i = 0; i < fieldRequired.length; i++){
		var obj = formobj.elements[fieldRequired[i]];
		if (obj){
			switch(obj.type){
			case "select-one":
				if (obj.selectedIndex == -1 || obj.options[obj.selectedIndex].text == ""){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "select-multiple":
				if (obj.selectedIndex == -1){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			case "text":
			case "textarea":
			case "password":
				if (obj.value == "" || obj.value == null){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
				break;
			default:
			}
			if (obj.type == undefined){
				var blnchecked = false;
				for (var j = 0; j < obj.length; j++){
					if (obj[j].checked){
						blnchecked = true;
					}
				}
				if (!blnchecked){
					alertMsg += " - " + fieldDescription[i] + "\n";
				}
			}
		}
	}

	if (alertMsg.length == l_Msg)
	{
	   if(checkform(formobj))
	   {
	   	  if(checkmail(formobj))
		  {//alert('jakfjdklsj');
		  	return true;
		  }
		  else
		  {
		  	return false;  
		 }
	  }
	  else
	  {
	  	return false;
	   }  
	}
	else{
			alert(alertMsg);
			return false;
	}
	  
}
// -->
</script>


<?php
if (isset($_REQUEST['Submit'])) {
$sel="select * from member_info where user_name='".$_REQUEST['user_name']."'";
	$exe=mysql_query($sel);
	$no=mysql_num_rows($exe);
if($no==1)
	{
	  echo "<script language='javascript'>alert('Username already exist') ;</script>";
	        

	}
	
	//Code to send the mail
	
	

$to = "rockingsanjay90@gmail.com";
$subject = "Member Registration Brain Of India";

$email = $_REQUEST['email'] ;
$contact_no = $_REQUEST['contact_no'] ;
$name=$_REQUEST['student_name'];
$username=$_REQUEST['user_name'];
$state=$_REQUEST['state'];
$departmentname=$_REQUEST['d_name'];
$departmentyear=$_REQUEST['d_year'];
$address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$institute=$_REQUEST['institute'];
$message="Name :$name \n E-mail :$email\n Contact Number :$contact_no\n Username: $username\n State: $state \n DepartmentName: $departmentname\n Year: $departmentyear\n Address: $address\n Gender: $gender\n Institute Name: $institute" ;
$headers = "From: $email";

$sent = mail($to, $subject, $message, $headers) ;
if($sent)
{print "Your mail was sent successfully"; }
else
{print "We encountered an error sending your mail"; }


	
	
	
	
	
	
	
	
	
	
	
	
# THIS CODE TELL MYSQL TO INSERT THE DATA FROM THE FORM INTO YOUR MYSQL TABLE
$sql = "INSERT INTO $db_table(student_name,user_name,user_pass,date_birth,state,institute,d_name,d_year,email,contact_no,address,gender) values ('".mysql_real_escape_string(stripslashes($_REQUEST['student_name']))."','".mysql_real_escape_string(stripslashes($_REQUEST['user_name']))."','".mysql_real_escape_string(stripslashes($_REQUEST['user_pass']))."','".mysql_real_escape_string(stripslashes($_REQUEST['date_birth']))."','".mysql_real_escape_string(stripslashes($_REQUEST['state']))."','".mysql_real_escape_string(stripslashes($_REQUEST['institute']))."','".mysql_real_escape_string(stripslashes($_REQUEST['d_name']))."','".mysql_real_escape_string(stripslashes($_REQUEST['d_year']))."','".mysql_real_escape_string(stripslashes($_REQUEST['email']))."','".mysql_real_escape_string(stripslashes($_REQUEST['contact_no']))."','".mysql_real_escape_string(stripslashes($_REQUEST['address']))."','".mysql_real_escape_string(stripslashes($_REQUEST['gender']))."')";
if($result = mysql_query($sql ,$db)) {
echo '<h1>Thank you</h1>Your information has been entered into our database<br>';
} else {
echo "ERROR: ".mysql_error();
}
} else {
?>
<form name="form" id="form" action="" method="post" enctype="multipart/form-data" onSubmit="return formCheck(this);">
<table width="40%" border="0" cellpadding="0" cellspacing="0" >
<tr>
<td height="38" nowrap="nowrap">Name</td>
<td nowrap="nowrap" width="297" ><input type="text" name="student_name" value=""/></td>
</tr>

<tr>
<td height="38" nowrap="nowrap">Gender</td>
<td nowrap="nowrap" width="297" ><select name="gender" style="width:25%">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select></td>

</tr>
<tr>
<td nowrap="nowrap">Date Of Birth</td>
<td nowrap="nowrap" height="38" ><input type="text" name="date_birth" value=""/></td>
</tr>
<tr>
<td height="38" nowrap="nowrap">State</td>
<td nowrap="nowrap" width="297" ><select name="state" style="width:55%"><option value="">- Select a State -</option>
        <option >Andra Pradesh</option>
        <option value="2">Arunachal Pradesh</option>
        <option value="3">Assam</option>
        <option value="4">Bihar</option>
        <option value="5">Chhattisgarh</option>
        <option value="6">Goa</option>
        <option value="7">Gujarat</option>
        <option value="8">Haryana</option>
        <option value="9">Himachal Pradesh</option>
        <option value="10">Jammu and Kashmir</option>
        <option value="11">Jharkhand</option>
        <option value="12">Karnataka</option>
        <option value="13">Kerala</option>
        <option value="14">Madya Pradesh</option>
        <option value="15">Maharashtra</option>
        <option value="16">Manipur</option>
        <option value="17">Meghalaya</option>
        <option value="18">Mizoram</option>
        <option value="19">Nagaland</option>
        <option value="20">Orissa</option>
        <option value="21">Punjab</option>
        <option value="22">Rajasthan</option>
        <option value="23">Sikkim</option>
        <option value="24">Tamil Nadu</option>
        <option value="25">Tripura</option>
        <option value="26">Uttar Pradesh</option>
        <option value="27">West Bengal</option>
        <option value="28">Delhi</option>
        <option value="29">Pondicherry</option>
        <option value="30">Lakshadeep</option>
        <option value="31">Daman and Diu</option>
        <option value="32">Dadar and Nagar Haveli</option>
        <option value="33">Chandigarh</option>
        <option value="34">Andaman and Nicobar Islands</option>
        <option value="35">Uttaranchal</option></select></td>
</tr>
<tr>
<td height="38" nowrap="nowrap">Department Name</td>
<td nowrap="nowrap" width="297" ><input type="text" name="d_name" value=""/></td>
</tr>
<tr>
<td height="38" nowrap="nowrap">Department Year</td>
<td nowrap="nowrap" width="297" ><select name="d_year">
            <option selected="selected" value=""> (Select Year) </option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
          </select></td>
</tr>
<tr>
<td height="38" nowrap="nowrap">Kshitij Username</td>
<td nowrap="nowrap" width="297" ><input type="text" name="user_name" value=""/></td>
</tr>
<tr>
<td height="38" nowrap="nowrap">Email</td>
<td nowrap="nowrap" width="297" ><input type="text" name="email" value=""/></td>
</tr>
<tr>
<td height="38" nowrap="nowrap">Password</td>
<td nowrap="nowrap" width="297" ><input type="password" name="user_pass" value=""/></td>
</tr>
<tr>
<td height="38" nowrap="nowrap">Re-Enter Password</td>
<td nowrap="nowrap" width="297" ><input type="password" name="" value=""/></td>
</tr>
<tr>
<td height="38" nowrap="nowrap">Contact Number</td>
<td nowrap="nowrap" width="297" ><input tpe="text" name="contact_no" value=""/></td>
</tr><tr>
<td height="38" nowrap="nowrap">Home Address</td>
<td nowrap="nowrap" width="297" ><textarea name="address" rows="4" cols="30" ></textarea></td>
</tr>
<tr>
<td height="38" nowrap="nowrap">Enter code</td>
<td nowrap="nowrap" width="297" ><img src="captcha.php"><input type="text" name="vercode" size="20"/></td>
</tr>
<tr>
<td height="38" nowrap="nowrap"></td>
<td nowrap="nowrap" width="297" ><input type="submit" name="Submit" value="Submit"/></td>
</tr>
</table>
</form>
<?php
}
?>