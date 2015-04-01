<?php
// Connect to the database server
mysql_connect("localhost", "root", "") or die(mysql_error());

// Open to the database
mysql_select_db("homestay") or die(mysql_error());

// Select all records from the "Individual" table
$result = mysql_query("SELECT * FROM scrap")
or die(mysql_error());

// Loop thru each record (using the PHP $row variable),
// then display the first name and last name of each record.
while($row = mysql_fetch_array($result)){
	echo $row['scarp_post'];
	echo "<br />";
}
?>
