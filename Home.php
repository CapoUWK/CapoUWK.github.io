<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
	<title>Home</title>
  <link rel="stylesheet" href="Home.css">
</head>
<body>
<div class = "PageContent">

<nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="browse.html">Browse Available Pets</a></li>
        <li><a href="Find.php">Find a dog/cat</a></li>
        <li><a href="dog-care.html">Dog Care</a></li>
        <li><a href="cat-care.html">Cat Care</a></li>
        <li><a href="createaccount.php">Have a pet to give away</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="creatACC.php">Create an account</a></li>
        
      </ul>
    </nav>
  
     <div class="PageContent" id ="content">
    
<?php
	include 'header.php';
?>
<h2>Welcome to Find Pet</h2>
 
<?php
	include 'footer.php';
?>
    </div>
    </div>
    <script>function displayDateTime() {
  var currentDateTime = new Date();
  var dateString = currentDateTime.toDateString();
  var timeString = currentDateTime.toLocaleTimeString();
  var dateTimeString = dateString + ' ' + timeString;
  document.getElementById("date-time").innerHTML = dateTimeString;
}

setInterval(displayDateTime, 1000);

    </script>
    </body>
</html>