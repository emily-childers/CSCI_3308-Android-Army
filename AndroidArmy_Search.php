<?php
  $name = $_REQUEST["phone"];
  $connection = @mysqli_connect("localhost", "admin", "password123", "AndroidArmy");
  if(mysqli_connect_errno())
  {
    echo "<h4>Failed to connect to MySQL:
    </h4>".mysqli_connect_error();
  }
  else
  {
    echo "<h4>Successfully connected to MySQL: </h4>";
  }
  $query = "SELECT make, manufacturer FROM phone WHERE make LIKE '$name';";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result, MYSQLI_NUM);
  header("Location:/AndroidArmy_Details.php?manufacturer=$row[1]&make=$row[0]")
	// echo "<b><p>";
	// echo "<a href='AndroidArmy_Details.php?manufacturer=$row[1]&make=$row[0]'>";
	// echo $row[1];
	// echo ' ';
	// echo $row[0];
	// echo "</a>";
	// echo "</p></b>";
?>
