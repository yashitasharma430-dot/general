<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$conn = new mysqli("localhost","root","","confidential");

if($conn->connect_error){
die("Connection failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if (!str_ends_with($email, "@nith.ac.in")) {
die("Only NITH emails allowed");
}

$sql = "INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')";

if($conn->query($sql) === TRUE){
echo "Account created successfully";
}
else{
echo "Error: ".$conn->error;
}

$conn->close();

}

?>
