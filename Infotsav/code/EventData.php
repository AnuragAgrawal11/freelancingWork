<?php 
include "header.php"; 
?>
		<div class="full_page">
		<h1 class="page_title">Events Data @ Infotsav 10.0</h1>

		<?php 
		if((isset($_SESSION['uid']))&&(($_SESSION['uid']==1) || ($_SESSION['uid']==7) || ($_SESSION['uid']==8)))
		{
			echo '<center>';
			if(isset($_REQUEST['id'])&&$_REQUEST['id']=='Add-New-Event')
			{
				if(isset($_REQUEST['new_event_submit']))
				{
					if(mysql_query("INSERT INTO events VALUES (0, '".$_REQUEST['event_name']."', '".$_REQUEST['description']."', '".$_REQUEST['timelines']."', '".$_REQUEST['rules']."', '".$_REQUEST['contact_us']."', '".$_REQUEST['downloads']."', '".$_REQUEST['updates']."', '".$_REQUEST['slogan']."'"))
					{
						echo "Event Data of ".$_REQUEST['event_name']." has been added...<br /><br /><br /><br />Click <a href='./EventData.php'>here</a> to Add/Update More Data...";
					}
					else
					{
						echo mysql_error();
						echo "<br /><br /><br /><br />Click <a href='./EventData.php?id=Add-New-Event'>here</a> to try again...";
					}
				}
				else
				{
					echo '<form action="" method="post">';
					echo '<input type="hidden" name="id" value="'.$_REQUEST['id'].'">';
				?>
					<strong>Event Name</strong><br /><input type="text" name="event_name" size="50" /><br /><hr /><br />
					<strong>Description</strong><br /><textarea rows="10" cols="100" name="description"></textarea><br /><hr /><br />
					<strong>Timelines</strong><br /><textarea rows="10" cols="100" name="timelines"></textarea><br /><hr /><br />
					<strong>Rules</strong><br /><textarea rows="10" cols="100" name="rules"></textarea><br /><hr /><br />
					<strong>Contact Us</strong><br /><textarea rows="10" cols="100" name="contact_us"></textarea><br /><hr /><br />
                	<strong>Downloads</strong><br /><textarea rows="10" cols="100" name="downloads"></textarea><br /><hr /><br />
					<strong>Updates</strong><br /><textarea rows="10" cols="100" name="updates"></textarea><br /><hr /><br />
					<strong>Slogan</strong><br /><input type="text" name="slogan" size="100" /><br /><hr /><br />
				<?php
					echo '<br><br><br><input type="submit" name="new_event_submit" value="   Add New Event Data  "></form>';
				}
			}
			else if(isset($_REQUEST['event_submit']))
			{
				$rs=mysql_query("SELECT * FROM events WHERE id=".$_REQUEST['event_id']);
				echo '<form action="" method="post">';
				$row=mysql_fetch_row($rs);
				echo '<input type="hidden" name="event_id" value="'.$_REQUEST['event_id'].'">';
				?>
				<strong>Event Name</strong><br /><input type="text" name="event_name" size="50" value="<?php echo $row[1]; ?>" /><br /><hr /><br />
				<strong>Description</strong><br /><textarea rows="10" cols="100" name="description"><?php echo $row[2]; ?></textarea><br /><hr /><br />
				<strong>Timelines</strong><br /><textarea rows="10" cols="100" name="timelines"><?php echo $row[3]; ?></textarea><br /><hr /><br />
				<strong>Rules</strong><br /><textarea rows="10" cols="100" name="rules"><?php echo $row[4]; ?></textarea><br /><hr /><br />
				<strong>Contact Us</strong><br /><textarea rows="10" cols="100" name="contact_us"><?php echo $row[5]; ?></textarea><br /><hr /><br />
                <strong>Downloads</strong><br /><textarea rows="10" cols="100" name="downloads"><?php echo $row[6]; ?></textarea><br /><hr /><br />
				<strong>Updates</strong><br /><textarea rows="10" cols="100" name="updates"><?php echo $row[7]; ?></textarea><br /><hr /><br />
				<strong>Slogan</strong><br /><input type="text" name="slogan" size="100" value="<?php echo $row[8]; ?>" /><br /><hr /><br />
				<?php
				echo '<br><br><br><input type="submit" name="event_data_submit" value="   Upadate Data for '.$row[1].' "></form>';
			}
			else if(isset($_REQUEST['event_data_submit']))
			{
				if(mysql_query("UPDATE events SET event_name='".$_REQUEST['event_name']."', description='".$_REQUEST['description']."', timelines='".$_REQUEST['timelines']."', rules='".$_REQUEST['rules']."', contact_us='".$_REQUEST['contact_us']."', downloads='".$_REQUEST['downloads']."', updates='".$_REQUEST['updates']."', slogan='".$_REQUEST['slogan']."' WHERE id=".$_REQUEST['event_id']))
				{
					echo "Event Data of ".$_REQUEST['event_name']." has been updated...<br /><br /><br /><br />Click <a href='./EventData.php'>here</a> to Update More Data...";
				}
				else
				{
					echo mysql_error();
					echo "<br /><br /><br /><br />Click <a href='./EventData.php'>here</a> to try again...";
				}
			}
			else
			{
				echo '<a href="EventData.php?id=Add-New-Event">Add New Event</a><hr>or<hr>';
				$rs=mysql_query("SELECT id, event_name FROM events");
				echo '<form action="" method="post">';
				echo '<select name="event_id">';
				while($row=mysql_fetch_row($rs))
				{
					echo '<option value="'.$row[0].'">'.$row[1].'</option>';
				}
				echo '</select><br><br><br><input type="submit" name="event_submit" value="   Get Data   "></form>';
			}
			echo '</center>';
		}
		else
		{
			echo "<center><br /><br /><br /><br /><br /><br /><br />Access Denied... :-P</center>";
		}
		?>
			
  		</div> <!-- full_page -->
  		  		  		
		<?php include"footer.php";?> <!-- footer -->
		
	</div> <!-- container -->
</body>

<!-- Mirrored from www.zemotion.co.uk/demo/Orizon/style.html by HTTrack Website Copier/3.x [XR&CO'2008], Mon, 21 Jun 2010 07:38:45 GMT -->
</html>
