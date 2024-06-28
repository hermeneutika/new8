<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Hermeneutika's Home Page</title>
 <link href="menu.css" rel="stylesheet" type="text/css" />
 <link href="site.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
// javascript from https://webdesignerhut.com/active-class-navigation-menu/ it works!! 30/7/16
?>
<script>
    function setActive() {
      aObj = document.getElementById('nav').getElementsByTagName('a');
      for(i=0;i<aObj.length;i++) { 
        if(document.location.href.indexOf(aObj[i].href)>=0) {
          aObj[i].className='active';
        }
      }
    }
    window.onload = setActive;
		</script>
		<h1>Jesus the Lord Christ</h1>
<h2>King of kings and Lord of lords</h2>
    <menu id="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sf1.php">Prophet</a></li>
            <li><a href="philo.php">Great High Priest</a></li>
            <li><a href="search.php">Search</a></li>
						<li><a href="bible-link-input.php">Lord</a></li>
						<li><a href="change-table.php">Teaching</a></li>
						<li><a href="cv.htm">The Cross</a></li>
						<li><a href="live.php">Live</a></li>
						<li><a href="bible1.php">The Bible</a></li>
        </ul>
    </menu>



</body>

    
</html>
