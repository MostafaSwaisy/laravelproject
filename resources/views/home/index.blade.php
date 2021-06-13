<!DOCTYPE html>
<html lang="zxx" class="no-js">

    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Book</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('/book-master/css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('/book-master/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('/book-master/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('/book-master/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('/book-master/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('/book-master/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('/book-master/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('/book-master/css/main.css')}}">
    </head>

    <body>

        <header id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="#home">Home</a></li>
                            <li><a href="#books">Books</a></li>
                            <li><a href="{{URL('/search/index')}}">Search</a></li>
                            <li><a href="{{URL('/book/index')}}" class="btn btn-outline-warning btn-lg">Login</a>
                            </li>
                            <li class="menu-has-children"><a href="">Pages</a>
                                <ul>
                                    <li><a href="{{asset('/book-master/generic.html')}}">Generic</a></li>
                                    <li><a href="{{asset('/book-master/elements.html')}}">Elements</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- #nav-menu-container -->
                </div>
            </div>
        </header><!-- #header -->


        <!-- start banner Area -->
        <section class="banner-area" id="home">
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-start">
                    <div class="banner-content col-lg-7">
                        <h5 class="text-white text-uppercase">Author: Travor James</h5>
                        <h1 class="text-uppercase">
                            New Adventure
                        </h1>
                        <p class="text-white pt-20 pb-20">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br> or
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                        </p>

                    </div>
                    <div class="col-lg-5 banner-right">
                        <img class="img-fluid" src="{{asset('/book-master/img/header-img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->



        <!-- Start Book Area -->
        <section class="price-area section-gap" id="books">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Welcome To Laravel Library</h1>
                            <p>Check our Books we have so many thing you maybe intrested</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-price no-padding">
                            <div class="price-top">
                                <h4>BookName</h4>
                            </div>
                            <p>
                                Writer Name
                            </p>
                            <div class="price-bottom">
                                <h3> publish by</h3>
                                <a href="#" class="primary-btn header-btn">Purchase Now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Book Area -->

        



        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>About Us</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore dolore magna aliqua.
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Stay update with our latest</p>
                            <div class="" id="mc_embed_signup">
                                <form target="_blank" novalidate="true"
                                    action=""
                                    method="get" class="form-inline">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                        required="" type="email">
                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>

                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->

        <script src="{{asset('/book-master/js/vendor/jquery-2.2.4.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="{{asset('/book-master/js/vendor/bootstrap.min.js')}}"></script>
        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{asset('/book-master/js/easing.min.js')}}"></script>
        <script src="{{asset('/book-master/js/hoverIntent.js')}}"></script>
        <script src="{{asset('/book-master/js/superfish.min.js')}}"></script>
        <script src="{{asset('/book-master/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('/book-master/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('/book-master/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/book-master/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('/book-master/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('/book-master/js/parallax.min.js')}}"></script>
        <script src="{{asset('/book-master/js/waypoints.min.js')}}"></script>
        <script src="{{asset('/book-master/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('/book-master/js/mail-script.js')}}"></script>
        <script src="{{asset('/book-master/js/main.js')}}"></script>
    </body>

</html>