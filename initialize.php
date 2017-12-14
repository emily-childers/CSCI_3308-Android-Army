<html>
<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$connection = @mysqli_connect($server, $username, $password, $db);

if(mysqli_connect_errno())
{
	echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
}

$deleteP = "Drop table phone;";
$deleteM = "drop table manufacturer;";
$deleteV = "drop table version;";

mysqli_query($connection,$deleteP);
mysqli_query($connection,$deleteM);
mysqli_query($connection,$deleteV);

$sqlPHONE = "Create table phone(id integer primary key, manufacturer char(50), make char(50), version char(50), OSRelease char(50), security char(50));";
$sqlMANU = "Create table manufacturer(id integer primary key, manufacturer char(50), make char(50), version char(50), OSRelease char(50), security char(50));";
$sqlVERS = "Create table version(id integer primary key, name char(50), versionID char(50));";

if(mysqli_query($connection, $sqlPHONE)){
   	 echo "Inserted successfully into the database<br>";
	} else{
   	 echo "ERROR: Could not able to execute $sqlPHONE. " . mysqli_error($connection);
	} //Checks error in one database. May need to add more

if(mysqli_query($connection, $sqlMANU)){
   	 echo "Inserted successfully into the database<br>";
	} else{
   	 echo "ERROR: Could not able to execute $sqlMANU. " . mysqli_error($connection);
	} 

if(mysqli_query($connection, $sqlVERS)){
   	 echo "Inserted successfully into the database<br>";
	} else{
   	 echo "ERROR: Could not able to execute $sqlVERS. " . mysqli_error($connection);
	}

echo "Done!";
?>