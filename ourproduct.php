<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="ourproduct.css">
    <title>Document</title>
  
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> -->
    <script>
      $(function(){
          $('#header').load('header.html');
        });
</script>
<script>
    $(function(){
        $('#footer').load('footer.html');
      });
</script>
</head>
<body>
    <header id="heaer"></header>
    <main>
      <section class="sec-left">
      <div class="product-container">
        <div class="row">
            <div class="column">
              <img src="images\image3.webp" alt="Nature" onclick="myFunction(this);">
            </div>
            <div class="column">
              <img src="images\clear3.webp" alt="Snow" onclick="myFunction(this);">
            </div>
            <div class="column">
              <img src="images\image5.webp" alt="Mountains" onclick="myFunction(this);">
            </div>
            <div class="column">
              <img src="images\image8.webp" alt="Lights" onclick="myFunction(this);">
            </div>
          </div>
          
          <!-- The expanding image container -->
          <div class="container">
            <!-- Close the image -->
            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
          
            <!-- Expanded image -->
            <img id="expandedImg" style="width:100%">
          
            <!-- Image text -->
            <div id="imgtext"></div>
          </div>
        </div>
      </section>
<section class="sec-right">
        <div class="product-info">
         
          <div class="info-table">
            <table class="center">
              <tr>
                <th>Filter Type</th>
                <th>Suction Filters</th>
              </tr>
              <tr>
                <td>Filter Medium Materrial</td>
                <td>Activated Carbon</td>
               
              </tr>
              <tr>
                <td>Usage/Application</td>
                <td>Industrial</td>
               
              </tr>
              <tr>
                <td>Materrial</td>
                <td>PP</td>
              </tr>
              <tr>
                <td>Color</td>
                <td>White</td>
              </tr>
              <tr>
                <td>Brand</td>
                <td>Glow Tech Polymer</td>
              </tr>
              <tr>
                <td>length</td>
                <td>5, 10, 20 inc</td>
              </tr>
              <tr>
                <td>Color</td>
                <td>White</td>
              </tr>
            </table>
          </div>

          
        </div>
      </section>
      <section>
      <div class="product-info-sentence">
        <div class="pro-heading">
          <h1>Cartridge Electroplating Filter</h1>
          <div class="price">RS 8,500  <small>/ Piece</small> </div>
          <div class="quantity">Minimum order quantity : <span> 1 Piece </span> </div>
        </div>
        <div class="para">
        <p>
          Our Electroplating System has a unique combination of high filtering quality and simple design. It is used in filtering process solutions, where in the solution is clarified for increasing its life as well as bettering the quality of resultant product. Our Filtration System, Media & Accessories are also useful in operations such as transferring pumping, aerosol packaging and in-line filtration of bulk liquids drum filling. With our filters, there are enhanced possibilities in the capacity of contaminant holding and flow.
        </p>
      </div>
      <div class="available-filter-glow-tech-polymer">
        <li>&bull; Single Stage Filtration Unit</li>
        <li>&bull; Two Stage Filtration Unit</li>
        <li>&bull; Multifunction Filtration Unit</li>
        <li>&bull; Simple Single Stage Re circulating Filtration Unit</li>
      </div>
      <div class="operations">
        <h2>operations :</h2>
        <p>
In the filter chamber, the septic liquid is entered. Then, it is uniformly distributed around the filter plates / cartridges. Now, the filtration process is carried out to inside from outside. On the outer side, solids are accumulated on filter paper / paper cloth / filter cartridge that are placed in the assembly which is of plate type. At the outlet, the clear filtrate is accumulated.
        </p>
      </div>
      <div class="salient-fea">
        <h3>Salient Features:</h3>
        <li>&bull;   Accommodates 5,10, 20 inches long filter cartridges</li>
        <li>&bull;   Bypass sealing arrangement</li>
        <li>&bull;  Easy to operate Flanged or quick-connect coupling at filter inlet & outlet</li>
        <li>&bull; Filter chambers are permanently piped</li>
        <li>&bull;  Flow rate up to 10000ltr./hr & More</li>
        <li>&bull;  High capacity of 'dirt holding'</li>
        <li>&bull; Simple and fast maintenance along with easy cleaning</li>
        <li>&bull; Standard design and maximum part interchangeability</li>
        <li>&bull;  Variety of sizes availability</li>
        <li>&bull;  With optional pressure gauge, gauge guard assembly and ventilation valve </li>
      </div>
      </div>

      
    </section>
    <div class="go-to-buttom">
     <a href="contact.php"> <button type="button" class="block"> Order Now! </button></a>
    </div>
    </main>
    <footer id="footer"></footer>
   
   <script>
    function myFunction(imgs) {
    // Get the expanded image
    var expandImg = document.getElementById("expandedImg");
    // Get the image text
    var imgText = document.getElementById("imgtext");
    // Use the same src in the expanded image as the image being clicked on from the grid
    expandImg.src = imgs.src;
    // Use the value of the alt attribute of the clickable image as text inside the expanded image
    imgText.innerHTML = imgs.alt;
    // Show the container element (hidden with CSS)
    expandImg.parentElement.style.display = "block";
  }
   </script>

</body>
</html>