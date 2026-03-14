
<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: signup.html");
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
background:#f2f2f2;
margin:0;
padding:0;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.dashboard{
background:white;
padding:40px;
width:320px;
border-radius:12px;
box-shadow:0 4px 15px rgba(0,0,0,0.1);
text-align:center;
}

.btn{
display:block;
width:100%;
padding:12px;
margin:10px 0;
background:#2a6fd6;
color:white;
text-decoration:none;
border-radius:8px;
font-size:16px;
}

.btn:hover{
background:#1f55a7;
}

.logout{
display:block;
margin-top:15px;
color:#1a73e8;
text-decoration:none;
}

.logout:hover{
text-decoration:none;
}

</style>

</head>

<body>

<div class="dashboard">

<h2>Campus Dashboard</h2>

<p>
You are logged in as<br>
<strong><?php echo $_SESSION['email']; ?></strong>
</p>

<hr>

<a class="btn" href="post_lost.php">Post Lost Item</a>

<a class="btn" href="view_lost.php">View Lost Items</a>

<a class="btn" href="post_ride.php">Post Travel Ride</a>

<a class="btn" href="view_rides.php">View Travel Rides</a>

<a class="logout" href="logout.php">Logout</a>

</div>

</body>
</html>

