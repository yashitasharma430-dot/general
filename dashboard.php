<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: login.html");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Campus Dashboard</title>

<style>

body{
font-family: Arial, sans-serif;
background:#f4f4f4;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
margin:0;
}

.box{
background:white;
padding:30px;
border-radius:12px;
box-shadow:0 0 15px rgba(0,0,0,0.15);
width:350px;
text-align:center;
}

h2{
margin-bottom:10px;
}

hr{
margin:20px 0;
}

.btn{
display:block;
width:100%;
padding:12px;
margin:12px 0;
background:#1a73e8;
color:white;
text-align:center;
border-radius:8px;
text-decoration:none;
font-size:16px;
font-weight:500;
transition:0.3s;
}

.btn:hover{
background:#0f5ed7;
}

.logout{
display:block;
margin-top:15px;
text-align:center;
color:#1a73e8;
text-decoration:none;
font-weight:500;
}

.logout:hover{
text-decoration:underline;
}

</style>

</head>

<body>

<div class="box">

<h2>Campus Dashboard</h2>

<p>You are logged in as <b><?php echo $_SESSION['user']; ?></b></p>

<hr>

<a class="btn" href="post_lost.php">Post Lost Item</a>

<a class="btn" href="view_lost.php">View Lost Items</a>

<a class="btn" href="post_ride.php">Post Travel Ride</a>

<a class="btn" href="view_rides.php">View Travel Rides</a>

<a class="logout" href="logout.php">Logout</a>

</div>

</body>
</html>
