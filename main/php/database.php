<?php

$serverName = "localhost";
$username = "codeconjurer";
$pass = "";
$dbName = "postDatabase_0392"

$connection = mysqli_connect($serverName,$username,$pass,$dbName);
if($connection){
 echo "<p>DB connected</p>";
}
else
{
echo "<p>DB not connected</p>";
}
?>