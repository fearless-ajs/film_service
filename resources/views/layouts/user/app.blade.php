<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Film Service">
    <meta name="keywords" content="Film Service">
    <meta name="author" content="Film Service">
    <title>Film Service</title>
    <link href="{{asset('user/image/favicon.png')}}" rel="icon" />
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/bootstrap-4.2.1/bootstrap.min.css')}}">
    <!-- END BOOTSTRAP CSS -->

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/owlcarousel/owl.carousel.css')}}">
    <!-- END OWL CAROUSEL -->

    <!-- FONT CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/icofont.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/owlcarousel/animated.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/video/video.popup.css')}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/style.css')}}">
    <!-- END STYLE CSS -->

    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/responsive.css')}}">
    <!-- END RESPONSIVE CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CPoppins:200,300,400,500,600,700,800,900" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <link rel="stylesheet" href="{{asset('admin/css/toastr.css')}}">
    <![endif]-->
    <!--Laravel livewire styles  -->
    <livewire:styles />

</head>

<body>
<div class="zmovo-main dark-bg">
    <!-- Preloader -->
    <div class="zmovo-preloader">
        <div class="boxes">
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="box">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <header class="zmovo-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 zmovo-logos">
                    <div class="zmovo-logo">
                        <a href="#"><img src="image/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 zmovo-menus">
                    <div class="main-menu">
                        <div class="navigation">
                            <div class="menu-container">
                                <div id="navigation">
                                    <ul>
                                        <li class="active has-sub"><span class="submenu-button"></span><a href="index-2.html">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Home 1</a></li>
                                                <li><a href="index-3.html">Home 2</a></li>
                                                <li><a href="index-4.html">Home 3</a></li>
                                                <li><a href="index-5.html">Home 4</a></li>
                                                <li><a href="index-6.html">Home 5</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="trailor.html">Trailor</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="has-sub"><span class="submenu-button"></span><a href="index-2.html">Product</a>
                                            <ul>
                                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Grid view</a>
                                                    <ul>
                                                        <li><a href="grid.html">4 column</a></li>
                                                        <li><a href="grid-left.html">Left Side</a></li>
                                                        <li><a href="grid-right.html">Right Side</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-sub"><span class="submenu-button"></span><a href="#">List view</a>
                                                    <ul>
                                                        <li><a href="list.html">one column</a></li>
                                                        <li><a href="list-left.html">Left Side</a></li>
                                                        <li><a href="list-right.html">Right Side</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="product-single.html">Single Product</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><span class="submenu-button"></span><a href="index-2.html">Page</a>
                                            <ul>
                                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Login</a>
                                                    <ul>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="ragister.html">Register</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><span class="submenu-button"></span><a href="#">blog</a>
                                            <ul>
                                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Blog Page</a>
                                                    <ul>
                                                        <li><a href="blog.html">Blog Left</a></li>
                                                        <li><a href="blog-2.html">Blog Right</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Blog Single</a>
                                                    <ul>
                                                        <li><a href="blog-details.html">Blog Single 1</a></li>
                                                        <li><a href="blog-details-2.html">Blog Single 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 zmovo-t-right">
                    <div class="zmovo-header-right">
                        <div class="zmovo-top-search">
                            <div class="zmovo-ser-icon" id="clickserch"><span class="fa fa-search"></span></div>
                            <div class="zmovo-hidden-search" id="opensearch">
                                <input type="search" placeholder="Enter the movie Name">
                            </div>
                        </div>
                        <div class="zmovo-login">
                            <a href="login.html" class="btn login-btn"><span class="fa fa-user"></span> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


        <!---Content of the page->
        @yield('content')
        <!--End Content of the page->


    <!-- FOOTER -->
    <footer class="zmovo-footer-area pt-50">
              <div class="zmovo-footer-buttom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-lg-6">
                        <div class="zmovo-ft-menu">
                            <ul>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Our Ads</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-6">
                        <div class="zmovo-ft-copyright">
                            <p>CopyRight 2020 Developed by <a href="mailto:adurotimijoshua@gmail.com" class="c1">Adurotimi Joshua</a> . All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    <div class="to-top" id="back-top">
        <i class="fa fa-angle-up"></i>
    </div>
</div>
<!--Laravel livewire scripts  -->
<livewire:scripts />
<script src="{{asset('user/assets/vendor/modernizr-3.5.0.js')}}"></script>
<script src="{{asset('user/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('user/assets/js/popper.min.js')}}"></script>
<script src="{{asset('user/assets/video/video.popup.js')}}"></script>
<script src="{{asset('user/assets/bootstrap-4.2.1/bootstrap.min.js')}}"></script>
<script src="{{asset('user/assets/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('user/assets/menu/menumaker.js')}}"></script>
<script src="{{asset('user/assets/slick/swiper.min.js')}}"></script>
<script src="{{asset('user/assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('user/assets/js/main.js')}}"></script>
<script  src="{{asset('admin/js/toastr.js')}}"></script>
<script>
    window.livewire.on('alert', param => {
        toastr[param['type']](param['message'], param['type']);
    });
</script>
</body>

