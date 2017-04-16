<?php                          // this code is also not working and i want to add favorites also 

require "connect.php";
session_start();

if (isset($_POST['title']) || isset($_POST['image']) || isset($_POST['audio'])) {

  $title = $_POST['title'];
  $image = $_POST['image'];
  $audio = $_POST['audio'];

  $query = "INSERT INTO audiolist VALUES ('$title', '$image', '$audio')";
  $result = mysqli_query($con,$query);
  if ($result) {
    echo "<script>alert('Your audio has inserted successfully');</script>";
  }
}

?> 

<html lang="en">
<head>
  <title>AudioUpload</title>
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
      <a class="navbar-brand" href="user.php" style="font-size:200% ; color: white">Noisli</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php" style="font-size:150% ; color: white"> LogOut</a></li>        
      </ul>
    </div>
  </div>
</nav>



<div class="jumbotron">
	<div class="container-fluid">
  <form action = 'profile.php' method = 'POST'>
  	<div class="row"><div class="col-md-12"> .</div></div>
  	<div class="row"><div class="col-md-12"> .</div></div>
  	<div class="row"><div class="col-md-12"> .</div></div>
    <div class="form-group">
    	<div class="row">
    		<div class="col-md-4"></div>
    		<center>
    			<div class="col-md-4">
      				<label for="Title" style="color: white">Title:</label>
      				<input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" required>
      			</div>
      		</center>
      	</div>
    </div>
    <div class="form-group">
    	<div class="row">
    		<div class="col-md-4"></div>
    		<center>
    			<div class="col-md-4">
    				<label for="Image" style="color: white">Image:</label>
    				<input type="file" class="form-control" id="image" name="image" required>
    			</div>
    		</center>
    	</div>
    </div>
    <div class="form-group">
    	<div class="row">
    		<div class="col-md-4"></div>
    		<center>
    			<div class="col-md-4">
    				<label for="Audio" style="color: white">Audio:</label>
    				<input type="file" class="form-control" id="audio" name="audio" required>
    			</div>
    		</center>
    	</div>
    </div>
    
    <center><button type="submit" class="btn btn-info btn-lg">Add Sound</button></center>	
  </form>
  </div>
</div>

</body>
</html>