<?php
session_start();
require 'functions.php'; 
$rqt = $_POST['rqt'];
$x = retrieveLineDB($rqt);

echo $x
?>