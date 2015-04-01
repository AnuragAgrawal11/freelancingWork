<?php
//session_unregister($_SESSION[user]);
session_start();
unset($_SESSION['login']);
session_destroy();
header("Location:index.php?log=2");
?>