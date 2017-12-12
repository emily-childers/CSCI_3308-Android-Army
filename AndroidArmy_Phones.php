<html>
<div id="main">
<head>
  <link rel="stylesheet" href="AndroidArmy_Phones.css">
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
        <a href="AndroidArmy_About.hmtl">ABOUT</a>
        <a href="AndroidArmy_Phones.php">PHONES</a>
        <a href="AndroidArmy_Submit.php">SUBMIT</a>
        <a href="AndroidArmy_Contact.html">CONTACT</a>
      </div>

      <!-- Use any element to open the sidenav -->
      <span onclick="openNav()"><a href="#menu">
      &#9776;
      </a></span>
</h1>
<!-- 
-->

<h2>Phones</h2>

<h5> 
<!--
the description of what the page contains
-->
<i> 
Every entry in our database. <br>
<strong>Feel free to submit an unlisted update! </strong> <br>
~Format~<br>
Make Model, O.S. Version Name, O.S. Release Date, Security
</i> </h5>

<div id="mainDiv">
<br>
<?php
// Obtain a connection object by connecting to the db
$connection = @mysqli_connect("localhost", "rdahlke", "10405611", "project");
// please fill these parameters with the actual data
if(mysqli_connect_errno())
{
	echo "<h4>Failed to connect to MySQL:
	</h4>".mysqli_connect_error();
}
else
{
	//echo "<h4>Successfully connected to MySQL: </h4>";
}
$query = "Select manufacturer, make, version, OSRelease, security from phone";
$resultset = mysqli_query($connection,$query);
$count = 0;


while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {//loops through rows in database

	echo "<b><p>";
	echo "<a href='AndroidArmy_Details.php?manufacturer=$row[0]&make=$row[1]'>";
	echo $row[0];
	echo ' ';
	echo $row[1];
	echo "</a>";
	echo "</p></b>";

	$count = $count + 1;//counts number of phones

}


	echo "<br><b># of phones: ";//prints number of phones
	echo "<big>";
	echo $count;
	echo "</big>";
	echo "</b>";

?>
</div>
<style>
.filterDiv {
  float: left;
  background-color: #45C555;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none;
}
.show {
  display: block;
}
.container {
  margin-top: 50px;
  overflow: hidden;
}
</style>
<body>
<!-- 

-->
<footer>
  <p>Created by Emily Childers, Remy Dahlke, Ashley Kim, James Mahon, Neil Nguyen, Adam Ten Hoeve</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="AndroidArmy.js"></script>
</body>
</script>
</html>
