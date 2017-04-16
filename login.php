<?php

require 'connect.php';
session_start();

if(isset($_POST['username']) and isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($con,$query);
	$row = mysqli_num_rows($result);
	{

		if($row == 1)
		{
			$_SESSION['username'] = $username;
			if($_SESSION['username'] == 'admin')
			{
				header('location:admin.php');
			}
			else
			{
				header('location:user.php');
			}
			
		}
		elseif ($row > 1) {
			echo "The database is inconsistent Please Contact Administrator";
		}
		else
		{
			echo "<script>alert('either username or password is incorrect')</script>";
		}
	}
}


?>



<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="main.html" style="font-size:200% ; color: white">Noisli</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="signup.php" style="font-size:150% ; color: white">SignUp</a></li>       
        
      </ul>
    </div>
  </div>
</nav>



<div class="jumbotron">
	<div class="container-fluid">
  <form action = 'login.php' method = 'POST'>
  	<div class="row"><div class="col-md-12"> .</div></div>
  	<div class="row"><div class="col-md-12"> .</div></div>
  	<div class="row"><div class="col-md-12"> .</div></div>
    <div class="form-group">
    	<div class="row">
    		<div class="col-md-4"></div>
    		<center>
    			<div class="col-md-4">
      				<label for="UserName" style="color: white">UserName:</label>
      				<input type="UserName" class="form-control" id="UserName" placeholder="Enter UserName" name="username" required>
      			</div>
      		</center>
      	</div>
    </div>
    <div class="form-group">
    	<div class="row">
    		<div class="col-md-4"></div>
    		<center>
    			<div class="col-md-4">
    				<label for="pwd" style="color: white">Password:</label>
    				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    			</div>
    		</center>
    	</div>
    </div>
    <div class="row">
    	<div class="col-md-4"></div>
    	<div class="col-md-4">
    		<div class="checkbox">
    			<label><input type="checkbox" >Remember me</label>
    		</div>
    	</div>
    </div>
    <center><button type="submit" class="btn btn-info btn-lg">login</button></center>	
  </form>
  </div>
</div>

</body>
</html>