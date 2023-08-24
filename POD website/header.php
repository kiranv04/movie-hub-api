<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Printing Pixels</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Keywords" content="">
        <meta name="Description" content="">
        <meta property="og:image" content="https://www.w3schools.com/images/w3schools_logo_436_2.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="436">
        <meta property="og:image:height" content="228">
        <meta property="og:description" content="W3Schools offers free online tutorials, references and exercises in all the major languages of the web. Covering popular subjects like HTML, CSS, JavaScript, Python, SQL, Java, and many, many more.">
        <!-- Favicon Here -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicon/site.webmanifest">
        <!-- Style Sheets Here -->
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
        <!-- Script Links Here -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <style>
        </style>
        <script>

        </script>
    </head>
    <body>
        <header>
            <nav role="navigation" class="navbar sticky-top navbar-expand navbar-light navbar-custom flex-column flex-md-row bd-navbar pt-2">
                <div class="container-fluid ml-4 mr-4">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php"><img class="img-fluid img-thumbnail logo" src="assets/images/favicon/android-chrome-192x192.png" alt="Logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div> 
                    <div class="collapse navbar-collapse justify-content-end">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link h5 mr-2 ml-2 <?php if($activepage == 'home'){ echo 'active';} else { echo '';} ?>" href="index.php">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link h5 mr-2 ml-2 <?php if($activepage == 'anime'){ echo 'active';} else { echo '';} ?>" href="anime.php">Anime</a>
                            <a class="nav-item nav-link h5 mr-2 ml-2 <?php if($activepage == 'babies'){ echo 'active';} else { echo '';} ?>" href="#">Babies & Kids</a>
                            <a class="nav-item nav-link h5 mr-2 ml-2 <?php if($activepage == 'gym'){ echo 'active';} else { echo '';} ?>" href="#">Gym</a>
                            <a class="nav-item nav-link h5 mr-2 ml-2 <?php if($activepage == 'smart'){ echo 'active';} else { echo '';} ?>" href="#">Smart Casuals</a>
                            <a class="nav-item nav-link h5 mr-2 ml-2 <?php if($activepage == 'about'){ echo 'active';} else { echo '';} ?>" href="about.php">About Us</a>
                            <a class="nav-item nav-link h5 mr-2 ml-2 <?php if($activepage == 'contact'){ echo 'active';} else { echo '';} ?>" href="#">Contact Us</a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end">
                        <div class="row form-inline">
                            <input class="form-control mr-sm-2 search-bar" id="search_bar" type="search" placeholder="Search for Products, Designs & much more">
                            <button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="ri-search-2-line"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Mobile Nav Bar -->
            <nav role="navigation" class="navbar mobile-navbar">
                <a class="ham-menu" onclick="openNav()"><i class="ri-menu-line"></i></a>
                <a id="mobile_search_btn"><i class="ri-search-2-line mobile-search" onclick="openSearch()"></i></a>
                <a href="index.php" class="mobile-logo"><img class="img-fluid img-thumbnail logo" src="assets/images/favicon/android-chrome-192x192.png" alt="Logo"></a>
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                        <a <?php if($_SERVER['SCRIPT_NAME']=="/anime.php") { ?>  class="active"   <?php   }  ?> href="anime.php">Anime</a>
                        <a href="#">Babies & Kids</a>
                        <a href="#">Gym</a>
                        <a href="#">Smart Casuals</a>
                        <a href="#">About Us</a>
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </nav>
            <div id="searchOverlay" class="mobile-search-bar">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                <div class="mobile-search-bar-content">
                    <input type="text" placeholder="Search.." name="search">
                </div>
            </div>
        </header>