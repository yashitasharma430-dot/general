<?php

session_start();

$conn = new mysqli("localhost","root","","confidential");

if($conn->connect_error){
die("Connection failed");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if($result->num_rows > 0){

$row = $result->fetch_assoc();

if(password_verify($password,$row['password'])){

$_SESSION['user'] = $row['email'];

header("Location: dashboard.php");
exit();

}
else{
echo "Incorrect password";
}

}
else{
echo "User not found";
}

$conn->close();

?>
