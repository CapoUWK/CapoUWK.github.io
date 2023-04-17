<!DOCTYPE html>
<html>
<head>
	<title>Adoption Service</title>
	<style>

* {
    font-family: "Rubik", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
  }
  
  html {
    height: 100%;
  }
  
  
  
  .main_sections {
    min-height: 100%;
  }
  
  nav {
    background-color: #f3f3f3;
    border: 1px solid #ccc;
    float: left;
    height: 100%;
    padding: 10px;
    width: 200px;
  }
  
  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  nav li {
    margin-bottom: 10px;
  }
  
  nav a {
    color: #333;
    display: block;
    padding: 5px;
    text-decoration: none;
  }
  
  nav a:hover {
    background-color: #333;
    color: #fff;
  }
  
  
  
  
  .top_header {
      background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5% 15% 5% 8%;
  }
  
  .top_header .logo {
    color: silver;
    font-size: 20px;
    
  }
  
  header span {
    background-color: #f3f3f3;
    margin-left: 0.2rem;
    padding: 6px;
    border-radius: 6px;
  }
  
  
  .btn:hover {
    background: #87CEFA;
    color: #fff;
  }
  .nav_bar_1{
    background-color: #333;
    background-repeat: no-repeat;
    border: none;
    cursor: pointer;
    overflow: hidden;
    outline: none;

}

  /* footer */
  /* Footer Styles */
  footer {
      position: fixed;
     bottom: 0;
     width: 100%;
     height: 60px;   /* Height of the footer */
  
      background-color: #333;
    color: #fff;
  }

	</style>
</head>
<body>
<header class="header">

<div class="top_header">


	<a href="#" class="logo">
		<h2>Find<span>Pet</span></h2>
<img src="logo.png" alt="logo">

<nav class="nav_bar_1">
				<a href="../login and signup/login.html">Sign in</a>
				<a href="../login and signup/signup.html">Sign up</a>
			</nav>
	</a>

<br>
	
	<div id="date-time"></div>

	
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

</header>
</body>
</html>