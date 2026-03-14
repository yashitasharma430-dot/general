<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$conn = new mysqli("localhost","root","","confidential");

if($conn->connect_error){
die("Connection failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

/* allow only NIT Hamirpur emails */
if (!str_ends_with($email, "@nith.ac.in")) {
die("Only NITH emails allowed");
}

$sql = "INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')";

if($conn->query($sql) === TRUE){

/* store email in session */
$_SESSION['email'] = $email;

/* redirect to dashboard */
header("Location: dashboard.php");
exit();

}
else{
echo "Error: ".$conn->error;
}

$conn->close();

}
?>
