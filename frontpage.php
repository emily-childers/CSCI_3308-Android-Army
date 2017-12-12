<!-- /* php for the front page and search bar  */ -->

 <!DOCTYPE html>
 <html>
 <div id="main">
 <head>
   <link rel="stylesheet" href="AndroidArmy.css">
   <link rel="icon" href="https://i.imgur.com/BxSspbo.png">
   <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
   <title> Update Depot </title>
   <div id="logo"> <!-- display logo -->
     <img src="https://i.imgur.com/BxSspbo.png" width="125" height="125" alt="Logo">
   </div>
 </head>
 <body>

 <?php
   // error reporting for php
   error_reporting(-1);
   ini_set('dipslay errors', 1);
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
 ?>

 <h1> <!--side bar -->
       <div id="mySidenav" class="sidenav">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         <a href="AndroidArmy_About.html">ABOUT</a>
         <a href="AndroidArmy_Phones.php">PHONES</a>
         <a href="AndroidArmy_Submit.html">SUBMIT</a>
         <a href="#">CONTACT</a>
       </div>

       <!-- Use any element to open the sidenav -->
       <span onclick="openNav()"><a href="#menu">
       &#9776;
       </a></span>
 </h1>
 <h2>Android updates, simplified.</h2>
  
  
 <!--  Start of the search bar -->
 <form method="post" action="search.php?go" id="searchform">
   <input type="text" name="name" placeholder="enter a phone">
   <input type="submit" name="submit" value="Search">
 </form>
 <?php
  // Beginning of search bar php
  // A bunch of checks to make sure input is valid
   if(isset($_POST['submit']))
   {
     if(isset($_GET['go']))
     {
       if(preg_match("^/[A-Za-z0-9]+/", $_POST['name']))
       {
         $name = $_POST['name'];
         //Connect to the database or give error report. 
         $connection = @mysqli_connect("localhost", "rdahlke", "10405611", "project") or die ('I cannot connect to the database because: ' . mysql_error());
         //query to find phone in database
         $query = "SELECT make FROM phone WHERE make LIKE '%" . $name . "%' OR manufacturer LIKE '%" . $name . "%'";
         $resultName = mysqli_query($connection, $query);
        //Second query to get the manufacturer 
         $query2 = "SELECT manufacturer FROM phone WHERE make LIKE '%" . $name . "%' OR manufacturer LIKE '%" . $name . "%'";
         $resultManufacturer = mysqli_query($connection, $query2);
          echo "<a href=AndroidArmy_details.php?manufacturer=$resultMake> ";
       }
     }
     else
     {
       echo "<p> Please enter a search query</p>";
     }
   }
 ?>
 <div class="boxed">
 <h3> POPULAR MODELS</h3>
 </div>
 <p><div id="images">
   <div class="brightness">
     <a href="#"><img src="http://freevectorlogo.net/wp-content/uploads/2011/05/samsung-galaxy-s-logo-vector-400x400.jpg" alt = "Samsung Galaxy" style="width:100px;height:100px;"></a>
     <a href="#"><img src="https://boygeniusreport.files.wordpress.com/2016/10/google-pixel-trademark-logo.jpg?quality=98&strip=all&strip=all" alt = "Google Pixel" style="width:300px;height:100px;"></a>
     <a href="#"><img src="http://i.imgur.com/cX9MJYm.jpg" alt = "OnePlus" style="width:100px;height:100px;"></a>
   </div>
 </div>
 <div class="boxed2">
 <a href="#"><h4>SUBMIT AN UPDATE</h4></a>
 </div>
 <footer>
   <p>Created by Emily Childers, Remy Dahlke, Ashley Kim, James Mahon, Neil Nguyen, Adam Ten Hoeve</p>
 </footer>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script src="AndroidArmy.js"></script>
 </body>
 </script>
 </html>
