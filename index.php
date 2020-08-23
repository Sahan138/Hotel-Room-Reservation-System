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

<body style="font-family: Cabin, sans-serif; margin-top: 88px;">
    <nav class="navbar fixed-top navbar-light navbar-expand-md navigation-clean-button" style="font-family: Cabin, sans-serif;">
        <div class="container"><a class="navbar-brand" href="index.php">Seaside South Park</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php#about">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php#contact">Contact Us</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Discover More</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="index.php#features">Facilities</a><a class="dropdown-item" role="presentation" href="index.php#gallery">Gallery</a></div>
                    </li>
                </ul><p class="navbar-text" style="margin-right: 16px;padding-top: 8px;margin-top: 13px;">Hi, User</p><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="reg.php" style="background-color: rgb(63,140,228);">Sign Up</a></span></div>
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
    <div id="reserve" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4" id="room1" style="margin-bottom: 10px;">
                    <p>Paragraph</p><button class="btn btn-primary" type="button">Button</button></div>
                <div class="col-md-4" id="room2" style="margin-bottom: 10px;">
                    <p>Paragraph</p><button class="btn btn-primary" type="button">Button</button></div>
                <div class="col-md-4" id="room3" style="margin-bottom: 10px;">
                    <p>Paragraph</p><button class="btn btn-primary" type="button">Button</button></div>
            </div>
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
    <div id="about" class="highlight-phone">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2>We Are Here to Make Your Summer.</h2>
                        <p>We are a Hotel-chain with tens of our Hotels spread across the entire island. We have been ranked as No.1 for our Hospitality for years and keeps growing as a reputed brand in Sri Lanka.<br></p><a class="btn btn-primary" role="button"
                            href="index.php#reviews"><strong>customer Reviews</strong><br></a></div>
                </div>
                <div class="col-sm-4">
                    <div class="d-none d-md-block iphone-mockup"><img class="device" src="assets/img/iphone.svg">
                        <div class="screen" style="background-image: url(&quot;assets/img/screen-content-iphone-6.jpg&quot;);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team Behind Seaside South Park</h2>
                <p class="text-center">Meet the amazing people behind the Room Reservation System of Seaside South Park.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/nimesh.png">
                    <h3 class="name">Nimesh Kavinda</h3>
                    <p class="title">Full-Stack Developer</p>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br></p>
                    <div
                        class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
            <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/sahan.jpg">
                <h3 class="name">Sahan Nishantha</h3>
                <p class="title">Back-End Developer</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br></p>
                <div
                    class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
        </div>
        <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/anuda.jpg">
            <h3 class="name">Anuda Nethmin</h3>
            <p class="title">Back-End Developer</p>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br></p>
            <div
                class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
    </div>
    </div>
    </div>
    </div>
    <div id="reviews" class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Testimonials </h2>
                <p class="text-center">This is what people had to say about Seaside South Park.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;<br></p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/customer1.jpg">
                        <h5 class="name">Kevin Samaraweera</h5>
                        <p class="title">BSc (Hons) Software Engineering</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;<br></p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/customer2.jpg">
                        <h5 class="name">Ranuja Wanigasinghe</h5>
                        <p class="title">Computer Security Undergraduate</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;<br></p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/customer3.jpg">
                        <h5 class="name">Shanuka Rathnayake</h5>
                        <p class="title">Computer Security Undergraduate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="features" class="features-blue">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Why Choose Us?</h2>
                <p class="text-center">Seaside South Park has been ranked No.1 Hotel chain in Sri Lanka.</p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-map-marker icon" style="color: rgb(194,194,194);"></i>
                    <h3 class="name">Test</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-hotel icon" style="color: rgb(194,194,194);"></i>
                    <h3 class="name">Test</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-leaf icon" style="color: rgb(194,194,194);"></i>
                    <h3 class="name">Test</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="icon ion-android-restaurant icon" style="color: rgb(194,194,194);"></i>
                    <h3 class="name">Test</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-shopping-cart icon" style="color: rgb(194,194,194);"></i>
                    <h3 class="name">Test</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-credit-card icon" style="color: rgb(194,194,194);"></i>
                    <h3 class="name">Test</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="projects-horizontal">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">The Most&nbsp;<strong>Luxurious Experience</strong></h2>
                <p class="text-center">At Seaside South Park, You get to experience <br>a true 5-start hotel experience.</p>
            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/hotel1.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">Test</h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/hotel2.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">Test</h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/hotel3.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">Test</h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/hotel4.jpg"></a></div>
                        <div class="col">
                            <h3 class="name">Test</h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gallery" class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(&quot;assets/img/gallery1.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                <div class="swiper-slide" style="background-image: url(&quot;assets/img/gallery2.png&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                <div class="swiper-slide" style="background-image: url(&quot;assets/img/gallery3.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                <div class="swiper-slide" style="background-image: url(&quot;assets/img/gallery4.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center"><strong>Witness Greatness</strong></h2>
                <p class="text-center">Our Hotels are ranked in the top for a reason. <br>Are you ready to witness greatness?</p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/hotel1.jpg"><img class="img-fluid" src="assets/img/hotel1.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/hotel2.jpg"><img class="img-fluid" src="assets/img/hotel2.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/hotel3.jpg"><img class="img-fluid" src="assets/img/hotel3.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="assets/img/hotel4.jpg"><img class="img-fluid" src="assets/img/hotel4.jpg"></a></div>
            </div>
        </div>
    </div>
    <div class="social-icons" style="padding-top: 30px;">
        <p style="font-size: 20px;">Follow Us on Socials</p><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-youtube"></i></a>
    </div>
    <div id="contact" class="contact-clean" style="background-image: url(&quot;assets/img/seasidesouthpark.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;">
        <form action="mailto:nimeshkavinda13@gmail.com" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" required></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></div>
            <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14" required></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
    <div class="map-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Location </h2>
                <p class="text-center">Find Us on Google Maps</p>
            </div>
        </div><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d990.3947728733034!2d80.040874!3d6.820936!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xddb466719c0595db!2sNSBM%20Green%20University!5e0!3m2!1sen!2sus!4v1594313210781!5m2!1sen!2sus" width="100%" height="450"></iframe></div>
    <div class="newsletter-subscribe">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Subscribe for our Newsletter</h2>
                <p class="text-center">Want to stay updated?<br>Subscribe to our monthly Newsletter.</p>
            </div>
            <form class="form-inline" method="post">
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Your Email"></div>
                <div class="form-group"><button class="btn btn-primary" type="submit">Subscribe </button></div>
            </form>
        </div>
    </div>
    <div class="footer-dark" style="font-family: Cabin, sans-serif;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="index.php#book">Rooms</a></li>
                            <li><a href="index.php#festivals">Tours</a></li>
                            <li><a href="index.php#features">Facilities</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Reach Us</h3>
                        <ul>
                            <li><a href="index.php#about">About</a></li>
                            <li><a href="index.php#contact">Contact</a></li>
                            <li><a href="index.php#reviews">Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Seaside South Park</h3>
                        <p>We are a hotel-chain with tens of our Hotels spread across the entire island. We have been ranked as No.1 for our Hospitality for years and keeps growing as a reputed brand in Sri Lanka.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <center style="margin-top:16px;"><ul><li><a href="index.php#"><b>Go to Top ></b></a></li></ul></center>
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