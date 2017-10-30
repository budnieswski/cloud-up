<?php

include('db.php');

$query = "INSERT into `navigation` (agent, server) VALUES ('".$_SERVER['HTTP_USER_AGENT']."', '".json_encode($_SERVER)."')";
$result = mysqli_query($con,$query);
if($result){
    echo $_SERVER['HTTP_USER_AGENT'];
} else {
  echo "An error";
}



die();
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
