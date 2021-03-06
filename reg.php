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

    <script>

        function validateSignup()
    {
        var terms = document.getElementById("terms").checked;

        if(!(document.signup.password.value == document.signup.passwordrepeat.value))
	    {
		    alert("Passwords don't match");
		    return;
        }
        if(!(terms==true)){
            alert("Please agree to Terms & Conditions");
            return;
        }
    }

    </script>

    <?php

    $con = mysqli_connect("localhost","root","","seasidedb");

    if(isset($_POST['submit'])){
        $name = $_POST['uname'];
        $pass = $_POST['password'];
        $conpass = $_POST['passwordrepeat'];
       
        if($pass==$conpass && isset($_POST['terms'])){
            $query = "Insert into tbluser(Username,Password) Values ('$name', '$pass')";
            $result = mysqli_query($con,$query);

            if(!($result==NULL)){
                header("location: login.php");
                echo '<script type="text/javascript>alert("Registration is successful. Please log in.");</script>';
            }
            else{
                echo '<script type="text/javascript">alert("Registration is unsuccessful.");</script>';
            }
        } 
    }

    mysqli_close($con);
?>


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
                </ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="reg.php" style="background-color: rgb(63,140,228);">Sign Up</a></span></div>
        </div>
    </nav>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background-image: url(&quot;assets/img/seaside_reg.jpg&quot;);background-repeat: no-repeat;background-size: cover;background-position: center;"></div>
            <form name="signup" action="reg.php" method="POST">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="uname" placeholder="Username" required maxlength="16"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required maxlength="16"></div>
                <div class="form-group"><input class="form-control" type="password" name="passwordrepeat" placeholder="Password (repeat)" required maxlength="16"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" name="terms" id="terms">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit" onclick="validateSignup();" style="background-color: rgb(63,140,228);">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a></form>
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
                            <li><a href="facilities.html">Facilities</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Reach Us</h3>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="about.html#reviews">Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Seaside South Park</h3>
                        <p>We are a hotel-chain with tens of our Hotels spread across the entire island. We have been ranked as No.1 for our Hospitality for years and keeps growing as a reputed brand in Sri Lanka.</p>
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