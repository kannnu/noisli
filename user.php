

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Noisli</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src='sound.js'></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="user.php" style="font-size: 200% ; color: white">Noisli</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php" style="font-size:150% ; color: white">Profile</a></li>
        <li><a href="favorites.php" style="font-size:150% ; color: white">Favorites</a></li>
        <li><a href="logout.php" style="font-size:150% ; color: white">LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">

   <div class="col-md-3">
     
   </div>

    <div class="col-md-3">

      <img src="thunder.png" title="ThunderStorm">
      <br>
      <button id="playthunder" class='thunder'>Play</button>
      <br><br>

      <img src="wind.png" title="Wind">
      <br>
      <button id="playwind" class="wind">Play</button>
      <br><br>

      <img src="seaside.png" title="SeaSide">
      <br>
      <button id="playseaside" class="seaside">Play</button>
      <br><br>

      <img src="summernight.png" title="SummerNight">
      <br>
      <button id="playsummerNight" class="summernight">Play</button>
      <br><br>

    </div>


    <div class="col-md-3">

      <img src="fire.png" title="Fire">
      <br>
      <button id="playfire" class="fire">Play</button>
      <br><br>
            
      <img src="forest.png" title="Forest">
      <br>
      <button id="playforest" class="forest">Play</button>
      <br><br>

      <img src="waterstream.png" title="WaterStream">
      <br>
      <button id="playwaterstream" class="waterstream">Play</button>
      <br><br>


    </div>
     <div class="col-md-6"></div>
  </div>
</div>


</body>
</html>
