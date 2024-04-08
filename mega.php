<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHOLESALEKART</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .mega3 {
            position: relative;
            width: 90%; /* Adjust width to be responsive */
            max-width: 500px; /* Maximum width for larger screens */
            margin: 0 auto 50px; /* Center and add bottom margin for spacing */
        }

        .mega3 img {
            width: 100%;
            display: block;
        }

        .button3 {
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 8px 40px;
            background-color: #fba43d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: medium;
        }

        .card3 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
            width: 90%; /* Adjust width to be responsive */
        }

        .card-content3 {
            text-align: center;
        }

        .card-title3 {
            margin-top: 0;
        }

        .card-description3 {
            margin-bottom: 0;
        }

        .card3 img {
            display: block;
            width: 50%;
            height: auto;
        }

        .offer-tag3 {
            background-color: #ffcc00;
            color: #333;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        .discounted-price3 {
            text-decoration: line-through;
            color: #999;
        }
    </style>
</head>
<body>
    <!-- First .mega class -->
    <div class="mega3">
        <a href="categories.php"><button class="button3">Shop Now</button></a>
        <img src="./public/rectangle-154.svg" alt="Mega Image" style="width: 150%";>
        <div class="card3">
            <img class="card-image3" src="public/image-23@2x.png" alt="Product Image" style="margin-left: 22%";>
            <div class="card-content3">
                <h3 class="card-title3">Kevin Classic</h3>
                <p class="card-description3">
                    $3,999  
                    <span class="offer-tag3">20% Off</span>
                    <span class="discounted-price3">$4,999</span>
                </p>   
            </div>
        </div>
    </div>

    <!-- Second .mega class -->
    <div class="mega3">
        <a href="categories.php"><button class="button3">Shop Now</button></a>
        <img src="./public/rectangle-152.svg" alt="Mega Image" style="width: 150%";>
        <div class="card3">
            <img class="card-image3" src="public/image-23@2x.png" alt="Product Image"style="margin-left: 22%";>
            <div class="card-content3">
                <h3 class="card-title3">Kevin Classic</h3>
                <p class="card-description3">
                    $3,999  
                    <span class="offer-tag3">20% Off</span>
                    <span class="discounted-price3">$4,999</span>
                </p>   
            </div>
        </div>
    </div>
</body>
</html>
