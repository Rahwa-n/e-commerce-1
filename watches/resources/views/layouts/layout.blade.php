<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title  -->
    <title>Techwatch Home</title>
    <!-- Favicon  -->
    <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Style CSS -->   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Header Area -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" href="/"><img class="logo my-2" src="/images/logo1.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shop">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">CONTACT</a>
                </li>
            </ul>
            
            <div class=" ml-5 acct_srch d-flex">
                <!-- util search -->
                <div class="circle">
                    <i class="fas fa-search"></i>
                </div>
                <!-- shopping cart -->
                <div class="ml-2 circle">
                    <i class="fas fa-shopping-cart"></i>
                    <div class="sml-circle">
                        <span class="text-center cart-blue-icon">2</span>
                    </div>
                </div>
                <div class="ml-2 circle act-circle">    
                </div>
            </div>
        
        </div> 
    </nav>
    <!-- Header Area End --> 

    <!-- page content goes here --> 

    @yield('content')

    <!-- Special Featured Area -->
    <section class="special_feature_area pt-5">
        <div class="container">
            <div class="row">

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-ship mt-4"></i>
                        </div>
                        <div class="feature_content">
                            <h6>Free Shipping</h6>
                            <p>For orders above $100</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-shipping-fast mt-4"></i>
                        </div>
                        <div class="feature_content">
                            <h6>Happy Returns</h6>
                            <p>7 Days free Returns</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-file-invoice-dollar mt-4"></i>
                        </div>
                        <div class="feature_content">
                            <h6>100% Money Back</h6>
                            <p>If product is damaged</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="fas fa-headset mt-4"></i>
                        </div>
                        <div class="feature_content">
                            <h6>Dedicated Support</h6>
                            <p>We provide support 24/7</p>
                        </div>
                    </div>
                </div>

            </div> <!-- /. row -->
        </div> <!-- /. container -->
    </section>  <!-- /. Special Featured Area -->


    <!-- Footer Area -->
    <footer class="footer_area pt-5">
        <div class="container">
            <div class="row">
                <!-- Single Footer Area -->
                <!-- footer col 1 -->
                <div class="col-md-5 col-sm-12">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Contact Us</h6>
                        </div>
                        <ul class="footer_content">
                            <li><span>Address:</span> Lords, London, UK - 1259</li>
                            <li><span>Phone:</span> 002 63695 24624</li>
                            <li><span>FAX:</span> 002 78965 369552</li>
                            <li><span>Email:</span> support@example.com</li>
                        </ul>
                        <div class="footer_social_area mt-15">
                            <a href="#" style="padding-left:0;"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                        </div>

                    </div>
                </div>  <!-- /. end footer col 1 -->

                <!-- footer col 2 -->
                <div class="col-md-7 col-sm-12 d-flex  ">
                    <!-- Single Footer Area -->
                    <div class="col-6">
                        <div class="single_footer_area mb-100">
                            <div class="footer_heading mb-4">
                                <h6>Information</h6>
                            </div>
                            <ul class="footer_widget_menu">
                                <li><a href="#"><i class="icofont-rounded-right"></i> Your Account</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i> Free Shipping Policy</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i> Your Cart</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i> Return Policy</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i> Free Coupon</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i> Delivary Info</a></li>
                            </ul>

                        </div>
                    </div>
                
                    <!-- Single Footer Area -->
                    <div class="col-6">
                        <div class="single_footer_area mb-100">
                            <div class="footer_heading mb-4">
                                <h6>Account</h6>
                            </div>
                            <ul class="footer_widget_menu">
                                <li><a href="#"><i class="icofont-rounded-right"></i> Product Support</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i> Terms &amp; Conditions</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i> Help</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i> Payment Method</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i> Affiliate Program</a></li>
                                <li><a href="#"><i class="icofont-rounded-right"></i> Privacy Policy</a></li>
                            </ul>

                        </div>
        
                    </div>
                </div>  <!-- /. end footer col 2-->  
            </div> <!-- /. footer row -->
        </div> <!-- /. footer container -->

        <!-- Footer Bottom -->
        <div class="footer_bottom_area">
            <div class="container">
                
                <p class="text-center pb-5">Copyright &copy; Pseudo Class 2020</p>
                            
            </div>
        </div>

    </footer>  <!-- /. Footer Area -->

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Core theme JS-->
<script src="main.js"></script>

</body>

</html>
