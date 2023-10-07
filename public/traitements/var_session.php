<?php 
session_start();

$_SESSION["myVariable"] = $_POST["var"];
echo $_SESSION["myVariable"] ;

?>