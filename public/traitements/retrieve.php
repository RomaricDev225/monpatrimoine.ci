<?php
session_start();
require 'functions.php'; 
$rqt = $_POST['rqt'];
$x = retrieveLineDB($rqt);
$col = $_POST['nbreCol'];
$resultat = "";
for ($i=0; $i < $x; $i++) { 
    for ($j=0; $j < $col; $j++) { 
        $resultat = $resultat . "|" . retrieveDB($rqt, $col)[$i][$j];
        if ($j==($col-1)) {
            $resultat = $resultat . "#$";
        }
    }
    
}

echo $resultat;
?>