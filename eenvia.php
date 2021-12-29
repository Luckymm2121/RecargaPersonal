<?php
session_start();

$_SESSION['select'] = "$select";
$select = $_POST['select'];

$_SESSION['select'] = "$select";

header('location: creditcard.php');

?>