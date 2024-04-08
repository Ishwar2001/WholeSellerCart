<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="brands.css">	
<script>
    function redirectToPage4(productName4) {
      // Define the base URL of the destination page
      var baseURL = "brandlisting.php";
  
      // Replace spaces with dashes and convert to lowercase for consistency
      var formattedProductName4 = productName4.toLowerCase().replace(/\s+/g, '-');
  
      // Construct the final URL with the product name
      var finalURL = baseURL + "?product=" + formattedProductName4;
  
      // Redirect to the final URL
      window.location.href = finalURL;
    }
  </script>
<style>
  .brand-card1 {
    padding: 20px;
  }

  .grid-container1 {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
  }

  .card1 {
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
  }

  .card1 img {
    width: 100%;
    height: auto;
  }

  h1 {
    margin-bottom: 20px;
  }

  @media only screen and (max-width: 768px) {
    .grid-container1 {
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
  }

  @media only screen and (max-width: 480px) {
    .grid-container1 {
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
  }
</style>
</head>
<body>

<div class="brand-card1" onclick="redirectToPage4('HandBag')">
  <h1 style="color: #f0f0f0;align-items: start;font-size:300%;">Featured Brands</h1>
  <div class="grid-container1">
    <div class="card1">
      <img src="./public/1-1@2x.png" alt="Image 1">
    </div>
    <div class="card1">
      <img src="./public/1-2@2x.png" alt="Image 2">
    </div>
    <div class="card1">
      <img src="./public/1-3@2x.png" alt="Image 3">
    </div>
    <div class="card1">
      <img src="./public/1-1@2x.png" alt="Image 4">
    </div>
    <div class="card1">
      <img src="./public/1-2@2x.png" alt="Image 5">
    </div>
    <div class="card1">
      <img src="./public/1-3@2x.png" alt="Image 6">
    </div>
    <div class="card1">
      <img src="./public/1-3@2x.png" alt="Image 3">
    </div>
    <div class="card1">
      <img src="./public/1-1@2x.png" alt="Image 4">
    </div>
  </div>
</div>

</body>
</html>
