<?php 
include "header.php"; 
include('connect.php');
?>
<style type="text/css">
<!--
@import url("source/style.css");
-->
    </style>
  		
  		<div id="sidebar">
  			 <!-- bg_one_third -->
  			<div class="bg_one_third">
  				<h1 class="title">Easy Links</h1>
  				<ul class="links">
  					<li><a href="index.php">Home</a></li><li><a href="about_iiitm.php">About IIITM</a></li>
  					<li><a href="sitemap.php">Site Map</a></li>
  					
  					<li><a href="contact.php">Contact</a></li>
  				</ul>
  			</div> <!-- bg_one_third -->
  			<div class="bg_one_third">
  				<h1 class="title">Quickform</h1>
				<div id="errors"> <!-- To display the errors form -->
  				
  			</div>
			<?php 
			if($_GET['thanq']==1)
			{
			?>
			<h3>Thank You for your mail...we will get back to you soon.</h3>
			<h4>Team Infotsav</h4>
			<?php 
			
			}
			else
			{
			?>
  				<form action="quick_mail.php" class="quickform" method="post">
  					<ul>
					<input type="hidden" value="lectures.php" name="page">
  						<li><label>Name:</label><input class="single_input" type="text"  name="name"/></li>
  						<li><label>E-mail:</label><input class="single_input" type="text" name="email" /></li>
  						<li><label>Message:</label><textarea name="message" class="message" cols="30" rows="10"></textarea></li>
  						<li><input type="submit" class="submit_form" name="Submit" value="Submit" /></li>
  					</ul>
  				</form>
				<?php } ?>
  			</div> <!-- bg_one_third -->
  		</div> <!-- sidebar -->
  		
  		<div class="bg_two_third last">
  			<ul id="sitemap">
            <p align="center"><h1>My Infotsav</h1></p>
			<?php 
			if(!isset($_SESSION['uid']))
			{
				echo '<br><br><br><center><a href="LoginPage.php" title="Login to Infotsav" class="bumpbox">Login</a> to Access your Data...</center>';
			}
			else if(isset($_REQUEST['id']))
			{
				if(isset($_SESSION['uid']))
				{
					$sql="INSERT INTO registered values ('".$_SESSION['uid']."', '".$_REQUEST['id']."', NOW())";
				}
				if(isset($_REQUEST['uid']))
				{
					$sql="INSERT INTO registered values ('".$_REQUEST['uid']."', '".$_REQUEST['id']."', NOW())";
				}
				if($rs=mysql_query($sql))
	  				echo "<script>window.location='MyInfotsav.php';</script>";
				else
					echo mysql_error();
			}
			else
			{
			?>
<h3>Welcome <b><?php echo $_SESSION['user'] ; ?></b> (<a href="logout.php">Logout</a>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ResetPasswd.php" title="Login to Infotsav" class="bumpbox">Reset Password</a></h3>
				<h2>You have Registered for following events :</h2>
				<table width="100%" id="gradient-style">
				 
					
				
				<?php 
				$query = "SELECT event_name FROM events";
				$result= mysql_query($query);
				
				while($row=mysql_fetch_array($result))
				{
				?>
				<tr align="center">
				<td valign="middle"><?php echo "<a href='events.php?id=".$row[0]."' target='_blank'>".$row[0]."</a>"; ?></td>
				<?php
				$q = "SELECT timestamp FROM registered WHERE uid=".$_SESSION['uid']." AND eid='".$row[0]."'";
				$rs=mysql_query($q);
				if($rw=mysql_fetch_array($rs))
				{
				?>
					<td align="center"><img src="images/registered.png" width="75px"><br /><?php echo $rw[0]; ?></td>
				<?php
				}
				else
				{
				?>
					<td align="center"><a href="?id=<?php echo $row[0];?>">Register Now</a></td>
				<?php
				}
				?>
				 </tr>
				
				
				
				
				<?php 
				}
				?>
				</table>
				
				
				
				
				
			<?php
			}
			?></ul>
	 </div> <!-- bg_two_third -->
  		  		  		
		 <!-- footer --><?php include"footer.php";?>
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/sitemap.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>