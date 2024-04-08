
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Card styles */
    .card {
    
      width: 100%;
      margin-bottom: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-image {
      position: relative;
      overflow: hidden;
    }

    .card-image img {
      width: 100%;
      height: auto;
      display: block;
    }

    .overlay {
      position: absolute;
      top: 10px;
      left: 10px;
      border-radius: 13.77px;
      background-color: white;
      padding: 4px;
      width: 142.2px;
      height: 35px;
    }

    .brand-logo {
      width: 50%;
      
    }

    .card-content {
      padding: 20px;
    }

    .card-title {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .card-description {
      font-size: 1rem;
      color: #666;
    }

    .price {
      color: black;
    }

    .off20 {
      position: absolute;
      top: 7px;
      left: 10px;
      padding: 3px 7px;
      border-radius: 5px;
      font-size: 1rem;
      color: white;
      font-weight: 600;
    }

    .frame-child {
      border-radius: 5.51px;
      width: 88.1px;
      height: 40.5px;
    }

    .card-image1 {
      position: relative;
      margin-right: 7px;
    }

    .discounted-price {
      text-decoration: line-through;
      margin-left: 10px;
    }
    
   
    .card-content .row {
  display: flex;
  flex-wrap: nowrap; 
  align-items: center;
}

.card-content .col {
  flex: 1; 
  text-align: center; 
}

.card-content .card-image1 {
  display: flex;
  align-items: center;
}

.card-content .card-image1 img {
  max-width: 100%; 
}


.card-content .row {
      display: flex;
      flex-wrap: wrap; 
      justify-content: center; 
    }

    .card-content .col {
      flex: 0 0 100%; 
      max-width: 100%;
      margin-bottom: 15px; 
    }

    @media (min-width: 576px) {
      .card-content .col {
        flex: 0 0 50%; 
      }
    }
  </style>
  </style>
</head>
<body>
<section>
<?php include 'header1.php';?>
</section>

<section>
           <div class="d-flex justify-content-center align-items-center mb-2" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);color: green;">
              <h1 class="mb-4">You May Also Like</h1>
            </div> 
</section>







     
<section>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-43@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/1-1@2x.png" alt="Brand Logo">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
  
  

    <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-44@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/logo/1-3@2x.png" alt="Brand Logo" style="width: 80%;">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
    
        <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-46@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/logo/1-6@2x.png" alt="Brand Logo">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
    
        <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-48@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/logo/1-7@2x.png" alt="Brand Logo" style="width: 70%;">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
    
        
     
  </div>
  
</div>
</section>




     
<section>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-52@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/1-1@2x.png" alt="Brand Logo">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
  
  

    <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-50@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/logo/1-3@2x.png" alt="Brand Logo" style="width: 80%;">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
    
        <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-44@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/logo/1-6@2x.png" alt="Brand Logo">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
    
        <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-174@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/logo/1-7@2x.png" alt="Brand Logo" style="width: 70%;">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
    
        
     
  </div>
  
</div>
</section>

     
<section>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-43@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/1-1@2x.png" alt="Brand Logo">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
  
  

    <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-44@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/logo/1-3@2x.png" alt="Brand Logo" style="width: 80%;">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
    
        <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-46@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/logo/1-6@2x.png" alt="Brand Logo">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
    
        <div class="col">
      <div class="card">
        <div class="card-image">
          <img src="public/rectangle-48@2x.png" class="card-img-top" alt="Image 12">
          <div class="overlay">
            <div class="frame-child122">
              <img class="brand-logo" src="public/logo/1-7@2x.png" alt="Brand Logo" style="width: 70%;">
            </div>
          </div>
        </div>

        <div class="card-content">
          <h3 class="card-title1">Kevon Classic</h3>

          <div class="row align-items-center">
            <div class="col-md">
              <p class="card-text price">₹3,999</p>
            </div>
            <div class="col-md">
              <div class="card-image1">
                <img class="frame-child" src="./public/rectangle-82.svg" alt="Image">
                <div class="off20">30% Off</div>
              </div>
            </div>
            <div class="col-md">
              <p class="card-text discounted-price">₹4,999</p>
            </div>
          </div>
        </div>
        
       
        
        <div class="card-buttons d-flex justify-content-center align-items-center mb-3">                
            <button class="btn btn-danger btn-lg me-4"><i class="fa fa-heart" aria-hidden="true" ></i></button>
                <a href="cart.php" class="btn btn-success btn-lg me-3" role="button">Add to Cart</a>
                   </div>
                   
      </div>
    </div>
    
        
     
  </div>
  
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<section>
<?php include 'footer.php';?>
</section>
</html>
