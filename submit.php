<?php

$name=$_POST["username"];
$email=$_POST["email"];
$password= $_POST["password"];
echo $name;
echo $email;
echo $password;

$servername = "localhost";
$username = "root";
$mpassword = "Pass@123";
$dbname = "facebook";

// Create connection
$conn = mysqli_connect($servername, $username, $mpassword, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO users (name,email,password)VALUES('$name','$email','$password')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
