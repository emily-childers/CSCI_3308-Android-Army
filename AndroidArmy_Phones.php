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
        <a href="frontpage.php">HOME</a>
        <a href="AndroidArmy_About.hmtl">ABOUT</a>
        <a href="AndroidArmy_Phones.html">PHONES</a>
        <a href="AndroidArmy_Submit.html">SUBMIT</a>
        <a href="AndroidArmy_Contact.html">CONTACT</a>
      </div>

      <!-- Use any element to open the sidenav -->
      <span onclick="openNav()"><a href="#menu">
      &#9776;
      </a></span>
</h1>
<!-- need to add php that connects to data
<?php
	
	$connection = @mysqli_connect(localhost, root, bookekgom, db);
	/*$query ="SELECT * FROM phone";
	$result = mysqli_query($connection,$query);
	
	echo "<table>
                <tr>
                <th>id</th>
                <th>name</th>
                <th>qty</th>
                <th>price</th>
                <th></th>
                </tr>";
	while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM))
	{
		echo "<tr>";
      	        echo"<td>" .$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysql_free_result($result);
	mysql_close($connection);*/
	
?>
-->
<h2>Phones</h2>

<h5> <i> 
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


while ($row = mysqli_fetch_array($resultset, MYSQLI_NUM)) {
	echo "<b><p><span>";
	echo $row[0]." ".$row[1].", ".$row[2].", ".$row[3].", ".$row[4]."	";
	echo "</span></p></b>";
	//echo "<input type=\"submit\" class=\"button\" name=\"".$row[0]."\" value=\"delete\"/>"; 
	//echo "<br>";
	$count = $count + 1;

}


	echo "<br><b># of phones: ";
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
<h3>
<input type="radio" onclick="filterSelection('all')" name="category" checked> Show all<br>
<input type="radio" onclick="filterSelection('cars')" name="category"> Manufacturer<br>
<input type="radio" onclick="filterSelection('animals')" name="category"> Make <br>
<input type="radio" onclick="filterSelection('fruits')" name="category"> Version<br>

<div class="container">
  <div class="filterDiv cars">BMW</div>
  <div class="filterDiv colors fruits">Orange</div>
  <div class="filterDiv cars">Volvo</div>
  <div class="filterDiv colors">Red</div>
  <div class="filterDiv cars animals">Mustang</div>
  <div class="filterDiv colors">Blue</div>
  <div class="filterDiv animals">Cat</div>
  <div class="filterDiv animals">Dog</div>
  <div class="filterDiv fruits">Melon</div>
  <div class="filterDiv fruits animals">Kiwi</div>
  <div class="filterDiv fruits">Banana</div>
  <div class="filterDiv fruits">Lemon</div>
  <div class="filterDiv animals">Cow</div>
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}
</script>
</h3>
-->
<footer>
  <p>Created by Emily Childers, Remy Dahlke, Ashley Kim, James Mahon, Neil Nguyen, Adam Ten Hoeve</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="AndroidArmy.js"></script>
</body>
</script>
</html>