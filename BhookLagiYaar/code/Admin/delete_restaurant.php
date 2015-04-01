<?php
include "connect.php";
ini_set( "display_errors", 0);


mysql_query("DELETE FROM restaurant WHERE restaurant_id='".$_GET['rid']."'");


?>
<script type="text/javascript">
<!--
window.location = "restaurantview.php?dinfo=1"
//-->
</script>