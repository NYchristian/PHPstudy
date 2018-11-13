<?php


$servername = '127.0.0.1';
$username = 'root';
$password = 'rudos248';
$dbname = 'mydb';
$name =  $_POST['name'];
$email = $_POST['email'];
$pword = $_POST['pword'];
$errors = array();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mytable(name, email, pword)
VALUES ('$name','$email', '$pword')";

if (mysqli_query($conn, $sql)) {
    
    echo $id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>