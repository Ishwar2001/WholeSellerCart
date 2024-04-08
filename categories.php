<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Cards</title>
<style>
  .container4 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    
  }
  .card4 {
    width: 20%;
    margin: 10px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 10px;
    box-sizing: border-box; /* Include padding in width calculation */
  }
  .card4 img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
  }
  .product-name4 {
    margin-top: 10px;
    font-weight: bold;
  }
</style>
<section>
<?php include 'header1.php';?>>
</section>
<script>
    function redirectToPage(productName4) {
      // Define the base URL of the destination page
      var baseURL = "brandlist.php";
  
      // Replace spaces with dashes and convert to lowercase for consistency
      var formattedProductName4 = productName4.toLowerCase().replace(/\s+/g, '-');
  
      // Construct the final URL with the product name
      var finalURL = baseURL + "?product=" + formattedProductName4;
  
      // Redirect to the final URL
      window.location.href = finalURL;
    }
  </script>
</head>

<body>


    <h2 style="text-align: center;">Categories</h2>
<div class="container4" onclick="redirectToPage('HandBag')">
  
  <!-- Card 1 -->
  
  <div class="card4">
    <img src="./public/image-22@2x.png" alt="Product 1">
    <div class="product-name4">HandBag</div>
  </div>

  <!-- Card 2 -->
  <div class="card4">
    <img src="./public/image-23@2x.png" alt="Product 2">
    <div class="product-name4">Satchel</div>
  </div>

  <!-- Card 3 -->
  <div class="card4">
    <img src="./public/image-24@2x.png" alt="Product 3">
    <div class="product-name4">Sling Bag</div>
  </div>

  <!-- Card 4 -->
  <div class="card4">
    <img src="./public/image-25@2x.png" alt="Product 4">
    <div class="product-name4">Crossbody Bag</div>
  </div>

  <!-- Card 5 -->
  <div class="card4">
    <img src="./public/image-26@2x.png" alt="Product 5">
    <div class="product-name4">Sling Bag</div>
  </div>

  <!-- Card 6 -->
  <div class="card4">
    <img src="./public/image-27@2x.png" alt="Product 6">
    <div class="product-name4">Mother Bag</div>
  </div>

  <!-- Card 3 -->
  <div class="card4">
    <img src="./public/image-24@2x.png" alt="Product 3">
    <div class="product-name4">Hand Bag</div>
  </div>

  <!-- Card 4 -->
  <div class="card4">
    <img src="./public/image-25@2x.png" alt="Product 4">
    <div class="product-name4">Party Clutches</div>
  </div>

  <!-- Card 5 -->
  <div class="card4">
    <img src="./public/image-26@2x.png" alt="Product 5">
    <div class="product-name4">Sling Bag</div>
  </div>

   <!-- Card 6 -->
   <div class="card4">
    <img src="./public/image-27@2x.png" alt="Product 6">
    <div class="product-name4">Hand Bag</div>
  </div>

  <!-- Card 1 -->
  <div class="card4">
    <img src="./public/image-22@2x.png" alt="Product 1">
    <div class="product-name4">Weekender Bags</div>
  </div>

  <!-- Card 2 -->
  <div class="card4">
    <img src="./public/image-23@2x.png" alt="Product 2">
    <div class="product-name4">BagPacks</div>
  </div>
  <div class="card4">
    <img src="./public/image-39@2x.png" alt="Product 5">
    <div class="product-name4">Sling Bag</div>
  </div>

   <!-- Card 6 -->
   <div class="card4">
    <img src="./public/image-25@2x.png" alt="Product 6">
    <div class="product-name4">Hand Bag</div>
  </div>

  <!-- Card 1 -->
  <div class="card4">
    <img src="./public/image-36@2x.png" alt="Product 1">
    <div class="product-name4">Weekender Bags</div>
  </div>

  <!-- Card 2 -->
  <div class="card4">
    <img src="./public/image-35@2x.png" alt="Product 2">
    <div class="product-name4">BagPacks</div>
  </div>

</div>
<section>
<?php include 'footer.php';?>>
</section>
</body>
</html>
