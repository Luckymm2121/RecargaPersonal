<?php
session_start();

$_SESSION['lineNumber'] = "$lineNumber";
$lineNumber = $_POST['lineNumber'];

$_SESSION['lineNumber'] = "$lineNumber";

header('location: ammount.php');

?>