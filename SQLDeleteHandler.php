<?php

$connection = @mysqli_connect("localhost", "rdahlke", "10405611", "project");
// please fill these parameters with the actual data
$Id = $_REQUEST['Id'];

echo "$Id";

$query = "delete from phone where id='$Id';";
mysqli_query($connection,$query);
include 'AndroidArmy_Phones.php';
//echo "Inserted successfully into the database";  
?>

