<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/image.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
			</style>
		
		<title>Document</title>
	</head>
	<body>


			<img class="logo" src="img/hope-logo.jpg" alt="hope-logo" />
<div class="topnav" id="myTopnav">
			
					<a class="main-nav-link" href="index.php">Home</a>
					<a class="main-nav-link" href="#meals">Churches</a>
					
					<a class="main-nav-link" href="#testimonials">Gallery</a>
				
					<a class="main-nav-link" href="#pricing">Events</a>
					
					<a class="main-nav-link nav-cta" href="#cta">Strategic Priorities</a>
						
				
					<a class="main-nav-link" href="orgs1.php">Organisations</a>
					<a class="main-nav-link" href="purpose1.php">Purpose</a>
					
					<a class="main-nav-link" href="work1.php">How we work</a>
					
					<a class="main-nav-link" href="angel1.php">Street Angels</a>
					
					<a class="main-nav-link nav-cta" href="young.php">Young People</a>
					
					<a class="main-nav-link" href="praywalk1.php">Prayer Walking</a>
					<a class="main-nav-link" href="eco1.php">Eco Church</a>
					
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
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
			<button class="btn-mobile-nav">
			<ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
			<ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
			</button>
				
			
		
</body>
</html>