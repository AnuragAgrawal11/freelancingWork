<?php

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
   die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db("bhooklagiyaar")) {
   echo "Unable to select mydbname: " . mysql_error();
   exit;
}

$result = mysql_query("SELECT m_area.area_name,m_city.city_name FROM  m_area LEFT JOIN m_city ON m_area.ref_city_id=m_city.city_id ORDER BY m_city.city_id");

while ($row = mysql_fetch_assoc($result)) {
   		$areanames[]=$row['area_name'] .", ". $row['city_name'];
		
}
mysql_free_result($result);
mysql_close($link);

// check the parameter
if(isset($_GET['part']) and $_GET['part'] != '')
{
	// initialize the results array
	$results = array();
//echo $_GET['part'];
	// search areanames
	foreach($areanames as $areaname)
	{
		// if it starts with 'part' add to results
		if( strpos(strtolower($areaname), strtolower($_GET['part']))!== false){
			$results[] = $areaname;
		}
	}

	// return the array as json with PHP 5.2
	echo json_encode($results);
}