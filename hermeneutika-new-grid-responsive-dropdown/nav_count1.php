<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">hermeneutika</a>
  <a href="news1.php">News</a>
  <div class="dropdown">
  
    <button class="dropbtn">Philosopy
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="exist1.php">Existentialism</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  
  
  <a href="#news">Theology</a>
  <div class="dropdown">
    <button class="dropbtn">Music 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <a href="war1.php">War</a>
  <div class="dropdown">
    <button class="dropbtn">Finance/Economics
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="econ1.php">Economics</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Bible
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Hermeneutics</a>
      <a href="#">Apologetics</a>
      <a href="#">Polemics</a>
      <a href="#">Prophecy</a>
    </div>
  </div> 
  <a href="israel1.php">Israel</a>

  <div>since 20/09/24 count:</div>

  <div class="website-counter align-right color=white"></div>
  <!--<button id="reset">Reset</button>-->
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<!--<div style="padding-left:16px">
  <h2>Responsive Topnav with Dropdown</h2>
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
