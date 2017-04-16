  <?php

require "connect.php";
session_start();

if (isset($_POST['username'])) 
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$query = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($con,$query);
  $row = mysqli_num_rows($result);


	if ($row > 0) 
	{
		echo "<script>alert('Username already taken please select other username');</script>";
	}
	elseif ($password != $cpassword) 
	{
		echo "<script>alert('your password does not match with confirm password');</script>";
	}
	else
	{
    echo "string";
		$query1 = "INSERT INTO users VALUES ('$username','$password')";
		$result1 = mysqli_query($con,$query1);
		if ($result1) 
		{
			echo "<script>alert('Account created Successfully');</script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
		}

	}

}

?>


<html lang="en">
<head>
  <title>SignUp</title>
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
        <li><a href="login.php" style="font-size:150% ; color: white"><span class="glyphicon glyphicon-log-out"></span>  Login</a></li>        
      </ul>
    </div>
  </div>
</nav>



<div class="jumbotron">
	<div class="container-fluid">
  <form action = 'signup.php' method = 'POST'>
  	<div class="row"><div class="col-md-12"> .</div></div>
  	<div class="row"><div class="col-md-12"> .</div></div>
  	<div class="row"><div class="col-md-12"> .</div></div>
    <div class="form-group">
    	<div class="row">
    		<div class="col-md-4"></div>
    		<center>
    			<div class="col-md-4">
      				<label for="UserName" style="color: white">UserName:</label>
      				<input type="UserName" class="form-control" id="username" placeholder="Enter UserName" name="username" required>
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
    				<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
    			</div>
    		</center>
    	</div>
    </div>
    <div class="form-group">
    	<div class="row">
    		<div class="col-md-4"></div>
    		<center>
    			<div class="col-md-4">
    				<label for="pwd" >ConfirmPassword:</label>
    				<input type="password" class="form-control" id="cpassword" placeholder="Enter Confirm password" name="cpassword" required>
    			</div>
    		</center>
    	</div>
    </div>
    
    <center><button type="submit" class="btn btn-info btn-lg">signup</button></center>	
  </form>
  </div>
</div>

</body>
</html>