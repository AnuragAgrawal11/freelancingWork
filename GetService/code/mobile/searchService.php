<?php
include 'connect.php';

$query = mysql_query(
"SELECT * 
FROM provider_services
LEFT JOIN user_profiles ON provider_services.user_id = user_profiles.user_id
LEFT JOIN organisations ON user_profiles.org_id = organisations.id
WHERE provider_services.user_id
IN (

SELECT DISTINCT provider_services.user_id
FROM provider_services
LEFT JOIN keywords ON provider_services.service_id = keywords.service_id
WHERE keywords.keyword LIKE  '%".$_GET["service"]."%'
AND (
organisations.street_address LIKE  '%".$_GET["location"]."%'
OR organisations.postal_address LIKE  '%".$_GET["location"]."%'
OR organisations.suburb LIKE  '%".$_GET["location"]."%'
)
)
AND user_profiles.is_enabled =1
GROUP BY provider_services.user_id");

$num_rows = mysql_num_rows($query);
//$row = mysql_fetch_array($query);
//echo "$num_rows Rows\n".$num_rows;
//echo $row[user_id];

$return_arr = array();
//$c = 0;
while ($row = mysql_fetch_array($query, MYSQL_ASSOC)) {
	
    $row_array['user_id'] = $row['user_id'];
	$row_array['org_id'] = $row['org_id'];
	$row_array['service_id'] = $row['service_id'];
	//$row_array['service_keywords'] = $row['service_keywords'];
	$row_array['firstname'] = $row['firstname'];
	$row_array['lastname'] = $row['lastname'];
	$row_array['contact_name'] = $row['contact_name'];
	$row_array['contact_phone'] = $row['contact_phone'];
	$row_array['street_address'] = $row['street_address'];
	$row_array['postal_address'] = $row['postal_address'];
	$row_array['state'] = $row['state'];
	
	$query1 = "SELECT * FROM provider_location Where user_id ='".$row['user_id']."'";

	$exe=mysql_query($query1);
	$no=mysql_num_rows($exe);
	$row=mysql_fetch_array($exe);
	
	if($no !=0 && $row['latitude']!="" && $row['longitude']!="" )
	{
	$user_lati = $_GET["latitude"];
	$user_longi = $_GET["longitude"];
	$row_array['latitude'] = $row['latitude'];
	$row_array['longitude'] = $row['longitude'];
	$distance = distance($user_lati, $user_longi, $row_array['latitude'], $row_array['longitude'], "k");
	//echo $distance."<br>";
	$row_array['distance'] = $distance;
	}
	
	else
	{
		
	$address = $row_array['street_address']."".$row_array['postal_address']."".$row_array['state'];
	$address = str_replace(" ", "+", $address);
	$json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false");
	$json = json_decode($json);

	$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
	$long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
	$user_lati = $_GET["latitude"];
	$user_longi = $_GET["longitude"];
	$row_array['latitude'] = $lat;
	$row_array['longitude'] = $long;
	
	$distance = distance($user_lati, $user_longi, $row_array['latitude'], $row_array['longitude'], "k");
	//echo $distance."<br>";
	$row_array['distance'] = $distance;
	mysql_query("INSERT INTO provider_location (user_id, latitude, longitude) VALUES ('".$row_array['user_id']."','".$row_array['latitude']."','".$row_array['longitude']."')");
	
	
	}
	array_push($return_arr,$row_array);
	//array sorting
	
	
    
	
	
}

function sortByOrder($a, $b) {
    return $a['distance'] - $b['distance'];
}

usort($return_arr, 'sortByOrder');
//print_r($return_arr);







function distance($lat1, $lon1, $lat2, $lon2, $unit) { 

  $theta = $lon1 - $lon2; 
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
  $dist = acos($dist); 
  $dist = rad2deg($dist); 
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344); 
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}









	echo json_encode($return_arr);
	
	
	
	
?>