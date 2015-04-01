<?php
include "connect.php";
ini_set( "display_errors", 0);


mysql_query("DELETE FROM m_area WHERE area_id='".$_GET['aid']."' && ref_city_id='".$_GET['cid']."'");


?>
<script type="text/javascript">
<!--
window.location = "areaview.php?dinfo=1"
//-->
</script>