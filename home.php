<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>
    </section>

    <section class="home">
        <div class="swiper home-slider">

            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(./images/home-slide-1.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/home-slide-2.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/home-slide-3.jpg) no-repeat;">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>


    <section class="services">
        <h1 class="heading-title"> our services </h1>
        <div class="box-container">
            <div class="box">
                <img src="./images/icon1.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="./images/icon2.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="./images/icon3.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="./images/icon4.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="./images/icon5.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="./images/icon6.png" alt="">
                <h3>camping</h3>
            </div>
        </div>

    </section>

    <section class="home-about">
        <div class="image">
            <img src="./images/about.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Welcome to our travel and tour platform, where exploration meets seamless adventure. we're passionate about crafting unforgettable journeys. With a commitment to excellence, we curate experiences that transcend the ordinary, ensuring every moment becomes a cherished memory. Join us on a voyage where wanderlust meets exceptional service, creating the perfect backdrop for your travel dreams.</p>
            <a href="about.php" class="btn">read more </a>
        </div>
    </section>

    <section class="home-packages">
        <h1 class="heading-title "> our packages </h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="./images/img1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere, fugiat!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./images/img2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere, fugiat!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./images/img3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere, fugiat!</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus libero omnis saepe ad. Recusandae nemo adipisci aut architecto tenetur reiciendis.</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>


    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>
            <div class="box">
                <h3>extra link</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask quetions</a>
                <a href="#"><i class="fas fa-angle-right"></i> faq</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +91-111-222-333</a>
                <a href="#"><i class="fas fa-phone"></i> +91-345-222-333</a>
                <a href="#"><i class="fas fa-envelope"></i> abcd@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Ahmedabad, india - 380001</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fa-brands fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fa-brands fa-twitter"></i> twitter</a>
                <a href="#"><i class="fa-brands fa-instagram"></i> instagram</a>
                <a href="#"><i class="fa-brands fa-linkedin"></i> linkedin</a>
            </div>
        </div>
        <div class="credit">created by <span>sahil | all right reserved</span></div>
    </section>


    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="./js/script.js"></script>
</body>

</html>