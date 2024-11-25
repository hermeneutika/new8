<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="grail.css" />
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Child abuse 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="tim1.php">Church of England</a>
      <a href="#">Roman Catholicism</a>
      <a href="#">others</a>
      <a href="abuse1.php">Reports</a>
      <a href="tommy1.php"></a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">The Law 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="tim1.php">Tim Lambesis</a>
      <a href="#">Jon Schaffer</a>
      <a href="#">Jesus the Christ</a>
      <a href="#">Randy Blythe</a>
      <a href="tommy1.php">Tommy Robinson</a>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">Inerrancy
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="chicargo.pdf">Inerrancy</a>
      <a href="#">Hermeneutics</a>
      <a href="#">Application</a>
      <a href="https://www.moodybible.org/beliefs/chicago-statement-biblical-inerrancy/">Moody Institute</a>
      <a href="39.pdf">Church of England</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Theodicy 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="theodicy1.php">Theodicy</a>
      <a href="#">Augustine</a>
      <a href="#">Irenaeus</a>
      <a href="hicks1.php">Hicks!</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Prophecy 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="revelation1.php">Revelation</a>
      <a href="#">Augustine</a>
      <a href="#">Irenaeus</a>
      <a href="hicks1.php">Hicks!</a>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">Philosophy
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="exist1.php">Existentialism</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Sciences
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">High Energy Physics</a>
      <a href="#">Mathematics</a>
      <a href="#">Biology?</a>
      <a href="evol1.php">Evolution</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Jesus
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="jesus1.php">Jesus</a>
      <a href="violence1.php">Pacifism</a>
      

      <a href="bible1.php">The Bible</a>
      <a href="false1.php">Deception</a>
      <a href="romans1.php">Romans</a>
      <a href="heal1.php">Healing</a>
      <a href="prophecy1.php">Prophecy</a>
      <a href="give1.php">Christian giving</a>
      <div class="dropdown">
    <button class="dropbtn">music
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="women1.php">Links about women</a>
      <a href="islam1.php">Islam </a>
      <a href="musvid1.php">Music vids</a>
    </div>
  </div> 

    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">music
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="women1.php">Links about women</a>
      <a href="islam1.php">Islam </a>
      <a href="musvid1.php">Music vids</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Misc 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="sf1.php">Science Fiction</a>
      <a href="cv1.php">The CV</a>
      <a href="music1.php">Music</a>
      <a href="news1.php">News</a>
      <a href="music1.php">The 12 Steps</a>
    </div>
  </div> 
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  <?php

include("counter.php");

?>
</div>
<!--
<div style="padding-left:16px">
  <h2>Theodicy the problem of evil and suffering</h2>
  <p>Resize the browser window to see how it works.</p>
  <p>Hover over the dropdown button to open the dropdown menu.</p>
</div>
-->
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
