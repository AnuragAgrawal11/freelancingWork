<?php
include "connect.php";
ini_set( "display_errors", 0);


mysql_query("DELETE FROM item WHERE item_id='".$_GET['iid']."'");


?>
<script type="text/javascript">
<!--
window.location = "itemsview.php?dinfo=1"
//-->
</script>