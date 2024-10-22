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
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Theodicy 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
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
      <a href="#">Existentialism</a>
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
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Jesus the Christ 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="jesus1.php">Jesus</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Women 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="women1.php">Links about women</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
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
      <a href="books1.php">Books</a>
    
    </div>
  </div> 
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  
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
