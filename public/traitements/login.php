<?php
session_start();
require 'functions.php'; 
$rqt = $_POST['rqt'];
$x = retrieveLineDB($rqt);
$col = 7;
if ($x>0) {
    $_SESSION['auth'] = "true";
    $_SESSION['name'] = retrieveDB($rqt, $col)[0][0] . " " . retrieveDB($rqt, $col)[0][1];   
    $_SESSION['contact'] = retrieveDB($rqt, $col)[0][3];   
    $_SESSION['email'] = retrieveDB($rqt, $col)[0][4];   
    $_SESSION['password'] = retrieveDB($rqt, $col)[0][5];   
    $_SESSION['date_create'] = retrieveDB($rqt, $col)[0][6];   
    $_SESSION['ident_client'] = retrieveDB($rqt, $col)[0][2];
}

echo $x
?>