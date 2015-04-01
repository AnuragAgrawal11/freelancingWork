<?php
//session_unregister($_SESSION[user]);
session_start();
unset($_SESSION['login']);
session_destroy();
header("Location:login.php?log=2");
?>