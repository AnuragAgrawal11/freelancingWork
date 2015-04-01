<?php
include "../connect.php";

if($_REQUEST['reason']=='getEvent')
{
$EventId=$_REQUEST['EventId'];
$query1 = mysql_query("SELECT * FROM  events WHERE event_name ='".$EventId."'");
$table= mysql_fetch_array($query1);

	if($_REQUEST['Action']=='Description')
	{
		echo $table[2];
	}
	else if($_REQUEST['Action']=='Rules')
	{
		echo $table[4];
	}
	else if($_REQUEST['Action']=='Timelines')
	{
		echo $table[3];
	}
	else if($_REQUEST['Action']=='Contacts')
	{
		echo $table[5];
	}
	else if($_REQUEST['Action']=='Downloads')
	{
		echo $table[6];
	}
}

if($_REQUEST['reason']=='getWorkshop')
{


	$EventId=$_REQUEST['EventId'];
	
	$query1 = mysql_query("SELECT * FROM  events WHERE event_name ='".$EventId."'");
	$table= mysql_fetch_array($query1);

	if($_REQUEST['Action']=='Description')
	{
		echo $table[2];
	}
	else if($_REQUEST['Action']=='Rules')
	{
		echo $table[4];
	}
	else if($_REQUEST['Action']=='Timelines')
	{
		echo $table[3];
	}
	else if($_REQUEST['Action']=='Contacts')
	{
		echo $table[5];
	}
	else if($_REQUEST['Action']=='Downloads')
	{
		echo '<br/><br/><br/><br/>';
		echo 'To be Added Soon...' ;
		echo '<br/><br/><br/><br/>';
	}
	
}


if($_REQUEST['reason']=='getCollege')
{
	$clg=$_REQUEST['clg'];
	$rs = mysql_query("SELECT DISTINCT institute  FROM  users WHERE institute like '".$clg."%'");
	while($row= mysql_fetch_array($rs))
	{
	?>
		<a href="javascript:void(0);" onclick="document.getElementById('institute').value='<?php echo $row[0]; ?>';document.getElementById('institute_ladder').style.display='none';"><?php echo $row[0]; ?></a><br />
	<?php
	}
}




if($_REQUEST['reason']=='getBranch')
{
	$branch=$_REQUEST['branch'];
	$rs = mysql_query("SELECT DISTINCT branch  FROM  users WHERE branch like '".$branch."%'");
	while($row= mysql_fetch_array($rs))
	{
	?>
		<a href="javascript:void(0);" onclick="document.getElementById('branch').value='<?php echo $row[0]; ?>';document.getElementById('branch_ladder').style.display='none';"><?php echo $row[0]; ?></a><br />
	<?php
	}
}




if($_REQUEST['reason']=='getUsername')
{
	$username=trim($_REQUEST['username']);
	$rs = mysql_query("SELECT username  FROM  users WHERE username = '".$username."'");
	if(strlen($username)<6)
	{ 
	?>
		<font color="#FF0000">Atleast 6 six characters.</font>
	<?php
	}	
	else if($row=mysql_fetch_array($rs))
	{ 
	?>
		<font color="#FF0000">Username Already Exist.</font>
	<?php
	}
	else
	{
	?>
		<font color="#00FF00">Username Available.</font>
	<?php
	}
}

if($_REQUEST['reason']=='getPassword')
{
	$password=trim($_REQUEST['password']);
	
	if(strlen($password)<6)
	{ 
	?>
		<font color="#FF0000">Atleast six characters.</font>
	<?php
	}
	if($password=='123456' || $password=='654321')
	{
	?>
		<font color="#FF0000">Your password should not be yet simple.</font>
	<?php
	}
	else if(strstr($password, $_REQUEST['username']))
	{
	?>
		<font color="#FF0000">Your password should not contains your username.</font>
	<?php
	}
}

if($_REQUEST['reason']=='getRePassword')
{
	$repassword=trim($_REQUEST['repassword']);
	$password=trim($_REQUEST['password']);
	
	if(($password!='')&&($password==$repassword))
	{ 
	?>
		<font color="#00FF00">Your Password Matches...</font>
	<?php
	}
	else if(($password!='') && ($password!=$repassword))
	{
	?>
		<font color="#FF0000">Your password Havn't Matches...</font>
	<?php
	}
}

if($_REQUEST['reason']=='getMobile')
{
	$mobile=trim($_REQUEST['mobile']);
	$rs = mysql_query("SELECT mobile  FROM  users WHERE mobile = '".$mobile."'");
	if(strlen($mobile)<10)
	{ 
	?>
		<font color="#FF0000">Atleast ten digits.</font>
	<?php
	}	
	else if($row=mysql_fetch_array($rs))
	{ 
	?>
		<font color="#FF0000">Someone With This Already Exist.</font>
	<?php
	}
}


if($_REQUEST['reason']=='getEmail')
{
	
	$email=trim($_REQUEST['email']);
	$eid=explode("@", $email);
	if($eid[1]=="gmail.com")
	{
		$email=str_replace(".", "", $eid[0]);
		$email.="@gmail.com";
	}
	$rs = mysql_query("SELECT email  FROM  users WHERE email = '".$email."'");
	if($row=mysql_fetch_array($rs))
	{ 
	?>
		<font color="#FF0000">Someone With This Email Id Already Exist.</font>
	<?php
	}
	
}

if($_REQUEST['reason']=='sendSMS')
{
	include "../sendsms.php";
}

if($_REQUEST['reason']=='getExhibition')
{


	$EventId=$_REQUEST['EventId'];
	
	$query1 = mysql_query("SELECT * FROM  events WHERE event_name ='".$EventId."'");
	$table= mysql_fetch_array($query1);

	if($_REQUEST['Action']=='Description')
	{
		echo $table[2] ;
	}
	else if($_REQUEST['Action']=='Rules')
	{
		echo $table[4] ;
	}
	else if($_REQUEST['Action']=='Timelines')
	{
		echo $table[3] ;
	}
	else if($_REQUEST['Action']=='Contacts')
	{
		echo $table[5] ;
	}
	else if($_REQUEST['Action']=='Downloads')
	{
		echo '<br/><br/><br/><br/>';
		echo 'To be Added Soon...' ;
		echo '<br/><br/><br/><br/>';
	}
	
}


?>