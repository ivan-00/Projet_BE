 <?php include 'config/template/head.php'; ?>
<?php
session_start();
$_SESSION = array();
session_destroy();
header('Location: login.php');
exit();
?>