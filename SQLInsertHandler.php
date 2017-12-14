<?php
// Obtain a connection object by connecting to the db

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$connection = @mysqli_connect($server, $username, $password, $db);


var_dump($_REQUEST);

$Id = $_REQUEST['id'];
$Manufacturer = $_REQUEST['manufacturer']; //Accesses user filled form of type manufacturer
$Make = $_REQUEST['make'];
$Version = $_REQUEST['version'];
$OSRelease = $_REQUEST['OSRelease'];
$Security = $_REQUEST['security'];


$sqlPHONE = "INSERT INTO phone (id, manufacturer, make, version, OSRelease, security) VALUES ('$Id','$Manufacturer','$Make','$Version','$OSRelease','$Security')";
//Inserts values from submission into our data tables
$sqlMANU = "INSERT INTO manufacturer (id, manufacturer, make, version, OSRelease, security) VALUES ('$Id','$Manufacturer','$Make','$Version','$OSRelease','$Security')";
$sqlVERS = "INSERT INTO version (id, version) VALUES ('$Id','$Version')";

if(mysqli_query($connection, $sqlPHONE)){
   	 echo "Inserted successfully into the database<br>";
	} else{
   	 echo "ERROR: Could not able to execute $sqlPHONE. " . mysqli_error($connection);
	} //Checks error in one database. May need to add more

if(mysqli_query($connection, $sqlMANU)){
   	 echo "Inserted successfully into the database<br>";
	} else{
   	 echo "ERROR: Could not able to execute $sqlPHONE. " . mysqli_error($connection);
	} 

if(mysqli_query($connection, $sqlVERS)){
   	 echo "Inserted successfully into the database<br>";
	} else{
   	 echo "ERROR: Could not able to execute $sqlPHONE. " . mysqli_error($connection);
	} 
	

  mysqli_close($connection); //Close connection
  
  echo "Submission Successful! ";
?>
