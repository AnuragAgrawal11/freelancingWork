<?php 
include "header.php"; 
?>
  		
  		<div id="sidebar">
  			<div class="bg_one_third" style="height:300px;">
  				<h1 class="title"><?php echo $_GET['id'] ; ?></h1>
				<div id="EventLinks">
  				<a href="javascript:void(0);" onclick="getEvent('<?php echo $_REQUEST['id'];?>', 'Description');"><img src="img/description.png" /></a><br />
				<a href="javascript:void(0);" onclick="getEvent('<?php echo $_REQUEST['id'];?>', 'Rules')"><img src="img/rules.png" /></a><br />
				<a href="javascript:void(0);" onclick="getEvent('<?php echo $_REQUEST['id'];?>', 'Timelines')"><img src="img/timelines.png" /></a><br />
				<a href="javascript:void(0);" onclick="getEvent('<?php echo $_REQUEST['id'];?>', 'Contacts')"><img src="img/contacts.png" /></a><br />
				<a href="javascript:void(0);" onclick="getEvent('<?php echo $_REQUEST['id'];?>', 'Downloads')"><img src="img/downloads.png" /></a><br />
				</div>
  				<!--<ul class="tabContainer">
 The jQuery generated tabs go here 
</ul>-->
  			</div> <!-- bg_one_third -->
  			 <!-- bg_one_third -->
  			<div class="bg_one_third">
  				<h1 class="title">About Infotsav 2010</h1>
  				<p align="justify"><span class="dropcap">I</span>nfotsav is an annual technical fest of ABV Indian Institute of Information Technology, Gwalior. </p>
			  <p align="justify"><span class="dropcap">I</span>t is the largest Techno-Management fest of central India.<br />
			  <p align="justify"><span class="dropcap">T</span>his year Infotsav will start from 29th October to 31st October 2010. <br />
			  
			</p>
  			</div> <!-- bg_one_third -->
  		</div> <!-- sidebar -->
  		
  		<div class="bg_two_third last">
  			<h1 class="page_title"> <?php 
  if(isset($_REQUEST['register'])&&$_REQUEST['register']=="true")
  {
  	include('connect.php');
	$sql="INSERT INTO registered values ('".$_SESSION['uid']."', '".$_REQUEST['id']."', 'NOW()')";
	if(mysql_query($sql))
	  	header("Location:?id=".$_REQUEST['id']);
	else
		echo mysql_error();
  }
	$query = mysql_query("SELECT * FROM  events WHERE event_name ='$_GET[id]'");
	
	$table = mysql_fetch_row($query) ;
	
			

?>


    
    <?php echo $table[8] ; ?>
	
	
   
 


</h1>
  			<div id="EventData">
			<?php
include "connect.php";
$EventId=$_REQUEST['id'];
$q = mysql_query("SELECT * FROM  events WHERE event_name ='".$EventId."'");
$rs = mysql_fetch_array($q);
echo $rs[2];
?>
</div>
  			
  		</div> <!-- bg_two_third -->
		<?php
		echo '<div align="center">';
	if(isset($_SESSION['uid'])&&isset($_SESSION['user']))
	{
		$sql="SELECT * FROM registered where uid=".$_SESSION['uid']." and eid='".$_REQUEST['id']."'";
		$rs1=mysql_query($sql);
		if(mysql_fetch_row($rs1))
		{
			echo "<img src='images/registered.png'>";
		}
		else
		{	
			echo "<a href='?register=true&id=".$_REQUEST['id']."'>Register ".$_SESSION['user']." for ".$_REQUEST['id']."</a>";
		}
	}
	else
	{
		echo '<a href="LoginPage.php" title="Login to Infotsav" class="bumpbox">Login</a> to Register for '.$_REQUEST["id"];
	}
	echo '</div>';
	?>
  		  		  		<div class="bg_two_third last" style="height:170px">
  			 <?php 
  
	$query1 = mysql_query("SELECT * FROM  events WHERE event_name ='$_GET[id]'");
	$table1 = mysql_fetch_array($query1);
?>
	 <h1>Events Updates:</h1>
    <marquee behavior="scroll" scrollamount="1" scrolldelay="5" direction="up" height="150px"><td><?php echo $table1['updates'] ; ?></td></marquee>

  			
  			
  		</div>
		<?php include"footer.php";?> <!-- footer -->
		
	</div> <!-- container -->
<script type="text/javascript"> Cufon.now(); </script>

</body>

</html>