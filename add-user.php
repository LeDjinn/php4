<?php

include 'database-connection.php';

// Get data from form
$login = $_GET["login"];
$pwd = $_GET["pwd"];
$email = $_GET["email"];


$sql = "INSERT INTO user
VALUES (NULL,'$login', '$pwd', '$email')";

if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";

	header("location: signin.php?sucess=1");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>