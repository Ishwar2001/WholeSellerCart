<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wholeseller</title>
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<style>
   .slider {
    position: relative;
    max-width: 100%;
    overflow: hidden;
}

.slides {
    position: relative;
}

.slides img {
    width: 100%;
    height: auto;
}

button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px;
}

.prev {
    left: 0;
}

.next {
    right: 0;
}

.card-content {
    position: absolute;
    bottom: 0;
    left: 0;
    top:5%;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.8); /* Adjust the background color and opacity as needed */
    padding: 20px;
}

</style>


<body>
    <section>
        <?php include 'header1.php'; ?>
    </section>

     <div class="slider">
        <div class="slides">
            <img src="public/rectangle-174@2x.png" alt="Image 1">
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <button class="next" onclick="nextSlide()">&#10095;</button>
        </div>
        <div class="card-content">
            <!-- Content of the card -->
            <section class="h-100" style="background-color:white;">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10">

                        <div class="d-flex justify-content-between align-items-center mb-4" style=" text-align: center;">
                            <h3 class="fw-normal mb-0 text-black align-center"> Cart</h3>
                            <div>

                            </div>
                        </div>



                        <div class="card-content">
                            <div class="card-description">
                                <h3 class="card-title">₹3,999</h3>
                                <div class="card-image1">
                                    <div class="off20">30% Off
                                        <span class="discounted-price" style="text-decoration-line: line-through;">₹4,999</span>
                                    </div>
                                </div>
                                <h4 class="card-title">Kevon Classic</h4>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                        </button>

                        <input id="form1" min="0" name="quantity" value="2" type="number" class="form-control form-control-sm" />

                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h5 class="mb-0">₹3,999</h5>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

        </section>
            
            
        </div>
    </div>
    <section>


        


    </section>
    <section class="card-container">
        <div class="card">
            <h4>Card 1</h4>
            <hr>
        </div>
        <div class="card">
            <h4>Card 2</h4>
            <hr>
        </div>
        <div class="card">
            <h4>Card 3</h4>
            <hr>
        </div>
    </section>

    <script>
        let slideIndex = 0;

        function showSlides() {
            const slides = document.querySelectorAll('.slides img');
            if (slideIndex >= slides.length) slideIndex = 0;
            if (slideIndex < 0) slideIndex = slides.length - 1;
            slides.forEach((slide) => (slide.style.display = 'none'));
            slides[slideIndex].style.display = 'block';
        }

        function prevSlide() {
            slideIndex--;
            showSlides();
        }

        function nextSlide() {
            slideIndex++;
            showSlides();
        }

        showSlides();
    </script>
</body>

</html>
