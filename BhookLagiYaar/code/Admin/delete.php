<?php
include "connect.php";
ini_set( "display_errors", 0);


mysql_query("DELETE FROM user_login WHERE id='".$_GET['uid']."'");


?>
<script type="text/javascript">
<!--
window.location = "userview.php?dinfo=1"
//-->
</script>