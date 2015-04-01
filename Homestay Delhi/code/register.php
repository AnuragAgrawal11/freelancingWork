<?php session_start(); ?>
<?php
include("connect.php");
session_start();

if($_SESSION['login']==1)
	{
$query="SELECT * FROM personal WHERE user_name='".$_SESSION['user']."'";
$result=mysql_query($query);
$row=mysql_fetch_row($result);
	}
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
	var fieldRequired = Array("user_name", "password","re_pass","age","gender","contact","email","address_line1","city","state","country","zip_code");
	// Enter field description to appear in the dialog box
	var fieldDescription = Array("user_name", "password","re_pass","age","gender","contact","email","address_line1","city","state","country","zip_code");
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
if (isset($_REQUEST['Submit'])) 
{

session_start(); 
$key=substr($_SESSION['key'],0,5);
if ($_POST["vercode"] != $key || $key=='')  { 
     
	 //header("Location:signup.php");
     //exit();
	 echo  $key.' '.$_POST["vercode"].'<strong>Incorrect verification code.</strong><br>'; 
	 
	 return false ;
} else { 
     // add form data processing code here 
     echo  '<strong>Verification successful.</strong><br>'; 
}
if($_SESSION['login']==1)
{
	$query = "DELETE FROM personal WHERE user_name='".$_SESSION['user']."'";
	$result = mysql_query($query);
}
	$sel="select * from personal where user_name='".$_REQUEST['user_name']."'";
	$exe=mysql_query($sel);
	$no=mysql_num_rows($exe);
if($no==1)
	{
	  echo "<script language='javascript'>alert('Username already exist') ;</script>";
	        

	}
	
	//file ...
	//echo $_FILES["file"]["type"]."<br>";
	if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/pjpeg")|| ($_FILES["file"]["type"] == "image/png")|| ($_FILES["file"]["type"] == "image/bmp")|| ($_FILES["file"]["type"] == "image/tif")|| ($_FILES["file"]["type"] == "image/psd"))
&& ($_FILES["file"]["size"] < 1500000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("./uploaded/".$_REQUEST['user_name'].$_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
	  $t=$_FILES["file"]["type"];
	  $t1=explode("/",$t,2);
	  $type=".".$t1[1];
	  if($type==".jpeg"||$type==".pjpeg")
	    $type=".jpg";
	  //echo "<br><br>".$t1[1]."<br>";
       move_uploaded_file($_FILES["file"]["tmp_name"],"./uploaded/".$_REQUEST['user_name'].$type);
	 // $_FILES["file"]["name"]=$_REQUEST['user_name'].$type;
      echo "Stored in: " . "/uploaded/".$_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
  
//data insert...

$sql = "INSERT INTO personal values ('".mysql_real_escape_string(stripslashes($_REQUEST['user_name']))."','".mysql_real_escape_string(stripslashes($_REQUEST['password']))."','".$type."','".mysql_real_escape_string(stripslashes($_REQUEST['age']))."','".mysql_real_escape_string(stripslashes($_REQUEST['gender']))."','".mysql_real_escape_string(stripslashes($_REQUEST['contact']))."','".mysql_real_escape_string(stripslashes($_REQUEST['email']))."','".mysql_real_escape_string(stripslashes($_REQUEST['address_line1']))."','".mysql_real_escape_string(stripslashes($_REQUEST['address_line2']))."','".mysql_real_escape_string(stripslashes($_REQUEST['address_line3']))."','".mysql_real_escape_string(stripslashes($_REQUEST['city']))."','".mysql_real_escape_string(stripslashes($_REQUEST['state']))."','".mysql_real_escape_string(stripslashes($_REQUEST['country']))."','".mysql_real_escape_string(stripslashes($_REQUEST['zip_code']))."','".mysql_real_escape_string(stripslashes($_REQUEST['user_level']))."')";
if($result = mysql_query($sql ,$db)) {

header("Location:chklogin.php?username=".$_REQUEST['user_name']."&&password=".$_REQUEST['password']);
exit();
} else {
echo "ERROR: ".mysql_error();
exit();
}
} else {
?>
<form name="form" id="form" action="" method="post" enctype="multipart/form-data" onSubmit="return formCheck(this);">
<font size="3">&nbsp;Type :
<input type="radio" name="user_level" value="member"/>&nbsp;&nbsp;Member&nbsp;&nbsp;
<input type="radio" name="user_level" value="Client"/>&nbsp;&nbsp;Client<br/></font>


  <label><font size="3">User Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
<?php
if($_SESSION['login']==1)
{
	echo '<font size="4">'.$_SESSION['user'].'</font>';
}
else
{?>
	<input type="text" name="user_name" size="40" />
<?php
}
?>
  </label>
  <p>
    <label><font size="3">Enter Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <input type="password" name="password" size="40" />
    </label>
  </p>
  <p>
    <label><font size="3">Re-enter Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <input type="password" name="re_pass"  size="40"/> 
	</label>
  </p>
  <p>
    <label><font size="3">Profile pic: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <input type="file" name="file" id="file" />
	</label>
  </p>
  <p>
    <label><font size="3">Your Age: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <?php
if($_SESSION['login']==1)
{
	echo '<input type="text" name="age" size="40" value= '.$row[3].'>';
}
else
{?>

	<input type="text" name="age" size="40" />
	<?php
}
?>
    </label>
  </p>
  <p>
    <label><font size="3">Your Gender: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
  
   
    <select name="gender" style="width:25%">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
	<?php 
	}
	?>
    </label>
  </p>
  <p>
    <label><font size="3">Contact Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <?php
if($_SESSION['login']==1)
{
	echo '<input type="text" name="contact" size="40" value= '.$row[5].'>';
}
else
{?>
	<input type="text" name="contact" size="40"/>
    <?php
}
?>
	</label>
  </p>
  <p>
    <label><font size="3">Enter E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <?php
if($_SESSION['login']==1)
{
	echo '<input type="text" name="email" size="40" value= '.$row[6].'>';
}
else
{?>
	<input type="text" name="email" size="40"/>
	<?php
}
?>
    </label>
  </p>
 
  <p><label><font size="3">Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></label>&nbsp;
    <label><font size="3">Line 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <input type="text" name="address_line1" size="40" <?php if($row[7]!=NULL) echo 'value='.$row[7].'';?>>
    </label>
  </p>
  <p>
    <label><font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <input type="text" name="address_line2" size="40" <?php if($row[8]!=NULL) echo 'value='.$row[8].'';?>>
    </label>
  </p>
  <p>
    <label><font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line 3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <input type="text" name="address_line3" size="40" <?php if($row[9]!=NULL) echo 'value='.$row[9].'';?>>
    </label>
  </p>
  <p>
    <label><font size="3">Enter City: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <input type="text" name="city" size="40" <?php if($row[10]!=NULL) echo 'value='.$row[10].'';?>>
    </label>
  </p>
  <p>
    <label><font size="3">Enter State: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <input type="text" name="state" size="40" <?php if($row[11]!=NULL) echo 'value='.$row[11].'';?>>
    </label>
  </p>
  <p>
    <label><font size="3">Enter Country: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <input type="text" name="country" size="40" <?php if($row[12]!=NULL) echo 'value='.$row[12].'';?>>
    </label>
  </p>
  <p>
    <label><font size="3">Enter Zip Code: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>
    <input type="text" name="zip_code" size="40"<?php if($row[13]!=NULL) echo 'value='.$row[13].'';?>>
    </label>
  </p>
  
  
  
	 
<font size="3">Enter Code </font> &nbsp;<img src="captcha.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="vercode" size="40"/><br> 
<br/><br/>
 

	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<label>
	    <input type="submit" name="Submit" value="Submit" style="width:120px "/>
    </label>
  </p>
</form>

</body>
</html>
