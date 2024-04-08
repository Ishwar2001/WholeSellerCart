<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHOLESALEKART</title>

    <style>
        .repeat-text {
    background-color: #d44361;
    white-space: nowrap;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px;
    overflow-x: auto; /* Allow scrolling for small screens */
}

.repeat-text p {
    margin: 0;
    padding: 0 5px; /* Add padding between texts */
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: #e3f8b5;
    overflow: hidden;
}

.navbar a {
    display: block;
    color: black;
    text-align: center;
    padding: 11px 0; /* Adjust padding */
    text-decoration: none;
}

.navbar .logo {
    padding: 10px 0;
    color: black;
    font-size: 24px;
}

.navbar .icons {
    padding: 10px 0;
    color: black;
}

.navbar .logo img {
    height: 40px;
    width: auto;
    vertical-align: middle;
    margin-right: 10px;
}

.navbar .icons img {
    height: 24px;
    width: auto;
    vertical-align: middle;
    margin-left: 10px;
}

.container {
    max-width: 100%; /* Adjust container width */
    margin-top: 0;
    overflow: hidden;
}

.image-wrapper img {
    width: 100%; /* Make image responsive */
    height: auto;
}

@media only screen and (min-width: 600px) {
    .navbar a {
        float: left;
        padding: 11px 16px; /* Reset padding */
    }

    .navbar .icons {
        float: right;
        padding: 10px 20px;
    }

    .navbar .logo {
        padding: 10px 20px;
    }

    .navbar .logo img {
        height: 40px;
        width: auto;
        vertical-align: middle;
        margin-right: 10px;
    }

    .navbar .icons img {
        height: 24px;
        width: auto;
        vertical-align: middle;
        margin-left: 10px;
    }
}

        
        
    </style>
</head>
<body>
    <div class="repeat-text">
        <p class="first-p" style="padding: 1%;">No Retail | Only For Wholesaler | Minimum 6 Piece Order</p>
        <p style="padding: 1%;">No Retail | Only For Wholesaler | Minimum 6 Piece Order</p>
        <p>No Retail | Only For Wholesaler | Minimum 6 Piece Order</p>
    </div>

    <section>
        
<div class="navbar">
    <div class="logo">
        <img src="./public/default-1@2x.png" alt="Company Logo">
        <b>WHOLESALEKART</b>
    </div>
   <div class="icons">
    <a href="user_profile_page.html">
        <img src="./public/uiluser.svg" alt="Bell Icon">
    </a>
    <a href="cart.php">
        <img src="./public/solarcartoutline.svg" alt="Cart Icon">
    </a>
</div>
</div>
    <div class="navbar">
        <b>
    <a href="#">Hand bags</a>
    <a href="#">Sling Bags</a>
    <a href="#">Shoulder Bags</a>
    <a href="#">Wallets</a>
    <a href="#">Crossbody Bags</a>
    <a href="#">Mini Bags</a>
    <a href="#">Tote Bags</a>
    <a href="#">Cosmetic pouch</a>
    <a href="#">Women Wallets</a>
    <a href="#">Backpacks</a>
   </b>
</div>

<div class="container">
    <div class="image-wrapper">
        <img src="./public/diana1-1@2x.png" alt="Homepage">
    </div>
</div>
<!--<div class="content">
    <h1>Welcome to WHOLESALEKART</h1>
    <p>Your content here...</p>
</div>-->
    </section>
</body>
</html>
