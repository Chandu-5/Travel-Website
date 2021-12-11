<?php

session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/font-awesome.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap">
    <title>Responsive | Websites</title>
</head>

<body>

    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">TRAVEL</h1>
                            <p class="tm-slogon">Some Text content here</p>
                        </div>
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" data-toggle="collapse"
                            data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link tm-nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="services.php">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                    <section class="tm-content">
                        <div class="media my-3 mb-5 tm-service-media tm-service-media-img-l">
                            <img src="./assets/images/services-1.jpg" alt="Image" class="tm-service-img">
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">Our Trip plans for you</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum libero quo voluptate blanditiis. Aspernatur itaque voluptates nesciunt.</p>
                            </div> 
                        </div>
                        <div class="media my-3 mb-5 tm-service-media">                            
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">Customer Satisfaction</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis nostrum quod perspiciatis reiciendis commodi laboriosam possimus rerum.</p>
                            </div> 
                            <img src="./assets/images/services-2.jpg" alt="Image" class="tm-service-img-r">
                        </div>
                        <div class="media my-3 tm-service-media tm-service-media-img-l">
                            <img src="./assets/images/services-3.jpg" alt="Image" class="tm-service-img">
                            <div class="media-body tm-service-text">
                                <h2 class="mb-4 tm-content-title">Reviews by Customer</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, cum?</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur fuga numquam dolorem nisi, officiis laudantium laboriosam veniam dolores ducimus animi!</p>
                            </div> 
                        </div>                      
                    </section>
                </main>
            </div>
        </div>
        <div class="tm-row">
            <div class="tm-col-left text-center">
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>
            </div>
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Copyright 2021-23 | Design: <a rel="nofollow" target="_parent" href="#"
                            class="tm-text-link">Chandu K</a></p>
                </footer>
            </div>
        </div>
        <div class="tm-bg">
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/script.js"></script>



</body>

</html>