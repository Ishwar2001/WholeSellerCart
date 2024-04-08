<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Card Grid with Bag Types</title>
  <link rel="stylesheet" href="curted.css">	
  <script>
    function redirectToPage(productName4) {
      // Define the base URL of the destination page
      var baseURL = "header.php";
  
      // Replace spaces with dashes and convert to lowercase for consistency
      var formattedProductName4 = productName4.toLowerCase().replace(/\s+/g, '-');
  
      // Construct the final URL with the product name
      var finalURL = baseURL + "?product=" + formattedProductName4;
  
      // Redirect to the final URL
      window.location.href = finalURL;
    }
  </script>
  <style>



  </style>
</head>
<body>

<div class="card-grid name" style="color: #fff;border-radius: 5px;padding-top: 0%;padding-bottom: 0%;">
  <h1><b>SHOP FROM CURATED PICKS</b></h1>
</div>

<div class="card-grid" onclick="redirectToPage('HandBag')">
    
  <!-- Card 1 -->
  <div class="card">
    <img class="card-image" src="public/image-36@2x.png" alt="Image 1">
    
    <div class="card-content">
      <h3 class="card-title">Kevin Classic</h3>
      <p class="card-description">
        $3,999  
        <span class="offer-tag"> 20% Off</span>
        <span class="discounted-price">$4,999</span>
      </p>   
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card">
    <img class="card-image" src="public/image-23@2x.png" alt="Image 2">
    
    <div class="card-content">
      <h3 class="card-title">Kevin Classic</h3>
      <p class="card-description">
        $3,999  
        <span class="offer-tag"> 20% Off</span>
        <span class="discounted-price">$4,999</span>
      </p>   
    </div>
  </div>

  <!-- Card 3 -->
  <div class="card">
    <img class="card-image" src="public/image-22@2x.png" alt="Image 3">
    
    <div class="card-content">
      <h3 class="card-title">Kevin Classic</h3>
      <p class="card-description">
        $3,999  
        <span class="offer-tag"> 20% Off</span>
        <span class="discounted-price">$4,999</span>
      </p>   
    </div>
  </div>

  <!-- Card 4 -->
  <div class="card">
    <img class="card-image" src="public/image-21@2x.png" alt="Image 4">
    
    <div class="card-content">
      <h3 class="card-title">Kevin Classic</h3>
      <p class="card-description">
        $3,999  
        <span class="offer-tag"> 20% Off</span>
        <span class="discounted-price">$4,999</span>
      </p>   
    </div>
  </div>

  <!-- Card 5 -->
  <div class="card">
    <img class="card-image" src="public/image-20@2x.png" alt="Image 5">
    
    <div class="card-content">
      <h3 class="card-title">Kevin Classic</h3>
      <p class="card-description">
        $3,999  
        <span class="offer-tag"> 20% Off</span>
        <span class="discounted-price">$4,999</span>
      </p>   
    </div>
  </div>

  <!-- Card 6 -->
  <div class="card">
    <img class="card-image" src="public/image-35@2x.png" alt="Image 6">
    
    <div class="card-content">
      <h3 class="card-title">Kevin Classic</h3>
      <p class="card-description">
        $3,999  
        <span class="offer-tag"> 20% Off</span>
        <span class="discounted-price">$4,999</span>
      </p>   
    </div>
  </div>
 
</div>

</body>
</html>
