<?php
echo "php data ";

$config = parse_ini_file('/home/dvm33ugq28ol/config/config.ini');

$connection = mysqli_connect("localhost",$config['username'],$config['pass'],$config['dbName']);
$postAmountQuery = "SELECT COUNT(*) as count FROM Posts;"
$postAmount = $connection->query($postAmountQuery)

$postQuery = "SELECT * FROM Posts"
$post = $connection->query($postQuery)
if ($connection)
{
echo "<p>DB connected</p>";
echo "<p>we have $postAmount posts</p>"
echo "<p>$post</p>"
}
else
{
echo "<p>DB not connected</p>";
}
?>