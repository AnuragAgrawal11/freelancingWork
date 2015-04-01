<?php
include "connect.php";
ini_set( "display_errors", 0);


mysql_query("DELETE FROM m_city WHERE city_id='".$_GET['cid']."'");


?>
<script type="text/javascript">
<!--
window.location = "cityview.php?dinfo=1"
//-->
</script>