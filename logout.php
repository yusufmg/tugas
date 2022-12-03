<?php
session_start();
session_destroy();
unset($_SESSION['userID']);
header('location:/frame/index.php');
exit();
?>