<?php session_start(); 
include "connect.php"; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">



<head><link rel="icon" href="favicon.png"/>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="author" content="Zemotion"/>
	<title>Infotsav 2010  Nurturing Novelty...</title><script language="JavaScript1.2" type="text/JavaScript">
<!--
var txt="Infotsav 2010  Nurturing Novelty...";
var espera=200;
var refresco=null;

function rotulo_title() {
        document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);        
        refresco=setTimeout("rotulo_title()",espera);}
rotulo_title();
// -->
</script>
<script src="calendar.js" type="text/javascript"></script>
<link href="calendar.css" type="text/css" rel="stylesheet" />
<style type="text/css">
<!--
.style2 {	font-size: 16px;
	font-weight: bold;z-index:1000 ;
}
-->
</style>
<script language="JavaScript1.2" type="text/JavaScript">

var speed = 100 //Delay Between Every word

var pause = 100 //Delay Between EveryLine

var timerID = null

var bannerRunning = false

var ar = new Array()

ar[0] = ""  

var currentMessage = 0

var offset = 0

function stopBanner() {

   if (bannerRunning)
     clearTimeout(timerID)
     bannerRunning = false}

function startBanner() {
	stopBanner()
	showBanner()}

function showBanner() {
var text = ar[currentMessage]
   if (offset < text.length) {
	if (text.charAt(offset) == " ")
			offset++
		var partialMessage = text.substring(0, offset + 1)
 		window.status = partialMessage
		offset++
		timerID = setTimeout("showBanner()", speed)
		bannerRunning = true}
	else {
		offset = 0
		currentMessage++
		if (currentMessage == ar.length)
			currentMessage = 0
		timerID = setTimeout("showBanner()", pause)
		bannerRunning = true	}}
startBanner();

</script>
<script language="JavaScript" type="text/JavaScript">

document.writeln("<STYLE ID=\"NOF_STYLE_SHEET\">")

document.writeln("#NavigationBar6LYR {position: relative;  visibility: hidden; top: 0; left:0;  width: 707; height: 12; z-index:1; cursor: hand;}")

document.writeln("</STYLE>")

</SCRIPT>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script><?php 
	if(isset($_REQUEST['color']))
	{	
		$_SESSION['color']=$_REQUEST['color'];
		if(isset($_REQUEST['id']))
		{
			header("Location:".$_SERVER['PHP_SELF']."?id=".$_REQUEST['id']);
		}
		else
		{
			header("Location:".$_SERVER['PHP_SELF']);
		}
	}
	else if(!isset($_SESSION['color']))
	{
		$_SESSION['color']='lightwood';
	}
	
	 ?>
	<link rel="stylesheet" type="text/css" href="skins/<?php echo $_SESSION['color'];?>/styles.css" media="all" />
	<!-- Style for the COLOR chosen -->
	<link rel="stylesheet" type="text/css" title="orange_color" href="colors/orange/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="black_color" href="colors/black/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="blue_color" href="colors/blue/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="brown_color" href="colors/brown/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="green_color" href="colors/green/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="lightgreen_color" href="colors/lightgreen/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="pink_color" href="colors/pink/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="red_color" href="colors/red/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="silver_color" href="colors/silver/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="violet_color" href="colors/violet/color.css" media="all" />
	<link rel="stylesheet" type="text/css" title="yellow_color" href="colors/yellow/color.css" media="all" />	
	<!-- Style used onl for the Online Demo -->
	<link rel="stylesheet" type="text/css" href="lib/css/demoskin.css" media="all" />
	
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="mobile/lib/css/ie7.css" media="all" />
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" type="text/css" href="mobile/lib/css/ie8.css" media="all" />
	<![endif]-->
	
	<script type="text/javascript" src="lib/scripts/jquery.1.4.2.js"></script>
	<script type="text/javascript" src="lib/scripts/jquery.tools.js"></script>
	<script type="text/javascript" src="lib/scripts/cufon.js"></script>
	<script type="text/javascript" src="lib/scripts/antipasto.font.js"></script>
	<script type="text/javascript" src="lib/scripts/bellerose.font.js"></script>
	<script type="text/javascript" src="lib/scripts/jquery.custom.js"></script>
	<script type="text/javascript" src="lib/scripts/mootools.js"></script>
	<script type="text/javascript" src="lib/scripts/mootools.custom.js"></script>
	<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
	<script language="JavaScript1.3" src="js/euDock.2.0.js"></script>
	<script language="JavaScript1.3" src="js/euDock.Image.js"></script>
	<script type="text/javascript" src="js/stdAjax.js"></script>
	<script type="text/javascript" src="js/bumpbox.js"></script>
	<script type="text/javascript" src="js/scroller.js"></script>

</head>
<body>
<?php

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
	   $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
	  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
	  $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$sql = "SELECT count FROM visitor where external_ip='".$_SERVER['REMOTE_ADDR']."' and internal_ip='".getRealIpAddr()."'";
$rs=mysql_query($sql);
if(mysql_num_rows($rs)!=0)
{
	$row = mysql_fetch_row($rs);
	$sql = "UPDATE visitor SET count = ".($row[0]+1)." where external_ip='".$_SERVER['REMOTE_ADDR']."' and internal_ip='".getRealIpAddr()."'";
	$rs=mysql_query($sql);
}
else
{
	$sql = "INSERT INTO visitor VALUES('".$_SERVER['REMOTE_ADDR']."', '".getRealIpAddr()."', 1)";
	$rs=mysql_query($sql);
}
?>


	<div id="color_switcher">
	<?php if(isset($_REQUEST['id']))
	{
	?>
		<div id="skins">
			<ul>
				<li>Skins:</li>
				<li><a href="?color=blue<?php echo "&id=".$_REQUEST['id']; ?>" title="Blue" class="blue skin"></a></li>
				<li><a href="?color=coffee<?php echo "&id=".$_REQUEST['id']; ?>" title="Coffee" class="coffee skin"></a></li>
				<li><a href="?color=darkwood<?php echo "&id=".$_REQUEST['id']; ?>" title="Darkwood" class="darkwood skin"></a></li>
				<li><a href="?color=green<?php echo "&id=".$_REQUEST['id']; ?>" title="Green" class="green skin"></a></li>
				<li><a href="?color=lightgreen<?php echo "&id=".$_REQUEST['id']; ?>" title="Lightgreen" class="lightgreen skin"></a></li>
				<li><a href="?color=lightwood<?php echo "&id=".$_REQUEST['id']; ?>" class="lightwood skin"></a></li>
				<li><a href="?color=orange<?php echo "&id=".$_REQUEST['id']; ?>" title="Orange" class="orange skin"></a></li>
				<li><a href="?color=pink<?php echo "&id=".$_REQUEST['id']; ?>" title="Pink" class="pink skin"></a></li>
				<li><a href="?color=red<?php echo "&id=".$_REQUEST['id']; ?>" title="Red" class="red skin"></a></li>
				<li><a href="?color=silver<?php echo "&id=".$_REQUEST['id']; ?>" title="Silver" class="silver skin"></a></li>
				<li><a href="?color=yellow<?php echo "&id=".$_REQUEST['id']; ?>" title="Yellow" class="yellow skin"></a></li>
			</ul>
		</div> <!-- skins -->
		<?php
		}
		else 
		{
		?>
		<div id="skins">
			<ul>
				<li>Skins:</li>
				<li><a href="?color=blue<?php echo "&id=".$_REQUEST['id']; ?>" title="Blue" class="blue skin"></a></li>
				<li><a href="?color=coffee" title="Coffee" class="coffee skin"></a></li>
				<li><a href="?color=darkwood" title="Darkwood" class="darkwood skin"></a></li>
				<li><a href="?color=green" title="Green" class="green skin"></a></li>
				<li><a href="?color=lightgreen" title="Lightgreen" class="lightgreen skin"></a></li>
				<li><a href="?color=lightwood" class="lightwood skin"></a></li>
				<li><a href="?color=orange" title="Orange" class="orange skin"></a></li>
				<li><a href="?color=pink" title="Pink" class="pink skin"></a></li>
				<li><a href="?color=red" title="Red" class="red skin"></a></li>
				<li><a href="?color=silver" title="Silver" class="silver skin"></a></li>
				<li><a href="?color=yellow" title="Yellow" class="yellow skin"></a></li>
			</ul>
		</div> <!-- skins -->
		<?php
		}
		?>
		<div id="colors">
			<ul>
				<li>Colors:</li>
				<li><a title="Blue" rel="blue_color" class="blue color"></a></li>
				<li><a title="Brown" rel="brown_color" class="brown color"></a></li>
				<li><a title="Black" rel="black_color" class="black color"></a></li>
				<li><a title="Green" rel="green_color" class="green color"></a></li>
				<li><a title="Lightgreen" rel="lightgreen_color" class="lightgreen color"></a></li>
				<li><a title="Violet" rel="violet_color" class="violet color"></a></li>
				<li><a title="Orange" rel="orange_color" class="orange color"></a></li>
				<li><a title="Pink" rel="pink_color" class="pink color"></a></li>
				<li><a title="Red" rel="red_color" class="red color"></a></li>
				<li><a title="Silver" rel="silver_color" class="silver color"></a></li>
				<li><a title="Yellow" rel="yellow_color" class="yellow color"></a></li>
			</ul>
		</div> <!-- colors -->
	</div> <!-- color_switcher -->

	<div id="container">
		
		<?php include"login.php";?>
		<?php include"menu.php";?>
		<?php include"sidebar.php";?> <!-- header -->
