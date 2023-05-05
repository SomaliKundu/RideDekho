<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>RideDekho</title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io\favicon-16x16.png">
    <link rel="manifest" href="favicon_io\site.webmanifest">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

    <!--Css Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">

    <!-- Font awesome -->
    <!-- <script src="https://kit.fontawesome.com/9f1e537989.js" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/9f1e537989.js" crossorigin="anonymous"></script>
    

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>

<body>
    <section id="title">
        <div class="container-fluid">

            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="">RideDekho <i class="fa-solid fa-user"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              </span>
            </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../rent_vehicle/rent_vehicle.php">Rent Vehicle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link">Welcome: <?php echo $_SESSION['name']; ?></a>
                        </li>
                        <li>
                            <a class="nav-link" href="logout.php">Logout </a>
                        </li>
                    </ul>
                </div>


            </nav>

            <!-- Title -->

            <div class="row">
                <div class="col-lg-6">
                    <h1>Exclusive rental services on different vehicles.</h1>
                </div>    
                <div class="col-lg-6">
                    <!-- <img class="title_img" src="pngfind.com-car-png-3022331.png" alt="iphone-mockup"> -->
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="vehicle_image" src="pngfind.com-scorpio-car-png-3123101.png" alt="car-image">
                            </div>
                            <div class="carousel-item">
                                <img class="vehicle_image" src="pngfind.com-bikes-png-images-2114161.png" alt="bike-image">
                            </div>
                            <div class="carousel-item">
                                <img class="vehicle_image" src="pngfind.com-scooty-png-384662.png" alt="scooty-image">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Features -->

    <section id="features">
        <div class="row">

            <div class="feature-box col-lg-3">
                <i class="icon fa-solid fa-circle-check fa-4x"></i>
                <h3>Easy to use.</h3>
                <p>It aims at providing convenience of zero insurance cost, zero service and maintenance and 24x7 roadside assistance.</p>
            </div>

            <div class="feature-box col-lg-3">
                <i class="icon fa-solid fa-clock fa-4x"></i>
                <h3>Elite Clientele</h3>
                <p>We have a set of happy and satisfied customers who love our service.</p>
            </div>

            <div class="feature-box col-lg-3">
                <i class="icon fa-solid fa-thumbs-up fa-4x"></i>
                <h3>Guaranteed to work.</h3>
                <p>Rather than going door-to-door we make it easy for the user, as they can book the vehicle online and can have a hassle free experience.</p>
            </div>

            <div class="feature-box col-lg-3">
                <i class="icon fa-solid fa-hand-holding-dollar fa-4x"></i>
                <h3>Save money.</h3>
                <p>People who don't use their vehicles more often can list it on the website and get financial benefits from it.</p>
            </div>

        </div>

    </section>


    <!-- Testimonials -->

    <section id="testimonials">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h2>I no longer have to sniff other dogs for love. I've found the hottest Corgi on TinDog. Woof.</h2>
                    <img class="testimonial_image" src="images/dog-img.jpg " alt="dog-profile ">
                    <em>Pebbles , Mumbai</em>
                </div>
                <div class="carousel-item">
                    <h2 class="testimonial-text ">My dog used to be so lonely, but with TinDog's help, they've found the love of their life. I think.</h2>
                    <img class="testimonial_image " src="images/lady-img.jpg " alt="lady-profile ">
                    <em>Beverly, Illinois</em>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!-- Press -->

    <!-- <section id="press">
        <img class="press_logo" src="images/techcrunch.png " alt="tc-logo ">
        <img class="press_logo" src="images/tnw.png " alt="tnw-logo ">
        <img class="press_logo" src="images/bizinsider.png " alt="biz-insider-logo ">
        <img class="press_logo" src="images/mashable.png " alt="mashable-logo ">

    </section> -->


    <!-- Pricing -->

    <section id="pricing">

        <h2>A Plan for Every User's Needs</h2>
        <p>Simple and affordable price plans for your and your trip.</p>


        <div class="row">
            <div class="pricing_col col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header ">
                        <h3>Chihuahua</h3>
                    </div>
                    <div class="card-body ">
                        <h2>Free</h2>
                        <p>5 Matches Per Day</p>
                        <p>10 Messages Per Day</p>
                        <p>Unlimited App Usage</p>
                        <a href="sign in\signin.html"><button class="w-100 btn btn-lg btn-block btn-outline-dark" type="button">Sign Up</button></a>
                    </div>
                </div>
            </div>
            <div class="pricing_col col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header ">
                        <h3>Labrador</h3>
                    </div>
                    <div class="card-body ">
                        <h2>$49 / mo</h2>
                        <p>Unlimited Matches</p>
                        <p>Unlimited Messages</p>
                        <p>Unlimited App Usage</p>
                        <a href="sign in\signin.html"><button class="w-100 btn btn-lg btn-block btn-dark" type="button ">Sign Up</button></a>
                    </div>
                </div>
            </div>
            <div class="pricing_col col-lg-4">
                <div class="card">
                    <div class="card-header ">
                        <h3>Mastiff</h3>
                    </div>
                    <div class="card-body ">
                        <h2>$99 / mo</h2>
                        <p>Pirority Listing</p>
                        <p>Unlimited Matches</p>
                        <p>Unlimited Messages</p>
                        <p>Unlimited App Usage</p>
                        <a href="sign in\signin.html"><button class="w-100 btn btn-lg btn-block btn-dark" type="button ">Sign Up</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Call to Action -->

    <section id="cta">

        <h2 class="cta_heading">About Us.</h2>
        <p>
            <button class="btn btn-block btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <i class="fa-solid fa-question"></i>
            </button>
        </p>
          <div class="collapse" id="collapseExample">
            <div class="card card-body about">
                Nicknamed, 'The Temple City' Bhubaneswar is one of those cities that offer a peaceful life for its residents. The capital city of Odisha holds a prominent place in the country's economics thanks to the thriving job market. With the growing demands, the city has expanded and lead to the urbanization of the surrounding areas. Being a prominent hub for education and employment, the traffic in this city is constantly increasing. The daily commute in the city becomes so much simpler if one opts for a self drive vehicle rental in Bhubaneswar.
            </div>
          </div>

    </section>


    <!-- Footer -->

    <footer id="footer">
        <i class="footer-class fa-brands fa-facebook-f"></i>
        <i class="footer-class fa-brands fa-twitter"></i>
        <i class="footer-class fa-brands fa-instagram"></i>
        <i class="footer-class fa-brands fa-whatsapp"></i>
        <p>© Copyright RideDekho</p>

    </footer>


</body>

</html>