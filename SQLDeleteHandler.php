<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$connection = @mysqli_connect($server, $username, $password, $db);
// please fill these parameters with the actual data
$Id = $_REQUEST['Id'];

echo "$Id";

$query = "delete from phone where id='$Id';";
mysqli_query($connection,$query);
include 'AndroidArmy_Phones.php';
//echo "Inserted successfully into the database";  
?>

