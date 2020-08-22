<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Seaside South Park</title>
    <link rel="icon" type="image/png" sizes="625x625" href="assets/img/seaside_favicon.png">
    <link rel="icon" type="image/png" sizes="625x625" href="assets/img/seaside_favicon.png">
    <link rel="icon" type="image/png" sizes="625x625" href="assets/img/seaside_favicon.png">
    <link rel="icon" type="image/png" sizes="625x625" href="assets/img/seaside_favicon.png">
    <link rel="icon" type="image/png" sizes="625x625" href="assets/img/seaside_favicon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body style="font-family: Cabin, sans-serif;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="font-family: Cabin, sans-serif;">
        <div class="container"><a class="navbar-brand" href="index.php">Seaside South Park</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about.html">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact.html">Contact Us</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Discover More</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="facilities.html">Facilities</a><a class="dropdown-item" role="presentation" href="gallery.html">Gallery</a></div>
                    </li>
                </ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="reg.php" style="background-color: rgb(63,140,228);">Sign Up</a></span></div>
        </div>
    </nav>
    <div class="highlight-clean" style="margin-bottom: 50px;background: url(assets/img/landing_page.png) center / cover no-repeat;">
        <div class="container">
            <div class="intro">
                <h3 class="text-center" style="font-size: 72px;font-weight: normal;color: rgb(255,255,255);">An&nbsp;<strong>ocean breeze</strong>&nbsp;puts a mind at ease.<br></h3>
                <p class="text-center text-white-50" style="font-size: 24px;">Almost everything will work again if you unplug it for a few minutes. That's why we think you should plan your next vacation at <br>Seaside South Park.<br></p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="index.php#book">Book Now</a><a class="btn btn-light" role="button" href="index.php#festivals">Upcoming Festivals</a></div>
        </div>
    </div>
    <div id="book" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><strong>Find</strong> your stay</h1>
                    <p>Reserve a room today</p>
                </div>
            </div>
            <form name="findroom" method="POST">
                <div class="form-row">
                    <div class="col-md-3"><label>Check-In</label><input class="form-control" type="date" name="chkin" id="chkin" required></div>
                    <div class="col-md-3"><label>Check-Out</label><input class="form-control" type="date" name="chkout" id="chkout" required></div>
                    <div class="col-md-3"><label>Room Type</label><select class="form-control" name="roomtype" required><optgroup label="Select room type"><option value="single" selected="">Single</option><option value="double">Double</option><option value="family">Family</option></optgroup></select></div>
                    <div
                        class="col-md-3"><label>&nbsp;</label><button class="btn btn-primary" type="submit" style="width: 100%;">Check For Availability</button></div>
        </div>
        </form>
    </div>
    </div>
    <div id="festivals" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><strong>Discover</strong>&nbsp;the Culture<br>Find the perfect festivals for you</h1>
                    <p><a href="#">Learn More &gt;</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="margin-bottom: 20px;"><img class="card-img-top w-100 d-block" style="background: url(assets/img/festival3.jpg) center / cover no-repeat;height: 300px;">
                        <div class="card-body">
                            <h4 class="card-title">Explore the city</h4>
                            <p class="card-text">Always, some great culture is dying to enrich the soil of new harvests, some civlization is crumbling to rubbish to be the hill of a more beautiful city, some race is spending itself that a lower and more barbarous world may
                                inherit its stored treasure house.<br></p><button class="btn btn-primary" type="button">Discover</button></div>
                    </div>
                </div>
            </div>
            <div class="row" style="height: 300px;">
                <div class="col-md-6" style="margin-bottom: 20px;">
                    <div class="card"><img class="card-img w-100 d-block" style="background: url(assets/img/festival1.jpg) center / cover no-repeat;height: 300px;border-radius: 5px;">
                        <a href="#"><div class="card-img-overlay">
                            <h4 style="color: rgb(255,255,255);text-shadow: 0px 0px 1px rgb(0,0,0);">Embrace The Culture</h4>
                            <p style="color: rgb(255,255,255);text-shadow: 0px 0px 1px rgb(0,0,0);">It's always colorful</p>
                        </div></a>
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 20px;">
                    <div class="card"><img class="card-img w-100 d-block" style="background: url(assets/img/festival2.jpg) center / cover no-repeat;height: 300px;border-radius: 5px;">
                        <a href="#"><div class="card-img-overlay">
                            <h4 style="color: rgb(255,255,255);text-shadow: 0px 0px 1px rgb(0,0,0);">Share Love &amp; Peace</h4>
                            <p style="color: rgb(255,255,255);text-shadow: 0px 0px 1px rgb(0,0,0);">Beyond the limits</p>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark" style="font-family: Cabin, sans-serif;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Ipsum</a></li>
                            <li><a href="#">Dolor</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Ipsum</a></li>
                            <li><a href="#">Dolor</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Seaside South Park</h3>
                        <p>We are a Hotel-chain with tens our Hotels spread across the entire island. We have been ranked as No.1 for our Hospitality for years and keeps growing as a reputed brand in Sri Lanka.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Seaside South Park © 2020</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>