<!DOCTYPE html>
<html>
<div id="main">
<head>
  <link rel="stylesheet" href="AndroidArmy_Submit.css">
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
        <a href="AndroidArmy_Submit.php">SUBMIT</a>
        <a href="AndroidArmy_Contact.html">CONTACT</a>
      </div>

      <!-- Use any element to open the sidenav -->
      <span onclick="openNav()"><a href="#menu">
      &#9776;
      </a></span>
</h1>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    width: 80%;
    height: 80%;
    margin:auto;
}
</style>
<div class = "container">
<form action="SQLInsertHandler.php" method: "POST">
  <p>Id:&nbsp <input type="text" name="id" size="10" maxlength="11" /></p>
  <p>Manufacturer:&nbsp <input type="text" name="manufacturer" size="10" maxlength="11" /></p>
  <p>Make:&nbsp <input type="text" name="make" size="10" maxlength="20" /></p>
  <p>Version:&nbsp <input type="text" name="version" size="10" maxlength="30"
/></p>
  <p>OSRelease:&nbsp <input type="text" name="OSRelease" size="10" maxlength="30"
/></p>
  <p>Security:&nbsp <input type="text" name="security" size="10" maxlength="30"
/></p>
  <input type="submit" value="Add item" /> &nbsp <input type="reset" />
</form>
<footer>
  <p>Created by Emily Childers, Remy Dahlke, Ashley Kim, James Mahon, Neil Nguyen, Adam Ten Hoeve</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="AndroidArmy.js"></script>
</body>
</script>
</html>
