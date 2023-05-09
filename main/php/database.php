<?php
echo "php data ";

$config = parse_ini_file('/home/dvm33ugq28ol/config/config.ini');

$connection = mysqli_connect("localhost",$config['username'],$config['pass'],$config['dbName']);

if ($connection)
{
echo "<p>DB connected</p>";
}
else
{
echo "<p>DB not connected</p>";
}
?>