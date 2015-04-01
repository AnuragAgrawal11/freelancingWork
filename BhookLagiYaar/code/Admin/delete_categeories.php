<?php
include "connect.php";
ini_set( "display_errors", 0);

 $query1 = "DELETE FROM m_menu_category WHERE category_id= '".$_GET['cid']."'";
				  echo $query1;
		$rsd1 = mysql_query($query1);
		$rows1 = mysql_fetch_assoc($rsd1);
		



?>
