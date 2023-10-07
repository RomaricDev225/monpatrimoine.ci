<?php
session_start();
require 'functions.php'; 
$rqt = $_POST['rqt'];
$resultat = queryDB($rqt);
echo $resultat;
?>