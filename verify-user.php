<?php

include 'database-connection.php';

// Get data from form
$login = $_GET["login"];
$pwd = $_GET["pwd"];



// préparation de la requête
$sql = "SELECT * FROM user WHERE login LIKE '$login' && password LIKE '$pwd' ";

// Exécution de la requete
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // user exist
  // so redirect to home page

	session_start();

	$_SESSION["login"] = $login;

	// v1 without session
	//header("location: profile-user.php?login=$login");

	// v1 with session
	header("location: profile-user.php");
   
} else {
  // user doesn't exist

	header("location: signin.php?error=1");
}


?>