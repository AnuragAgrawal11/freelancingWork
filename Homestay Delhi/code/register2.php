<?php
session_start();
if($_SESSION['login']!=1)
{
header('Location:404/404 Page.htm');
	echo "Access Denied...";
}
else
{
include "connect.php";
$query="SELECT * FROM profile WHERE user_name='".$_SESSION['user']."'";
$result=mysql_query($query);
$row=mysql_fetch_row($result);
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
e..email.select();
}
return returnval;
}

</script>










<script language="JavaScript">


function formCheck(formobj){
	// Enter name of mandatory fields
	var fieldRequired = Array("accomodation_type","max_person","price","price_type","food","food_type","occupation","qualification","languages_known","news_client","verification");
	// Enter field description to appear in the dialog box
	var fieldDescription = Array("accomodation_type","max_person","price","price_type","food","food_type","occupation","qualification","languages_known","news_client","verification");
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
		  	return true;	  
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
if (isset($_REQUEST['Submit'])) 
{

session_start(); 
$key=substr($_SESSION['key'],0,5);
if ($_POST["vercode"] != $key || $key=='') { 
     
	 //header("Location:signup.php");
     //exit();
	 echo  $key.' '.$_POST["vercode"].'<strong>Incorrect verification code.</strong><br>'; 
	 
	 return false ;
} else { 
     // add form data processing code here 
     echo  '<strong>Verification successful.</strong><br>'; 
};


$query = "DELETE FROM profile WHERE user_name='".$_SESSION['user']."'";
$result = mysql_query($query);











		


# THIS CODE TELL MYSQL TO INSERT THE DATA FROM THE FORM INTO YOUR MYSQL TABLE
//$sel="select * from table1 where user_name='".$_REQUEST['user_name']."'";
//$exe=mysql_query($sel);
//$no=mysql_num_rows($exe);
//if($no==1)
/*	{
	echo "<script language='javascript'>alert('Username already exist')</script>";
	        

	}*/
$sql = "INSERT INTO profile values ('".mysql_real_escape_string(stripslashes($_REQUEST['accomodation_type']))."','".mysql_real_escape_string(stripslashes($_REQUEST['max_person']))."','".mysql_real_escape_string(stripslashes($_REQUEST['price']))."','".mysql_real_escape_string(stripslashes($_REQUEST['price_type']))."','".mysql_real_escape_string(stripslashes($_REQUEST['food']))."','".mysql_real_escape_string(stripslashes($_REQUEST['food_type']))."','".mysql_real_escape_string(stripslashes($_REQUEST['description']))."','".mysql_real_escape_string(stripslashes($_REQUEST['occupation']))."','".mysql_real_escape_string(stripslashes($_REQUEST['qualification']))."','".mysql_real_escape_string(stripslashes($_REQUEST['languages_known']))."','".mysql_real_escape_string(stripslashes($_REQUEST['state']))."','".mysql_real_escape_string(stripslashes($_REQUEST['city']))."','".mysql_real_escape_string(stripslashes($_REQUEST['news_client']))."','verified','".$_SESSION['user']."')";
echo "<br><br>".$sql;
if($result = mysql_query($sql ,$db)) {
echo "<script type='text/javascript'>alert('Thanks for filling your profile details...')</script> '";

} else {
echo "ERROR: ".mysql_error();
}
} else {
?>
<form id="form" name="form" method="post" action="" onSubmit="return formCheck(this);">
  
 <p>
    <label><font size="3">Accomodation Type :  &nbsp;&nbsp;&nbsp;</font>
	
    <select name="accomodation_type" style="width:45%">
      <option value="Independent House / Bunglow " <?php if($row[0]=='Independent House / Bunglow')echo 'selected="selected"';?>>Independent House / Bunglow </option>
      <option value="Flat / Multistorey" <?php if($row[0]=='Flat / Multistorey')echo 'selected="selected"';?>>Flat / Multistorey</option>
	  <option value="Rooms" <?php if($row[0]=='Rooms')echo 'selected="selected"';?>>Rooms</option>
	  <option value="Cottages" <?php if($row[0]=='Cottages')echo 'selected="selected"';?>>Cottages</option>
	  <option value="Hut" <?php if($row[0]=='Hut')echo 'selected="selected"';?>>Hut</option>
	  <option value="Traditional House" <?php if($row[0]=='Traditional House')echo 'selected="selected"';?>>Traditional House</option>
	  </select>
	  
	</label>
  </p>

  
  <p>
    <label><font size="3">Maximum Person : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <select name="max_person" style="width:10%">
      <option value="1" <?php if($row[1]=='1')echo 'selected="selected"';?>> 1</option>
      <option value="2" <?php if($row[1]=='2')echo 'selected="selected"';?>> 2</option>
	  <option value="3" <?php if($row[1]=='3')echo 'selected="selected"';?>> 3</option>
	  <option value="4" <?php if($row[1]=='4')echo 'selected="selected"';?>>4</option>
	  <option value="5" <?php if($row[1]=='5')echo 'selected="selected"';?>>5</option>
	  <option value="6" <?php if($row[1]=='6')echo 'selected="selected"';?>>6</option>
	  <option value="7" <?php if($row[1]=='7')echo 'selected="selected"';?>>7</option>
	  <option value="8" <?php if($row[1]=='8')echo 'selected="selected"';?>>8</option>
	  <option value="9" <?php if($row[1]=='9')echo 'selected="selected"';?>>9</option>
	  <option value="10" <?php if($row[1]=='10')echo 'selected="selected"';?>>10</option>
    </select>
	</label>
  </p>
  <p>
    <label><font size="3">Price Range : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <select name="price">
      <option <?php if($row[2]=='0,000-5,000 INR')echo 'selected="selected"';?>>0,000-5,000 INR</option>
      <option <?php if($row[2]=='5,001-10,000 INR')echo 'selected="selected"';?>>5,001-10,000 INR</option>
	   <option <?php if($row[2]=='10,001-20,000 INR')echo 'selected="selected"';?>>10,001-20,000 INR</option>
	    <option <?php if($row[2]=='20,001-30,000 INR')echo 'selected="selected"';?>>20,001-30,000 INR</option>
		<option <?php if($row[2]=='30,001-40,000 INR')echo 'selected="selected"';?>>30,001-40,000 INR</option>
		<option <?php if($row[2]=='40,001-50,000 INR')echo 'selected="selected"';?>>40,001-50,000 INR</option>
		<option <?php if($row[2]=='Above 50,000 INR')echo 'selected="selected"';?>>Above 50,000 INR</option>
    </select>
	</label>
  </p>
  <p>
    <label><font size="3">Price Type : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <select name="price_type" style="width:35%">
      <option <?php if($row[3]=='Negotiable')echo 'selected="selected"';?>>Negotiable</option>
      <option <?php if($row[3]=='Fixed')echo 'selected="selected"';?>>Fixed</option>
    </select>
    </label>
  </p>
  <p>
    <label><font size="3">Food :</font><font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <select name="food">
      <option>Cuisine</option>
      <option>Staple food</option>
    </select>
    </label>
  </p>
  <p>
    <label><font size="3">Food Type </font><font size="3">:</font><font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <select name="food_type" style="width:14%">
      <option <?php if($row[5]=='Veg')echo 'selected="selected"';?> >Veg</option>
      <option <?php if($row[5]=='Non-Veg')echo 'selected="selected"';?>>Non-veg</option>
    </select>
    </label>
    
  </p>
  
  <p>
    <font size="3">About Me :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description</font><br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php
if($_SESSION['login']==1)
{
//	echo $row[6];
	echo '<textarea name="description" rows="3" cols="40">'.$row[6].'</textarea>';
}
else
{?>
	<textarea name="description" rows="3" cols="40"></textarea> 
	<?php
}
?>
    </p>
  
 
 <p>
    <label><font size="3">Occupation : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <select name="occupation" style="width:45%">
      <option <?php if($row[7]=='Agriculture')echo 'selected="selected"';?>> Agriculture</option>
      <option <?php if($row[7]=='Arts')echo 'selected="selected"';?>> Arts</option>
	  <option <?php if($row[7]=='Construction')echo 'selected="selected"';?>> Construction</option>
	  <option <?php if($row[7]=='Consumer Goods')echo 'selected="selected"';?>>Consumer Goods</option>
	  <option <?php if($row[7]=='Corporate Services')echo 'selected="selected"';?>>Corporate Services</option>
	  <option <?php if($row[7]=='Education')echo 'selected="selected"';?>>Education</option>
	  <option <?php if($row[7]=='Finance')echo 'selected="selected"';?>>Finance</option>
	  <option <?php if($row[7]=='Government')echo 'selected="selected"';?>>Government</option>
	  <option <?php if($row[7]=='High-Tech')echo 'selected="selected"';?>>High-Tech</option>
	  <option <?php if($row[7]=='Legal')echo 'selected="selected"';?>>Legal</option>
	  <option <?php if($row[7]=='Manufacturing')echo 'selected="selected"';?>>Manufacturing</option>
	  <option <?php if($row[7]=='Media')echo 'selected="selected"';?>>Media</option>
	  <option <?php if($row[7]=='Medical And Health Care')echo 'selected="selected"';?>>Medical And Health Care</option>
	  <option <?php if($row[7]=='Non-Profit')echo 'selected="selected"';?>>Non-Profit</option>
	  <option <?php if($row[7]=='Recreation,Travel And Entertainment')echo 'selected="selected"';?>>Recreation,Travel And Entertainment</option>
	  <option <?php if($row[7]=='Scientific')echo 'selected="selected"';?>>Scientific</option>
	  <option <?php if($row[7]=='Service Industry')echo 'selected="selected"';?>>Service Industry</option>
	  <option <?php if($row[7]=='Transportation')echo 'selected="selected"';?>>Transportation</option>
    </select>
	</label>
  </p>
  <p>
    <label><font size="3">Qualification : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <select name="qualification" style="width:45%">
      <option value="0" <?php if($row[8]=='Elementary')echo 'selected="selected"';?>>Elementary</option>
      <option value="1" <?php if($row[8]=='High School')echo 'selected="selected"';?>>High School</option>
	  <option value="2" <?php if($row[8]=='Some College')echo 'selected="selected"';?>>Some College</option>
	  <option value="3" <?php if($row[8]=='Associates Degree')echo 'selected="selected"';?>>Associates Degree</option>
	  <option value="4" <?php if($row[8]=='Bachelor\'s Degree')echo 'selected="selected"';?>>Bachelor's Degree</option>
	  <option value="5" <?php if($row[8]=='Master\'s Degree')echo 'selected="selected"';?>>Master's Degree</option>
	  <option value="6" <?php if($row[8]=='Ph.D')echo 'selected="selected"';?>>Ph.D</option>
	  <option value="7" <?php if($row[8]=='Postdoctral')echo 'selected="selected"';?>>Postdoctral</option>
	  </select>
	  </label>
	  </p>
  <p>
    <label><font size="3">Languages Known : </font><font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <?php
if($_SESSION['login']==1)
{
//	echo $row[6];
	echo '<input type="text" name="languages_known" size="40" value="'.$row[9].'">';
}
else
{?>
	<input type="text" name="languages_known" size="40" />
	<?php
}
?>
    </label>
  </p>
  <p>
    <label><font size="3">State: </font><font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <select name="state">
	<option value="Andaman Nicobar Islands" <?php if($row[10]=='Andaman Nicobar Islands')echo 'selected="selected"';?>>Andaman Nicobar Islands</option>
    <option value="Andhra Pradesh" <?php if($row[10]=='Andhra Pradesh')echo 'selected="selected"';?>>Andhra Pradesh</option>
    <option value="Arunanchal Pradesh" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Arunanchal Pradesh</option>
    <option value="Assam" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Assam</option>
    <option value="Bihar" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Bihar</option>
    <option value="Chattisgarh" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Chattisgarh</option>
    <option value="Delhi" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Delhi</option>
    <option value="Goa" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Goa</option>
    <option value="Gujrat" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Gujrat</option>
    <option value="Haryana" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Haryana</option>
    <option value="Himachal Pradesh" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Himachal Pradesh</option>
    <option value="Gujrat" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Gujrat</option>
    <option value="Jammu And Kashmir" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Jammu And Kashmir</option>
    <option value="Jharkhand" <?php if($row[10]=='Jharkhand')echo 'selected="selected"';?>>Jharkhand</option>
    <option value="Karnataka" <?php if($row[10]=='Karnataka')echo 'selected="selected"';?>>Karnataka</option>
    <option value="Kerala" <?php if($row[10]=='Kerala')echo 'selected="selected"';?>>Kerala</option>
    <option value="Lakshadweep" <?php if($row[10]=='Lakshadweep')echo 'selected="selected"';?>>Lakshadweep</option>
    <option value="Madhya  Pradesh" <?php if($row[10]=='Madhya  Pradesh')echo 'selected="selected"';?>>Madhya  Pradesh</option>
    <option value="Maharashtra" <?php if($row[10]=='Maharashtra')echo 'selected="selected"';?>>Maharashtra</option>
    <option value="Mianipur" <?php if($row[10]=='Manipur')echo 'selected="selected"';?>>Manipur</option>
    <option value="Meghalaya" <?php if($row[10]=='Meghalaya')echo 'selected="selected"';?>>Meghalaya</option>
    <option value="Mizoram" <?php if($row[10]=='Mizoram')echo 'selected="selected"';?>>Mizoram</option>
    <option value="Nagaland" <?php if($row[10]=='Nagaland')echo 'selected="selected"';?>>Nagaland</option>
    <option value="Orissa" <?php if($row[10]=='Orissa')echo 'selected="selected"';?>>Orissa</option>
    <option value="Pondichery" <?php if($row[10]=='Pondichery')echo 'selected="selected"';?>>Pondichery</option>
    <option value="Punjab" <?php if($row[10]=='Postdoctral')echo 'selected="selected"';?>>Punjab</option>
    <option value="Rajasthan" <?php if($row[10]=='Rajasthan')echo 'selected="selected"';?>>Rajasthan</option>
    <option value="Sikkim" <?php if($row[10]=='Sikkim')echo 'selected="selected"';?>>Sikkim</option>
    <option value="Tamilnadu" <?php if($row[10]=='Tamilnadu')echo 'selected="selected"';?>>Tamilnadu</option>
    <option value="Tripura" <?php if($row[10]=='Tripura')echo 'selected="selected"';?>>Tripura</option>
    <option value="Uttaranchal" <?php if($row[10]=='Uttaranchal')echo 'selected="selected"';?>>Uttaranchal</option>
    <option value="Uttar Pradesh" <?php if($row[10]=='Uttar Pradesh')echo 'selected="selected"';?>>Uttar Pradesh</option>
    <option value="West Bengal" <?php if($row[10]=='West Bengal')echo 'selected="selected"';?>>West Bengal</option>
  </select>
    </label>
  </p>
  <p>
    <label><font size="3">City: </font><font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
	<select name="city">
    <option value="Agra" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Agra</option>
	<option value="Agartala" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Agartala </option>
	<option value="Ahmedabad" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Ahmedabad</option>
	 <option value="Aizawl" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Aizawl </option>
	 <option value="Ajmer" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Ajmer</option>
	 <option value="Allahabad" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Allahabad</option>
     <option value="Alleppey" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Alleppey</option>
     <option value="Alwar" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Alwar</option>
    <option value="Amritsar" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Amritsar</option>
    <option value="Aurangabad" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Aurangabad</option>
	<option value="Bangalore" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Bangalore </option>
	<option value="Bhopal" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Bhopal </option>
	<option value="Bhubaneswar" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Bhubaneswar </option>
	 <option value="Bikaner" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Bikaner</option>
	 <option value="Bundi" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Bundi</option>
	 <option value="16" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Canacona</option>
     <option value="17" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Chandigarh</option>
     <option value="18" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Chennai </option>
    <option value="19" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Cochin</option>
    <option value="20" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Coimbatore</option>
	<option value="21" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Cuttack</option>
	<option value="22" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Darjeeling</option>
	<option value="23" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Dehradun </option>
	 <option value="24" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Dhanbad</option>
	 <option value="25" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Dharmshala</option>
	 <option value="26" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Dispur </option>
     <option value="27" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Durgapur</option>
     <option value="28" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Faridabad</option>
    <option value="29" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Gandhinagar </option>
    <option value="30" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Gangtok </option>
	<option value="31" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Gaya</option>
	<option value="32" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Gulmarg</option>
	<option value="33" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Gurgaon</option>
	 <option value="34" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Guwahati</option>
	 <option value="35" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Gwalior</option>
	 <option value="36" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Hampi</option>
     <option value="37" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Hassan</option>
     <option value="38" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Hyderabad </option>
    <option value="39" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Imphal </option>
    <option value="40" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Indore </option>
	<option value="41" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Itanagar </option>
	<option value="42" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Jaipur </option>
	<option value="43" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Jaisalmer</option>
	 <option value="44" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Jammu </option>
	 <option value="45" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Jamshedpur</option>
	 <option value="46" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Jodhpur</option>
     <option value="47" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Kanyakumari</option>
     <option value="48" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Khajuraho</option>
    <option value="49"<?php if($row[11]='West Bengal')echo 'selected="selected"';?>>Kodaikanal</option>
    <option value="50" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Kohima</option>
	<option value="51" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Kolkata</option>
	<option value="52" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Konark</option>
	<option value="53"<?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Kovalam</option>
	 <option value="54"<?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Kozhikode</option>
	 <option value="55" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Kullu</option>
	 <option value="56"<?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Kumarakom</option>
     <option value="57" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Ladakh</option>
     <option value="58" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?> >Leh</option>
    <option value="59"<?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Lucknow</option>
    <option value="60" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Ludhiana</option>
	<option value="61" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Madurai</option>
	<option value="62" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Manali</option>
	<option value="63" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Mangalore</option>
	 <option value="64" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Margao</option>
	 <option value="65" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Mumbai</option>
     <option value="66" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Munnar</option>
     <option value="67" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Murshidabad</option>
    <option value="68" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Mysore</option>
    <option value="69" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Nagpur</option>
	<option value="70" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Nainital</option>
    <option value="71" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Nalanda</option>
	<option value="72" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Old Goa</option>
	<option value="73" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Ooty</option>
	<option value="74" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Orchha</option>
	 <option value="75" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Pahalgam</option>
	 <option value="76" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Panaji</option>
	 <option value="77" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Patiala</option>
     <option value="78" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Patna</option>
     <option value="79" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Ponda</option>
    <option value="80" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Pune</option>
    <option value="81" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Puri</option>
	<option value="82" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Quilon</option>
    <option value="83" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Rajgir</option>
	<option value="84" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Rameshwaram</option>
	<option value="85" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Ranakpur</option>
	<option value="86" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Ranchi</option>
	<option value="87" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Rishikesh-Haridwar</option>
	 <option value="88" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Shekhawati</option>
	 <option value="89" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Shillong</option>
	 <option value="90" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Shimla</option>
     <option value="91" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Srinagar</option>
     <option value="92" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Surat</option>
    <option value="93" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Tezpur</option>
    <option value="94" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Thanjavur</option>
	<option value="95" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Thekkady</option>
	 <option value="96" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Tirupati</option>
	 <option value="97" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Trichy</option>
	 <option value="98" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Trivandrum</option>
     <option value="99" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Udaipur</option>
     <option value="100" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Udupi</option>
    <option value="101" <?php if($row[11]=='West Bengal')echo 'selected="selected"';?>>Vadodara</option>
    <option value="Vaishali" <?php if($row[11]=='Vaishali')echo 'selected="selected"';?>>Vaishali</option>
	<option value="Varanasi" <?php if($row[11]=='Varanasi')echo 'selected="selected"';?>>Varanasi</option>
	<option value="Vasco Da Gama" <?php if($row[11]=='Vasco Da Gama')echo 'selected="selected"';?>>Vasco Da Gama</option>
	 <option value="Vijayawada" <?php if($row[11]=='Vijayawada')echo 'selected="selected"';?>>Vijayawada</option>
	 <option value="Visakhapatnam" <?php if($row[11]=='Visakhapatnam')echo 'selected="selected"';?>>Visakhapatnam</option>
	 <option value="Warangal" <?php if($row[11]=='Warangal')echo 'selected="selected"';?>>Warangal</option>
  </select>
    </label>
  </p>
  
 
   <p>
    <font size="3">Message For Client :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Message</font><br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php
if($_SESSION['login']==1)
{
//	echo $row[6];
	echo '<textarea name="news_client" rows="3" cols="40">'.$row[12].'</textarea>';
}
else
{?>
	<textarea name="news_client" rows="3" cols="40"></textarea> 
	<?php
}
?>
	
	
    </p>
  
      

 

	<p>
    
	
	 
<font size="3">Enter Code </font> &nbsp;<img src="captcha.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="vercode" size="40"/><br> 
<br/><br/>
 

	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label>
	    <input type="submit" name="Submit" value="Submit" style="width:120px "/>
    </label>
  </p>
</form>
<?php
}
}
?>
</body>
</html>
