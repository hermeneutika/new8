<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" /> 
  

  <title>Document</title>
  <title>Website Counter</title>
  <script defer src="index.js"></script>
  <link rel="stylesheet" href="counter.css" 
</head>
<body>

<nav>


  <ul class="menu">
    <li class="logo"><a href="#">THEODICY</a></li>
    <li>
    <div>Website visit count:</div>
  <div class="website-counter"></div>
  <!--<button id="reset">Reset</button>-->
    </li>
    <li class="item"><a href="#">Home</a></li>
    <li class="item"><a href="#">About</a></li>
    <li class="item has-submenu">
      <a tabindex="0">PRINCIPLES</a>
      <ul class="submenu">
        <li class="subitem"><a href="#">LINKS</a></li>
        <li class="subitem"><a href="#">NEWS</a></li>
        <li class="subitem"><a href="#">PRINCIPLES</a></li>
        <li class="subitem"><a href="#">THEOLOGY</a></li>
      </ul>
    </li>
    <li class="item has-submenu">
      <a tabindex="0">SCIENCE</a>
      <ul class="submenu">
        <li class="subitem"><a href="#">METHODOLGY</a></li>
        <li class="subitem"><a href="#">EVIDENCE</a></li>
        <li class="subitem"><a href="#">THEORY</a></li>
      </ul>
    </li>
    <li class="item"><a href="#">Blog</a></li>
    <li class="item"><a href="#">Contact</a>
    </li>
    <li class="item button"><a href="#">Log In</a></li>
    <li class="item button secondary"><a href="#">Sign Up</a></li>
    <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav>
<script>
  const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");
const items = document.querySelectorAll(".item");

/* Toggle mobile menu */
function toggleMenu() {
	if (menu.classList.contains("active")) {
		menu.classList.remove("active");
		toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
	} else {
		menu.classList.add("active");
		toggle.querySelector("a").innerHTML = "<i class='fas fa-times'></i>";
	}
}

/* Activate Submenu */
function toggleItem() {
	if (this.classList.contains("submenu-active")) {
		this.classList.remove("submenu-active");
	} else if (menu.querySelector(".submenu-active")) {
		menu.querySelector(".submenu-active").classList.remove("submenu-active");
		this.classList.add("submenu-active");
	} else {
		this.classList.add("submenu-active");
	}
}

/* Close Submenu From Anywhere */
function closeSubmenu(e) {
	if (menu.querySelector(".submenu-active")) {
		let isClickInside = menu
			.querySelector(".submenu-active")
			.contains(e.target);

		if (!isClickInside && menu.querySelector(".submenu-active")) {
			menu.querySelector(".submenu-active").classList.remove("submenu-active");
		}
	}
}
/* Event Listeners */
toggle.addEventListener("click", toggleMenu, false);
for (let item of items) {
	if (item.querySelector(".submenu")) {
		item.addEventListener("click", toggleItem, false);
	}
	item.addEventListener("keypress", toggleItem, false);
}
document.addEventListener("click", closeSubmenu, false);

</script>

  
</body>
</html>