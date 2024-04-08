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
    background: linear-gradient(to bottom, #fba43d, #ff7474); /* Gradient background */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    margin: 50px auto;
    max-width: 90%; /* Adjust width as needed */
    z-index: 1;
    color: #fff; /* Text color */
}

.brand-card2 h1 {
    margin: 0;
    font-size: 2em; /* Larger font size */
}

.grid-container2 {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); /* Responsive grid */
    grid-gap: 20px;
    margin: 10px auto 0;
    padding: 20px;
    z-index: 0;
    overflow: hidden; /* Hide overflow to prevent cards from wrapping */
    white-space: nowrap; /* Prevent cards from wrapping */
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
    display: inline-block; /* Display cards in a row */
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
  function redirectToPage5(productName5) {
    // Define the base URL of the destination page
    var baseURL = "categories.php";

    // Replace spaces with dashes and convert to lowercase for consistency
    var formattedProductName5 = productName5.toLowerCase().replace(/\s+/g, '-');

    // Construct the final URL with the product name
    var finalURL = baseURL + "?product=" + formattedProductName5;

    // Redirect to the final URL
    window.location.href = finalURL;
  }

  // JavaScript for automatic sliding
  var slideIndex = 0;
  carousel();

  function carousel() {
    var i;
    var cards = document.getElementsByClassName("card2");
    for (i = 0; i < cards.length; i++) {
      cards[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > cards.length) {slideIndex = 1}
    cards[slideIndex-1].style.display = "inline-block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
  }
</script>
</head>
<body>

<div class="brand-card2" onclick="redirectToPage5('HandBag')">
  <h1>Categories</h1>
  <div class="grid-container2">
    <div class="card2">
      <img src="./public/image-23@2x.png" alt="Image 1">
      <div class="name2">Product 1</div>
    </div>
    <div class="card2">
      <img src="./public/image-24@2x.png" alt="Image 2">
      <div class="name2">Product 2</div>
    </div>
    <div class="card2">
      <img src="./public/image-34@2x.png" alt="Image 3">
      <div class="name2">Product 3</div>
    </div>
    <div class="card2">
      <img src="./public/image-36@2x.png" alt="Image 4">
      <div class="name2">Product 4</div>
    </div>
    <div class="card2">
      <img src="./public/image-37@2x.png" alt="Image 5">
      <div class="name2">Product 5</div>
    </div>
    <div class="card2">
      <img src="./public/image-39@2x.png" alt="Image 6">
      <div class="name2">Product 6</div>
    </div>
  </div>
</div>

</body>
</html>
