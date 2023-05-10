<?php 
session_start();

$_SESSION["user"] = "Vitaly";
$_SESSION["pass"] = "12345";


session_destroy();
?>