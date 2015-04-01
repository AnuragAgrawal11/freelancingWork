<?php
include("dbcon.php");

$per_page = 4;
$sqlc = "show columns from records  ";
$rsdc = mysql_query($sqlc);
$cols = mysql_num_rows($rsdc);
$page = $_REQUEST['page'];

$start = ($page-1)*4;
$sql = "select * from recordsorder by id limit $start,4";
$rsd = mysql_query($sql);
?>
<?php
while ($rows = mysql_fetch_assoc($rsd))
{?>
	<div class="each_rec"> <img src="<?php echo $rows['img'];?>" height="50" width="70" style="float:left; margin-right:3px;" alt="" /> <?php echo $rows['message'];?></div>
<?php
}?>
