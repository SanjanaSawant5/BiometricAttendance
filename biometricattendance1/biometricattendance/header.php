<?php 
session_start();
 
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<header>
<div class="header">
	<div class="logo">
		<a href="index.php">Biometric Attendance</a>
	</div>
</div>
</header>

<div class="topnav" id="myTopnav">
  
<a href="dashboard.php">Dashboard</a>
      <a href="homepage.php">Student Detail</a>
      <a href="ManageUsers.php">Manage Student</a>
  <a href="UsersLog.php">Attendance</a>
  <a href="#">Average Attendance</a>
  <a href="#">Holidays List</a>
  <a href="javascript:void(0);" class="icon" onclick="navFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
	function navFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}
</script>
</html>
	
