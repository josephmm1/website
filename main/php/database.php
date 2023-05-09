<?php

$config = parse_ini_file('/home/dvm33ugq28ol/config/config.ini');

$connection = mysqli_connect("localhost",$config['username'],$config['pass'],$config['dbName']);
$postAmountQuery = "SELECT COUNT(*) as count FROM Posts;";
$postAmount = $connection->query($postAmountQuery);

$postQuery = "SELECT * FROM Posts";
$post = $connection->query($postQuery);
if ($connection){
    echo "<p>DB connected</p>";
    if (mysqli_num_rows($post) > 0) {
        while($row = mysqli_fetch_assoc($post)) {
            echo "id: " . $row["id"]. " - title: " . $row["title"]. " - content: " . $row["content"]. " - timestamp".$row["timestamp"]."<br>";
        }
    } else {
    echo "0 results";
    }
}
else{
echo "<p>DB not connected</p>";
}
?>