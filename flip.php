<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wholesaler</title>
  <link rel="stylesheet" href="bestseller.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /* Add CSS for card flip animation */
    .wholesaler-card {
      position: relative;
      width: calc(33.33% - 20px);
      height: 210px;
      perspective: 1000px;
      background-color: green;
      text-align: center;
      margin: 10px;
    }
    .wholesaler-card-inner {
      position: absolute;
      width: 100%;
      height: 100%;
      transition: transform 0.5s;
      transform-style: preserve-3d;
    }
    .wholesaler-card.flipped .wholesaler-card-inner {
      transform: rotateY(180deg);
    }
    .wholesaler-card-front, .wholesaler-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      backface-visibility: hidden;
    }
    .wholesaler-card-back {
      transform: rotateY(180deg);
    }
    .wholesaler-card img {
      max-width: 80%;
      max-height: 50%;
    }
    .wholesaler-card-description {
      margin-top: 10px;
    }

    /* Responsive Styles */
    @media only screen and (max-width: 768px) {
      .wholesaler-card {
        width: calc(50% - 20px);
      }
    }

    @media only screen and (max-width: 576px) {
      .wholesaler-card {
        width: calc(100% - 20px);
      }
    }

    @media only screen and (max-width: 400px) {
      .wholesaler-card {
        width: calc(100% - 10px);
      }
    }
  </style>
</head>
<body>

<section>
  <div class="best-sellers" style="color: green;text-align: center;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); padding: 30px;">
    <h1>SHOP FROM OUR CURATED PICKS </h1>
  </div>
</section>

<section>
  <div class="card-grid">
    <!-- Repeat your card elements here -->
    <!-- Card 1 -->
    <div class="wholesaler-card">
      <div class="wholesaler-card-inner">
        <div class="wholesaler-card-front">
          <img src="public/image-10@2x.png" alt="Image 1">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
        <div class="wholesaler-card-back">
          <img src="public/image-11@2x.png" alt="Image 1">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Repeat for other cards -->
    <!-- Card 2 -->
    <div class="wholesaler-card">
      <div class="wholesaler-card-inner">
        <div class="wholesaler-card-front">
          <img src="public/image-16@2x.png" alt="Image 2">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
        <div class="wholesaler-card-back">
          <img src="public/image-14@2x.png" alt="Image 2">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="wholesaler-card">
      <div class="wholesaler-card-inner">
        <div class="wholesaler-card-front">
          <img src="public/image-15@2x.png" alt="Image 3">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
        <div class="wholesaler-card-back">
          <img src="public/image-16@2x.png" alt="Image 3">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Card 4 -->
    <div class="wholesaler-card">
      <div class="wholesaler-card-inner">
        <div class="wholesaler-card-front">
          <img src="public/image-12@2x.png" alt="Image 4">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
        <div class="wholesaler-card-back">
          <img src="public/image-14@2x.png" alt="Image 4">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Card 5 -->
    <div class="wholesaler-card">
      <div class="wholesaler-card-inner">
        <div class="wholesaler-card-front">
          <img src="public/image-20@2x.png" alt="Image 5">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
        <div class="wholesaler-card-back">
          <img src="public/image-10@2x.png" alt="Image 5">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Card 6 -->
    <div class="wholesaler-card">
      <div class="wholesaler-card-inner">
        <div class="wholesaler-card-front">
          <img src="public/image-18@2x.png" alt="Image 6">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
        <div class="wholesaler-card-back">
          <img src="public/image-16@2x.png" alt="Image 6">
          <div class="wholesaler-card-description">
            <span class="price">@ 3,999</span>
            <div class="card-image1">
              <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
              <div class="off20">30% Off</div>
            </div>
            <span class="discounted-price" style="color:black;">4,999</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  // JavaScript to flip all cards at once
  const wholesalerCards = document.querySelectorAll('.wholesaler-card');
  let isFlipped = false;

  function flipWholesalerCards() {
    wholesalerCards.forEach(card => card.classList.toggle('flipped'));
    isFlipped = !isFlipped;
  }

  setInterval(flipWholesalerCards, 3000); // Change the time interval as needed (3000 milliseconds = 3 seconds)
</script>

</body>
</html>
