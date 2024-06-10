<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="css/style.css" />
		<style></style>
	</head>
	<body>
		<img class="logo" src="img/hope-logo.jpg" alt="hope-logo" />
		<div class="topnav" id="myTopnav">
			<a href="#home" class="active">Home</a>
			<a href="#news">Churches</a>
			<a href="#contact">Gallery</a>
      <a href="#contact">Events</a>
      <a href="#contact">Strategic Priorities</a>
      <a href="#contact">How We Work</a>
      <a href="#contact">Strategic Priorities</a>
      <a href="#contact">Purpose</a>
      <a href="#contact">Organisations</a>
			<div class="dropdown">
				<button class="dropbtn">
					Dropdown
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="#">Eco Church</a>
					<a href="#">Prayer Walking</a>
					<a href="#">Young People</a>
          <a href="#">Street Angels</a>
				</div>
			</div>
			<a href="#about">About</a>
			<a
				href="javascript:void(0);"
				style="font-size: 15px"
				class="icon"
				onclick="myFunction()"
				>&#9776;</a
			>
		</div>

		<div style="padding-left: 16px">
			<h2>Responsive Topnav with Dropdown</h2>
			<p>Resize the browser window to see how it works.</p>
			<p>Hover over the dropdown button to open the dropdown menu.</p>
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
	</body>
</html>
