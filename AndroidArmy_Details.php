<html>
<div id="main">
<head> 
  <link rel="stylesheet" href="AndroidArmy_Details.css">
  <link rel="icon" href="https://i.imgur.com/BxSspbo.png">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  <title> Update Depot </title>

  <div id="logo">
    <img src="https://i.imgur.com/BxSspbo.png" width="125" height="125" alt="Logo">
  </div>
</head>
<body>
<h1> 
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="AndroidArmy.html">HOME</a>
        <a href="AndroidArmy_About.html">ABOUT</a>
        <a href="AndroidArmy_Phones.php">PHONES</a>
        <a href="AndroidArmy_Submit.html">SUBMIT</a>
        <a href="AndroidArmy_Contact.html">CONTACT</a>
      </div>

      <!-- Use any element to open the sidenav -->
      <span onclick="openNav()"><a href="#menu">
      &#9776;
      </a></span>
</h1>
<?php
//connect to database
$connection = @mysqli_connect("127.0.0.1","root","moo","project");
if(mysqli_connect_errno())
{ 
echo "<h4>Failed to connect to MySQL: 
</h4>".mysqli_connect_error(); 
}
 
//Fetch information from URL, store in php variables
$manu = $_GET[manufacturer];
$make = $_GET[make];

//SQL query
$query = "select * from phone where make='$make' and manufacturer='$manu'";
$resultset = mysqli_query($connection,$query);
$row = mysqli_fetch_array($resultset, MYSQLI_NUM); //turn sql results to an array
//outputting phone info
echo "<h3>";
echo "<br>";
echo "<center> Manufacturer: $row[1] </center>";
echo "<br>";
echo "<center> Model: $row[2] </center>";
echo "<br>";
echo "<center>Android Version: $row[3] </center>";
echo "<br>";
echo "<center> OS Release Date: $row[4] </center>";
echo "<br>";
echo "<center> Security Update: $row[5] </center>";
echo "</h3>";


?>
<footer>
  <p>Created by Emily Childers, Remy Dahlke, Ashley Kim, James Mahon, Neil Nguyen, Adam Ten Hoeve</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="AndroidArmy.js"></script>
</body>
</script>
</body>
</html>
