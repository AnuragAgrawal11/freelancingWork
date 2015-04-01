<?php
include "connect.php" ;
session_start() ;

if(!(isset($_SESSION['uid'])))
{
	echo 'Access Denied :P Login First to see the details...' ;
}
else
{

?>

<table width="100%" border="1">
  <tr align="center">
    <td>Name</td>
    <td>Email</td>
    <td>Mobile</td>
    <td>Institute</td>
    <td>Place</td>
    <td>Members</td>
    <td>Male</td>
    <td>Female</td>
    <td>Travel Mode</td>
	<td>PNR</td>
    <td>Train</td>
    <td>Arrival Date</td>
    <td>Arrival Time </td>
    <td>Message</td>
    
  </tr>
  

<?php
$qry = "select *  from accomodation ";
$rs =mysql_query($qry);

while($arr = mysql_fetch_array($rs))
	{
			?>
		<tr align="center">	
			<td align="center"><?php echo $arr['name']; ?></td>
			<td><?php echo $arr['email']; ?></td>
			<td><?php echo $arr['mobile']; ?></td>
			<td><?php echo $arr['institute']; ?></td>
			<td><?php echo $arr['place']; ?></td>
			<td><?php echo $arr['members']; ?></td>
			<td><?php echo $arr['male_members']; ?></td>
			<td><?php echo $arr['female_members']; ?></td>
			<td><?php echo $arr['travel_mode']; ?></td>
			<td><?php echo $arr['pnr']; ?></td>
			<td><?php echo $arr['train']; ?></td>
			<td><?php echo $arr['arrival_date']; ?></td>
			<td><?php echo $arr['arrival_time']; ?></td>
			<td><?php echo $arr['message']; ?></td>
  		</tr>
		
	
	<?php
	}
}

?>

 
    
</table>
