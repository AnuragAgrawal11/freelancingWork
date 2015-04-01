<?php 
include "header.php"; 
?>
		<div class="full_page">
		<h1 class="page_title">Registration Data @ Infotsav 10.0</h1>




		<?php 
		if(isset($_REQUEST['Submit']))
		{
		?>
			<table width="100%" border="0">
		  <tr>
			<th>ID</th>
			<th>Name</th>
			<th>Institute</th>
			<th>Branch</th>
			<th>Gender</th>
			<th>Mobile</th>
			<th>Email</th>
		  </tr>
		  <?php 
			$eventname = $_REQUEST['event_id'] ;
			$query  = "select * from registered where eid ='".$eventname."' " ;
			$result = mysql_query($query) ;
			while($table = mysql_fetch_array($result))
			{	
				
				$qry = "select * from users where id = ".$table[0]."" ;
				
				$rst = mysql_query($qry) ;
				$row = mysql_fetch_row($rst)
				?>
				<tr>
				<th><?php echo $row[0]; ?></th>
				<th><?php echo $row[1]; ?></th>
				<th><?php echo $row[2]; ?></th>
				<th><?php echo $row[3]; ?></th>
				<th><?php echo $row[7]; ?></th>
				<th><?php echo $row[9]; ?></th>
				<th><?php echo $row[10]; ?></th>
				</tr>
				<?php 
				
				
				
			}
		}
		
		
		if(isset($_REQUEST['register']))
		{
		
		?>
		<table width="100%" border="0">
		  <tr>
			<th>ID</th>
			<th>Name</th>
			<th>Institute</th>
			<th>Branch</th>
			<th>Gender</th>
			<th>Mobile</th>
			<th>Email</th>
		  </tr>
		  
		
				
				
				<?php 
			$query = "select * from users order by id asc" ;
			$result = mysql_query($query) ;
			while($row = mysql_fetch_array($result))
			{
				?>
				<tr>
				<td><?php echo $row[0]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[2]; ?></td>
				<td><?php echo $row[3]; ?></td>
				<td><?php echo $row[7]; ?></td>
				<td><?php echo $row[9]; ?></td>
				<td><?php echo $row[10]; ?></td>
				</tr>
				
				
				<?php 
			}
			echo '</table>' ;
			
		}


				?>

		<?php 
		if((isset($_SESSION['uid']))&&(($_SESSION['uid']==1) || ($_SESSION['uid']==7) || ($_SESSION['uid']==8)))
		{
			
		?>	
		
		<table width="100%" border="0" >
		  <tr >
			<td width="29%"><a href="<?php echo '?register=1' ;?>"  style="text-decoration:none">All Registered Users</a></td>
			<td width="17%">&nbsp;</td>
			<td width="16%">&nbsp;</td>
		  </tr>
		  <tr>
			<td>By Event(Registered users of each event)
			<td>
			<?php
				$rs=mysql_query("SELECT id, event_name FROM events");
				echo '<form action="" method="post">';
				echo '<select name="event_id">';
				while($row=mysql_fetch_row($rs))
				{
					echo '<option value="'.$row[1].'">'.$row[1].'</option>';
				}
				?>
		 </td>
			<td width="37%"><input type="Submit" name="Submit" value="Submit" /></form><td width="1%"></td>
		  </tr>
		</table>

		
		<?php 
		
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
