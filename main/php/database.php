<?php

$config = parse_ini_file('/home/dvm33ugq28ol/config/config.ini');

$connection = mysqli_connect("localhost",$config['username'],$config['pass'],$config['dbName']);

$postQuery = "SELECT * FROM Posts";
$post = $connection->query($postQuery);
if ($connection){
    echo "<p>DB connected</p>";
    if (mysqli_num_rows($post) > 0) {
        while($row = mysqli_fetch_assoc($post)) {
        echo "<h3>".$row["title"]."</h3>";
        echo "<p>".$row["content"]."</p>";
        echo "<p>posted at: ".$row["timestamp"]."</p>";
        }
    } else {
    echo "0 results";
    }
}
else{
echo "<p>DB not connected</p>";
}
?>