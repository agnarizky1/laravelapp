<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AA Creative Production</title>
    <link rel="icon" href="img/icon.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/image.css" rel="stylesheet">

    <!-- modernizr -->
    <script src="js/modernizr.js"></script>

    <!-- Map -->
    <link href="leaflet/leaflet.css" rel="stylesheet" type="text/css">
    <script src="leaflet/leaflet.js"></script>
    <script src="leaflet/leaflet-src.js"></script>
    <script src="leaflet/leaflet-src.esm.js"></script>
    <script src="leaflet/leaflet-src.js.map"></script>
    <script src="leaflet/leaflet.js.map"></script>

    <link rel="stylesheet" href="cluster/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="cluster/dist/MarkerCluster.Default.css" />
    <script src="cluster/dist/leaflet.markercluster-src.js"></script>

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="/"><img src="img/logo_samping.png" width="150" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li><a href="/">Portfolio</a></li>
                <li><a href="/contact">Contact Me</a></li>
            </ul>
        </nav>
        <!-- end nav -->

        @yield('home')
        @yield('contact')
        @yield('logo')
        @yield('frontend')
        @yield('backend')
        @yield('mockup')
        @yield('design')

        <!-- footer -->
        <footer>
            <div class="container-fluid">
                <p class="copyright">?? AA Creative Production</p>
            </div>
        </footer>
        <!-- end footer -->

        <!-- back to top -->
        <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
        <!-- end back to top -->



        <!-- jQuery -->
        <script src="js/jquery-2.1.1.js"></script>
        <!--  plugins -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>


        <!--  custom script -->
        <script src="js/custom.js"></script>

</body>

</html>