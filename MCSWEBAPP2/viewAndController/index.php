<?php
	
require_once('../model/settings.php');	

$errors=[];
if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$args=$_POST['user'];
    $user=new User($args);
   
    $errors=$user->validateData();//print_r($errors);return true;


 //    $smth = User::find_email($args['email']);
 //    echo "smth";
	// return true;
    if(empty($errors)){
    	if(User::find_email($args['email'])){
    		$user->errors[]="a user already created an account with this email.";

    	}else{
    		$result=$user->save();
    		if($result){
    			$new_id=$user->id;
    			
                header("Location: " .URL.'/login');
    		}else{/*................*/}
    	}
    }else{//print_r($errors);
   
    }
}





?>


    <!DOCTYPE php>
    <php>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Home | Cozy Hill</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
        <link rel="stylesheet" href="assets/css/Dark-Footer.css">
        <link rel="stylesheet" href="assets/css/Dark-Footer.css">
        <link rel="stylesheet" href="assets/css/Dark-Footer.css">
        <link rel="stylesheet" href="assets/css/Dark-Footer.css">
        <link rel="stylesheet" href="assets/css/Dark-Footer.css">
        <link rel="stylesheet" href="assets/css/Dark-Footer.css">
        <link rel="stylesheet" href="assets/css/gradient-navbar-1.css">
        <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
        <link rel="stylesheet" href="assets/css/gradient-navbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
        <link rel="stylesheet" href="assets/css/smoothproducts.css">
        <link rel="stylesheet" href="assets/css/untitled.css">
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand fixed-top bg-white clean-navbar">
        <div class="container">
            <a class="navbar-brand logo" href="index.html">Cozy Hill</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-1 flex-fill justify-content-between"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="./gallery/index.php">&nbsp;Gallery</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="./bookHostel/index.php">Book a Hostel</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="./review/index.php">Reviews</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="./contactUS/index.php">Contact Us</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="./login/index.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <main class="page landing-page">
            <section class="clean-block clean-hero" style="background-image:url(ashesi.jpg);color:rgba(155,149,207,0.45);background-position:center;background-size:cover;background-repeat:no-repeat;">
            <div class="text">
            </div>
        </section>
            <section class="clean-block about-us">
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info">About Us</h2>
                        <p id="about_p"><br>CozzyHillz is a company that provides hostel maanagement services and booking system to students in Ashesi. Student &nbsp;Satisfaction is our top priority.<br>We are a team of 5 developres that decided to make information about
                            off site hostels around the Ashesi Campus readily available.&nbsp;<br></p>
                    </div>
                </div>
            </section>
            <section class="clean-block slider dark">
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info">Sneak peek of our hostels</h2>
                        <p>Take a look at some of our prestege hostels. We indeed provide the best of opportunities for students to get the hostels they need. &nbsp;<br><br></p>
                    </div>
                    <div class="carousel slide" data-ride="carousel" id="carousel-1">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="img-fluid w-100 d-block" src="assets/img/Ashesi_HosannaHostel.jpg" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/Ashesi_Dufie_inline.jpg" alt="Slide Image"></div>
                            <div class="carousel-item"><img class="w-100 d-block" src="assets/img/Ashesi_CharlotteCourts_inline.jpg" alt="Slide Image"></div>
                        </div>
                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                                data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </section>
            <section class="clean-block clean-testimonials dark">
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info">Testimonials</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card clean-testimonial-item border-0 rounded-0">
                                <div class="card-body">
                                    <p class="card-text">&nbsp;Dufie's internet is off the charts. The only thing i wish they change is the time they lock the main gates. The end of year party was a blast. Nice one.</p>
                                    <h3>John Smith</h3>
                                    <h4 class="card-title">Dufie Platinum Hostel</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card clean-testimonial-item border-0 rounded-0">
                                <div class="card-body">
                                    <p class="card-text">Cool hostel attendants. The rooms are comfortable, Security is on point, there is no water problem. I would reccommend this hostel to everyone. Good Job.</p>
                                    <h3>Marry Salley</h3>
                                    <h4 class="card-title">&nbsp;Charlotte Court</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card clean-testimonial-item border-0 rounded-0">
                                <div class="card-body">
                                    <p class="card-text">I had a problem in my room but nothing was done about it. The customer service was poor this year. Aside that, the internet is good and the room services is amazing.</p>
                                    <h3>Sandra Asiamah Marle</h3>
                                    <h4 class="card-title">Hosanna &nbsp;Hostel</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="clean-block about-us">
                <div class="container">
                    <div class="block-heading">
                        <h2 class="text-info">Sign Up To Enjoy The Full Package</h2>
                    </div>
                    
                    <form method="POST" action="">
                        <div class="form-group"><label>Name</label><input name="user[name]" placeholder="Enter your name" class="form-control" type="text"></div>
                        <div class="form-group"><label>Phone Number</label><input name="user[phone_no]" placeholder="Enter your phone_no" class="form-control" type="tel"></div>
                        <div class="form-group"><label>Email</label><input name="user[email]" placeholder="Enter your email"  class="form-control" type="email"></div>
                        <div class="form-group"><label>Password</label><input name="user[pass]" class="form-control"  type="password"></div>
                        <div class="form-group"><label>Confirm Password</label><input name="user[confirm_pass]"  class="form-control" type="password"></div>
                        <div class="form-group"><button class="btn btn-primary btn-block"  placeholder="Enter your password" type="Submit">Sign Up!</button></div>
                    </form>
                </div>
            </section>
        </main>
        <footer>
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <h3>
                    <a href="#">Company
                        <span>logo </span>
                    </a>
                </h3>
                <p class="links">
                    <a href="../index.php">Home</a>
                    <strong> · </strong>
                    <a href="../gallery/index.php">Gallery</a>
                    <strong> · </strong>
                    <a href="../bookHostel/index.php">Book a Hostel</a>
                    <strong> · </strong>
                    <a href="../review/index.php">Reviews</a>
                    <strong> · </strong>
                    <a href="../contactUS/index.php">Contact Us</a>
                    <strong> · </strong>
                    <a href="../login/index.php">Login</a>
                </p>
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

    </php>

?>   