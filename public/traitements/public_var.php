<?php
session_start();

$myVriable = $_POST['var'];
$_SESSION['publicVariable'] = $myVriable;

echo $_SESSION['publicVariable'] ;
?>