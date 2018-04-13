<?php

// Create connection
$conn = new mysqli('127.0.0.1', 'root', '', 'users');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$city=$_POST['City'];
$loc=$_POST['loc'];
$name=$_POST['type'];
$Type=$_POST['Org'];
$email=$_POST['email'];
$Cont=$_POST['Con'];

$sql = "INSERT INTO food (Type, Org, Email,Contact) VALUES ('$name', '$Type','$email','$Cont')";

if ($conn->query($sql) === TRUE) {
    header("refresh:1;url=thank.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>