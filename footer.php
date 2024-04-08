<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHOLESALEKART</title>

    <style>
       .grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
    background-color: white;
    padding: 10px;
}

.grid-item {
    padding: 20px;
    font-size: x-large;
}

footer ol {
    font-size: medium;
}

.social-icons {
    position: fixed;
    bottom: 20px; /* Adjust bottom spacing */
    right: 20px;
    z-index: 2;
}

.social-icons a {
    display: inline-block;
    margin-left: 0px;
}

.social-icons a img {
    width: 35px;
    height: auto;
}

footer {
    position: relative;
    z-index: 1;
}

/* Adjust the margin for smaller screens */
@media screen and (max-width: 768px) {
    .social-icons {
        bottom: 10px;
    }
}

/* Adjust the margin for extra small screens */
@media screen and (max-width: 576px) {
    .social-icons {
        bottom: 5px;
    }
}

    </style>
</head>
<body>

<footer>
    <div class="grid-container">
        <div class="grid-item"><b>Product Policy</b><br>
            <ol><a href="#"></a>100% Authentic</ol>
            <ol><a href="#"></a>Free Return</ol>
            <ol><a href="#"></a>Quality Assured</ol>
        </div>
        <div class="grid-item"><b>VIPSHOP</b><br>
            <ol><a href="#"></a>About Us</ol>
            <ol><a href="#"></a>Terms of Service</ol>
            <ol><a href="#"></a>Privacy Policy</ol>
        </div>
        <div class="grid-item"><b>CUSTOMER CARE</b><br> 
            <ol><a href="#"></a>64328355</ol>
            <ol><a href="#"></a>Live Chat</ol>
            <ol><a href="#"></a>Feedback</ol>
            <ol><a href="#"></a>FAQ</ol>
        </div>
    </div>
</footer>

<div class="social-icons">
    <a href="https://www.facebook.com"><img src="public/fb.png"></a>
    <a href="https://www.instagram.com"><img src="public/insta.webp" alt="Instagram"></a>
    <a href="https://www.youtube.com"><img src="public/yt.png" alt="YouTube"></a>
</div>

<p class="copyright" style="text-align: center;background-color:green;padding:5px;">CopyRight(C).WHOLESALEKART</p>

</body>
</html>
