<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&family=Lobster&family=Noto+Nastaliq+Urdu:wght@700&family=Pacifico&display=swap" rel="stylesheet">
    <title>GLOW TECH POLYNER</title>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- <div class="loader"></div> -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"> <img src="icons\icons8-up-squared-50.png" alt=""> </button>

    <div class="topnav">
      <a href="#home" class="active">Logo</a>
      <!-- Navigation links (hidden by default) -->
      <div id="myLinks">
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
      </div>
      <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>

    <div id="slider">
      <ul id="slideWrap"> 
        <li><img src="images\image7.webp" alt=""></li>
        <li><img src="images\image3.webp" alt=""></li>
        <li><img src="images\image6.webp" alt=""></li>
        <li><img src="images\clear1.webp" alt="images\clear4.webp"></li>
        <li><img src="images\clear7.webp" alt=""></li>
      </ul>
      <a id="prev" href="#">&#8810;</a>
      <a id="next" href="#">&#8811;</a>
    </div>
<script src="index.js"></script>
<script>
  window.onscroll = function() {Function()};

function Function() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>
  </body>
</html>