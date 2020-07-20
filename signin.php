<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body style="margin: 20px">

	<form action="verify-user.php" method="get">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" name="login" class="form-control"  placeholder="Enter login">

  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>

<?php
	
	if(isset($_GET['error'])) {

		echo "<span style='color:red' >vérifier login / password </span>";
	}

	if(isset($_GET['sucess'])) {

		echo "<span style='color:green' >Votre compte a été bien crée </span>";
	}
?>

