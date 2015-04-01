<?php
ini_set( "display_errors", 0);
	include('connect.php');

if($_REQUEST)
{
	$id 	= $_REQUEST['parent_id'];
	$query = "select * from m_area where ref_city_id = ".$id;
	$results = mysql_query( $query);
	//echo $results;
	?>
	
	<select name="area_name"  id="sub_category_id">
	
	<?php
	while ($rows = mysql_fetch_assoc(@$results))
	{ ?>
    
		<option value="<?php echo $rows['area_id'];?>  ID=<?php echo $rows['area_id'];?>" <?php if($rows['city_id']==$_REQUEST['aid']) echo "selected"; ?>><?php echo $rows['area_name'];?></option>
	<?php
	}?>
	</select>	
	
<?php	
}
?>