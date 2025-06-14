<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style1.css" />
  <title>Document</title>
</head>
<body>
<nav id="menu">
  <label for="tm" id="toggle-menu">Navigation <span class="drop-icon">▾</span></label>
  <input type="checkbox" id="tm">
  <ul class="main-menu clearfix">
    <li><a href="#">Sample</a></li>
    <li><a href="#">2-level DD 
        <span class="drop-icon">▾</span>
        <label title="Toggle Drop-down" class="drop-icon" for="sm1">▾</label>
      </a>
      <input type="checkbox" id="sm1">
      <ul class="sub-menu">
        <li><a href="#">Item 2.1</a></li>
        <li><a href="#">Item 2.2
            <span class="drop-icon">▾</span>
            <label title="Toggle Drop-down" class="drop-icon" for="sm2">▾</label>
          </a>
          <input type="checkbox" id="sm2">
          <ul class="sub-menu">
            <li><a href="#">Item 2.2.1</a></li>
            <li><a href="#">Item 2.2.2</a></li>
            <li><a href="#">Item 2.2.3</a></li>
          </ul>
        </li>
        <li><a href="#">Item 3.4</a></li>
      </ul>
    </li>
    <li><a href="#">Another Sample</a></li>
  </ul>
</nav>
  
</body>
</html>