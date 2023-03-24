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
  <!-- partial:index.partial.html -->
  <div class="login-form">
    <form>
      <h1>Login</h1>
      <div class="content">
        <div class="input-field">
          <input type="USERNAME" placeholder="username" autocomplete="nope">
          <input type="password" placeholder="Password" autocomplete="new-password">
        </div>
      </div>
    </form>

      <div class="action">
        <button>Sign in</button>
      </div>
  </div>
  <!-- partial -->
  
<script>
    function registerModal() {
      Swal.fire({
  title: 'Register as',
  showDenyButton: true,
  confirmButtonText: 'Admin',
  denyButtonText: `Student`,
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    
    window.location.replace('adminRegistration.php');
  } else if (result.isDenied) {
    window.location.replace('studentRegistration.php');
  }
})

 }
  </script>
</body>

</html>
