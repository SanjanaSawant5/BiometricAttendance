<?php

include 'connectDB.php';

// Query to get total number of students
$total_students_query = "SELECT COUNT(*) AS total_students FROM users";
$total_students_result = mysqli_query($connection, $total_students_query);
$total_students_row = mysqli_fetch_assoc($total_students_result);
$total_students = $total_students_row['total_students'];

?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<header>
  <div class="header">
    <div class="logo">
      <a href="index.php">Biometric Attendance</a>
    </div>
    <div class="dashboard">
      <span>Total Students: <?php echo $total_students; ?></span>
    </div>
  </div>
</header>
<style>
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #f2f2f2;
  padding: 10px;
}

.logo {
  font-size: 24px;
  font-weight: bold;
}

.dashboard {
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.dashboard span {
  margin-left: 20px;
  font-size: 18px;
}
</style>
