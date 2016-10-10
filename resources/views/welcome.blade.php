
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
<body style="background-color:green" id="body">
<!--
<div id="preloader">
            <img src="img/preloader.gif" alt="Preloader">
        </div>
        -->

  <p data-wow-duration="1000ms" class="wow slideInRight animated">We are a team of professionals</p>      
<h1>hello</h1>

    </body>
</html>
