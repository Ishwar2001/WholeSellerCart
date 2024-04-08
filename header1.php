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
        }

        .repeat-text p {
            margin: 0;
        }

        .repeat-text .first-p {
            margin-right: 8px;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: white;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 11px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #d44361;
            color: white;
        }

        .navbar .logo {
            float: left;
            padding: 10px 20px;
            color: black;
            font-size: 24px;
        }

        .navbar .icons {
            float: right;
            padding: 10px 20px;
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

        .content {
            padding: 15px;
        }

        .container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0%;
        }

        .image-wrapper {
            max-width: 100%;
            max-height: 100%;
        }

        .image-wrapper img {
            max-width: 100%;
            max-height: 100%;
            display: block;
            margin: auto;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .navbar .logo {
                float: none;
                margin-bottom: 10px;
            }

            .navbar .icons {
                float: none;
                margin-top: 10px;
            }

            .navbar a {
                float: none;
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
                <a href="index.php">
                    <img src="./public/default-1@2x.png" alt="Company Logo">
                    <b>WHOLESALEKART</b>
                </a>
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
    </section>
</body>
</html>
