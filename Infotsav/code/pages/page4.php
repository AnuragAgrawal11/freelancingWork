<?php 
include"connect.php"; 
?>

  <?php 
  
	$query1 = mysql_query("SELECT * FROM  events WHERE event_name ='$_GET[id]'");
			while ($table1 = mysql_fetch_array($query1))
{
?>

<tr>
    
    <td><?php echo $table1[5] ; ?></td>
	
	
   
  </tr>


<?php
}
?>
		