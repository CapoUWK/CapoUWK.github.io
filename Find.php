<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">   
	<title>Home</title>
  <link rel="stylesheet" href="Find.css">
 
</head>
<body>
<div class = "PageContent">

<nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="browse.html">Browse Available Pets</a></li>
        <li><a href="find.php">Find a dog/cat</a></li>
        <li><a href="dog-care.html">Dog Care</a></li>
        <li><a href="cat-care.html">Cat Care</a></li>
        <li><a href="giveaway.html">Have a pet to give away</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="createaccount.php">Create an account</a></li>
      </ul>
    </nav>
  
     <div class="PageContent" id ="content">
    
<?php
	include 'header.php';
?>
 <h2>Find Cat/Dog</h2>
     
    <form>
      <label for="pet-type">Cat or Dog:</label>
      <select id="pet-type">
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
      </select>
      
      <label for="breed">Breed:</label>
      <select id="breed">
        <option value="">Doesn't Matter</option>
        <option value="labrador">Labrador Retriever</option>
        <option value="golden-retriever">Golden Retriever</option>
        <option value="poodle">Poodle</option>
     
      </select>
      
      <label for="age">Preferred Age:</label>
      <select id="age">
        <option value="">Doesn't Matter</option>
        <option value="puppy-kitten">Puppy/Kitten</option>
        <option value="adult">Adult</option>
        <option value="senior">Senior</option>
      </select>
      
       <label for="gender">Preferred Gender:</label>
      <select id="gender">
        <option value="">Doesn't Matter</option>
        <option value="young">Young</option>
        <option value="adult">Adult</option>
      </select>
      
      <label for="Compatibility">Compatibility:</label>
      <select id="Compatibility">
        <option value="">Doesn't Matter</option>
        <option value="Gets Along with Other Dogs">Gets Along with Other Dogs</option>
        <option value="Good with Small Children">Good with Small Children</option>
      
      </select>
      <br>
      <button type="submit">Submit</button>
      <button type="reset">Clear</button>
    </form>

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