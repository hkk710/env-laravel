
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Page Title -->    
        <!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
        <!-- Mobile Specific Meta -->



        <title>Welcome</title>


        <link rel="icon" href="{{asset('favicon.ico')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>



        <!-- CSS
        ================================================== -->
        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- jquery.fancybox  -->
        <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
        <!-- animate -->
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <!-- media-queries -->
        <link rel="stylesheet" href="{{asset('css/media-queries.css')}}">

        <!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>



            
 <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <a class="navbar-brand" href="#body">
                        <h1 id="logo">
                            <img src="img/logo.png" alt="WELCOME">
                        </h1>
                    </a>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#works">Work</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                    @if (Route::has('login'))
                   <li> <a href="{{ url('/login') }}">Login</a></li>
                   <li> <a href="{{ url('/register') }}">Register</a></li>
                    @endif
                    </ul>
                </nav>
            </div>
        </header>
</head>
<!--
<div id="preloader">
            <img src="img/preloader.gif" alt="Preloader">
        </div>
        -->
        <div style="padding-top:200px; color:#fff">         
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
                <!-- Indicators bullet -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
                <!-- End Indicators bullet -->              
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    
                    <!-- single slide -->
                    <div class="item active body" style="background-image: url(images/banner.jpg);">
                        <div class="carousel-caption">
                            <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> Brandi</span>!</h2>
                            <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/creative</span> one page template.</h3>
                            <p data-wow-duration="1000ms" class="wow slideInRight animated">We are a team of professionals</p>
                            
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>      
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
                <!-- Indicators bullet -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
                <!-- End Indicators bullet -->              
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    
                    <!-- single slide -->
                    <div class="item active" style="background-image: url(img/banner.jpg);">
                        <div class="carousel-caption">
                            <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Meet<span> Brandi</span>!</h2>
                            <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/creative</span> one page template.</h3>
                            <p data-wow-duration="1000ms" class="wow slideInRight animated">We are a team of professionals</p>
                            
                            <ul class="social-links text-center">
                                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
        </body>
</html>
