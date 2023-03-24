<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
</head>

<header>
<div class="header">
	<div class="logo">
		<a href="index.php">Biometric Attendance</a>
	</div>
</div>

<body>
<form action="header.php" method="post">
<h2>LOGIN</h2>
<?php if(isset($_GET['error'])){ ?>
<p class="error"><?php echo $_GET['error'];  ?></p>
<?php } ?>

<label>User Name</label>
<input type="text" name="uname" placeholder="User Name"><br>

<label>Password</label>
<input type="password" name="uname" placeholder="Password"><br>

<button type="submit">Login</button>
</form>
</body>
</html>
