<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Overlayed Cards with Gradient Background</title>
<style>
 body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.brand-card2 {
    position: relative;
    background-color: #be2ef6;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    margin: 50px auto;
    max-width: 90%;
    z-index: 1;
}

.brand-card2 h1 {
    margin: 0;
    color: black;
}

.grid-container2 {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-gap: 20px;
    margin: 10px auto 0;
    padding: 20px;
    z-index: 0;
}

.card2 {
    position: relative;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding-top: 5%;
    padding-bottom: 30px;
    text-align: center;
    overflow: hidden;
}

.card2 img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    border-radius: 10px;
}

.name2 {
    text-align: center;
    color: black;
    font-size: 120%;
    margin-bottom: 5%;
}

@media only screen and (max-width: 768px) {
    .brand-card2 {
        padding: 15px;
    }

    .grid-container2 {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        grid-gap: 10px;
        padding: 15px;
    }

    .card2 {
        padding-top: 10%;
        padding-bottom: 20px;
    }
}

@media only screen and (max-width: 480px) {
    .grid-container2 {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
}

</style>
<script>
    function redirectToPage6(productName6) {
      // Define the base URL of the destination page
      var baseURL = "underprice.php";
  
      // Replace spaces with dashes and convert to lowercase for consistency
      var formattedProductName6 = productName6.toLowerCase().replace(/\s+/g, '-');
  
      // Construct the final URL with the product name
      var finalURL = baseURL + "?product=" + formattedProductName6;
  
      // Redirect to the final URL
      window.location.href = finalURL;
    }
  </script>
</head>
<body>

<div class="brand-card2" onclick="redirectToPage6('HandBag')">
  <h1 style="color: black;align-items: start;font-size:300%;">Shop Under</h1>
  <div class="grid-container2">
    <div class="card2">
      <img src="./public/image-23@2x.png" alt="Image 1">
      <div class="name2"><b>Only At 499/-</b></div>
    </div>
    <div class="card2">
      <img src="./public/image-24@2x.png" alt="Image 2">
      <div class="name2"><b>Only At 599/-</b></div>
    </div>
    <div class="card2">
      <img src="./public/image-34@2x.png" alt="Image 3">
      <div class="name2"><b>Only At 699/-</b></div>
    </div>
    
    
  </div>
</div>

</body>
</html>
