<?php  

require_once('../../model/settings.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    requireLogin();
    $args=$_POST['book'];
    //user should save info to bookHostel
    //...code

    //and redirect user to homepage
    $session->message('submitted succesful');
    redirect_to(URL.'../');



}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - mcsSite2</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../assets/css/Dark-Footer.css">
    <link rel="stylesheet" href="../assets/css/Dark-Footer.css">
    <link rel="stylesheet" href="../assets/css/Dark-Footer.css">
    <link rel="stylesheet" href="../assets/css/Dark-Footer.css">
    <link rel="stylesheet" href="../assets/css/Dark-Footer.css">
    <link rel="stylesheet" href="../assets/css/Dark-Footer.css">
    <link rel="stylesheet" href="../assets/css/gradient-navbar-1.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="../assets/css/gradient-navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/smoothproducts.css">
    <link rel="stylesheet" href="../assets/css/untitled.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="#">CozyHill</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-center align-items-stretch"
                id="navcol-2">
                <ul class="nav navbar-nav flex-row mx-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../gallery/index.php">&nbsp;Hostel Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../pricing/index.php">Pricing</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="../bookHostel/index.php">Book a Hostel</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../review/index.php">Review</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../contactUs/index.php">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="../login/index.php"><i class="fa fa-user"></i>login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Booking</h2>
                    <p>Choose from any of our three homes to be your next home</p>
                </div>
                <form>
                    <div class="form-group"><label>Email</label><input class="form-control" type="email"></div>
                    <div class="form-group"><label>Phone Number</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>Hostel</label>
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown </button>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </div>
                    </div>
                    <div class="form-group"><label>Room Type</label>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">2-person</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">3-person</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">4-person</label></div>
                    </div>
                    <div class="form-group"><label>Bringing a roommate?</label>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">No</label></div>
                    </div>
                    <div class="form-group"><label>Roommate's Email &amp; Number</label>
                        <section></section><label>Roommate 1(Email, Phone Number)</label><input class="form-control" type="email"><input class="form-control" type="tel"><label>Roommate 2(Email, Phone Number)</label><input class="form-control" type="email">
                        <input
                            class="form-control" type="tel"><label>Roommate 3(Email, Phone Number)</label><input class="form-control" type="email"><input class="form-control" type="tel"></div><button class="btn btn-primary" type="button">Book Now!</button></form>
                <div class="block-heading">
                    <h2 class="text-info">Send Your Receipt</h2>
                    <p>Send your receipt now to confirm your reservation</p>
                </div>
                <form>
                    <div class="form-group"><label>Email</label><input class="form-control" type="email"></div>
                    <div class="form-group"><label>Phone Number</label><input class="form-control" type="tel"></div>
                    <div class="form-group"><label>Upload Receipt</label><input type="file"></div><button class="btn btn-primary" type="button">Submit</button></form>
            </div>
        </section>
    </main>
    <footer>
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#">Company<span>logo </span></a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Gallery</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">Register</a><strong> · </strong><a href="#">Review</a><strong> · </strong><a href="#">Contact</a></p>
                <p
                    class="company-name">cozyHillz © 2019</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">1st Avenue Street</span> Berekusu, Ghana</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +233 546 474 503&nbsp;</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">managingcs@gmail.com</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> CozzyHillz is a company that provides hostel maanagement services and booking system to students in Ashesi. Student &nbsp;Satisfaction is our top priority.</p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>