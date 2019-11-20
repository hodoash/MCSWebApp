<?php  

require_once('../../model/settings.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //requireLogin();
    //echo "yes";
    $bargs=$_POST['book'];//print_r($bargs); echo "one";return true;
    //$book=new Book($bargs);//print_r($book); echo "one";return true;
    //$book->valUserForm();
    $method = new ReflectionMethod('book', 'valUserForm');
    $method->setAccessible(true);
    $errors= $method->invoke($book=new Book($bargs));//print_r($errors); echo "one";return true;

    $u_id=$book::find_email($bargs['email']);//echo $u_id;return true;
    $book->setUserId($u_id); //echo $book::myU_id();
    //$book->$u_id=$u_id;
    $book->save();


    //$arrBook=[/*$_POST['book[hostel]'],*/$_POST['book[email]']];
    //$arrRoom=[$book['rm_email'],$book['rm_phone_no']];
    //print_r($arrBook);return true;
    //return false;
    /*$email= $_POST['book[email]'];// ?? '';
    $phone_no=$_POST['phone_no'];// ?? '';
    $hostel= $_POST['hostel'];// ?? '';
    //$roomtype=$_POST['room'];
    $roommate=$_POST['roommate'];
    $room=$_POST['room'];
    $emailr1=$_POST['emailr1'];
    $phone_nor1 =$_POST['phone_nor1'];
    $emailr2=$_POST['emailr2'];
    $phone_no2=$_POST['phone_no2'];
    $email3=$_POST['email3'];
    $phone_no3=$_POST['phone_no3'];



    $email=sanitizeData($email);
    $phone_no=sanitizeData($phone_no);
    $hostel=sanitizeData($hostel);
    //$roomtype=sanitizeData($roomtype);
    $roommate=sanitizeData($roommate);
    $room=sanitizeData($room);
    $emailr1=sanitizeData($emailr1);
    $phone_nor1=sanitizeData($phone_nor1);
    $emailr2=sanitizeData($emailr2);
    $phone_no2=sanitizeData($phone_no2);
    $email3=sanitizeData($email3);
    $phone_no3=sanitizeData($phone_no3);
    //echo "one";
    //$pass=sha1($pass);

    //user should save info to bookHostel
    //...code
    /*if(Book::find_email($args['email'])){echo "gfd";echo Book::find_email($args['email']);return true;
        $user->errors[]="a user already created an account with this email.";*/

    //and redirect user to homepage
    //$session->message('submitted succesful');
    //redirect_to(URL.'../');



}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Book a Hostel | Cozy Hill</title>
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
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="../gallery/index.php">&nbsp;Gallery</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="../bookHostel/index.php">Book a Hostel</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="../review/index.php">Reviews</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="../contactUS/index.php">Contact Us</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="../login/index.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-pricing dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">What Is Your Budget?</h2>
                    <p>No matter your pocket size, we have something for you</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h3>Charlotte</h3>
                            </div>
                            <p>Seclusion &amp; Privacy</p>
                            <div class="features">
                                <h4>
                                    <span class="feature">1-person:&nbsp;</span>
                                    <span>5000$</span>
                                </h4>
                                <h4>
                                    <span class="feature">2-person:&nbsp;</span>
                                    <span>4000$</span>
                                </h4>
                                <h4>
                                    <span class="feature">3-person:&nbsp;</span>
                                    <span>3000$</span>
                                </h4>
                                <h4>
                                    <span class="feature">4-person:&nbsp;</span>
                                    <span>2000$</span>
                                </h4>
                            </div></div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h3>Dufie</h3>
                            </div>
                            <p>Luxuray Personified</p>
                            <div class="features">
                                <h4><span class="feature">1-person:&nbsp;</span><span>5000$</span></h4>
                                <h4><span class="feature">2-person:&nbsp;</span><span>4000$</span></h4>
                                <h4><span class="feature">3-person:&nbsp;</span><span>3000$</span></h4>
                                <h4><span class="feature">4-person:&nbsp;</span><span>2000$</span></h4>
                            </div></div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="clean-pricing-item">
                            <div class="heading">
                                <h3>Hosanna</h3>
                            </div>
                            <p>Loving Community</p>
                            <div class="features">
                                <h4><span class="feature">1-person:&nbsp;</span><span>5000$</span></h4>
                                <h4><span class="feature">2-person:&nbsp;</span><span>4000$</span></h4>
                                <h4><span class="feature">3-person:&nbsp;</span><span>3000$</span></h4>
                                <h4><span class="feature">4-person:&nbsp;</span><span>2000$</span></h4>
                            </div></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Booking</h2>
                    <p>Choose from any of our three homes to be your next home</p>
                </div>
                <form method="POST" action="">
                    <div class="form-group"><label>Email</label><input class="form-control" name="book[email]" type="email"></div>
                    <div class="form-group"><label>Phone Number</label><input class="form-control" name="book[phone_no]" type="text"></div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="book[hostel]">Choose a hostel from the list (select one):</label>
                            <select name="book[hostel]" class="form-control">
                                <option value="Dufie">Dufie</option>
                                <option value="Charlotte">Charlotte</option>
                                <option value="Hosanna">Hosanna</option>
                            </select>
                        </div>

                    </div>
                    <!--<div class="form-group"><label>Room Type</label>
                        <div class="form-check"><input class="form-check-input" name="room" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">2-person</label></div>
                        <div class="form-check"><input class="form-check-input" name="room" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">3-person</label></div>
                        <div class="form-check"><input name="room" class="form-check-input" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">4-person</label></div>
                    </div>-->
                    <div class="form-group"><label>Bringing a roommate?</label>
                        <div class="form-check"><input class="form-check-input" type="radio" value="1" name="book[roommate]" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Yes</label></div>
                        <div class="form-check"><input name="book[roommate]" class="form-check-input" value="0" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">No</label></div>
                    </div>
                    <div class="form-group"><label>Roommate's Email &amp; Number</label>
                        <label>Roommate 1(Email, Phone Number)</label><input name="book[emailr1]"  placeholder="roommate's email" class="form-control" type="email"><br><input name="phone_nor1"  placeholder="roommates phone number" class="form-control" type="tel"><br><label>Roommate 2(Email, Phone Number)</label><input name="book[emailr2]"  placeholder="roommate's email" class="form-control" type="email"><br>
                        <input name="book[phone_no2]" placeholder="roommate's phone number" 
                            class="form-control"  type="tel"><br>   <label>Roommate 3(Email, Phone Number)</label><input name="book[email3]" placeholder="roommate's email" class="form-control" type="email"><br><input name="book[phone_no3]" placeholder="roommate's number" class="form-control" type="tel"></div><button class="btn btn-primary" type="submit">Book Now!</button></form>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="../assets/js/smoothproducts.min.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>