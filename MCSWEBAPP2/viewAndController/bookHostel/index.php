<?php  

require_once('../../model/settings.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //requireLogin();
    //echo "yes";
    $bargs=$_POST['book'];//print_r($bargs); echo "one";return true;
    $book=new Book($bargs);//print_r($book); echo "one";return true;
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
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html">About</a></li>-->
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
                <form method="POST" action="">
                    <div class="form-group"><label>Email</label><input class="form-control" name="book[email]"value="<?php echo h($book->email);?>" type="email"></div>
                    <div class="form-group"><label>Phone Number</label><input class="form-control" name="book[phone_no]" value="<?php echo h($book->phone_no);?>" type="text"></div>
                    <div class="form-group"><label>Hostel</label>
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle" value="<?php echo h($book->hostel);?>" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown </button>
                            <ul class="dropdown-menu" role="menu"><li><a class="dropdown-item" role="presentation" name="book[hostel]" href="#">Hosanna</a></li><li><a class="dropdown-item" role="presentation" name="book[hostel]" href="#">Dufie</a></li><li><a class="dropdown-item" name="book[hostel]" role="presentation" href="#">Charlotte</a></li></ul>
                        </div>

                    </div>
                    <!--<div class="form-group"><label>Room Type</label>
                        <div class="form-check"><input class="form-check-input" name="room" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">2-person</label></div>
                        <div class="form-check"><input class="form-check-input" name="room" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">3-person</label></div>
                        <div class="form-check"><input name="room" class="form-check-input" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">4-person</label></div>
                    </div>-->
                    <div class="form-group"><label>Bringing a roommate?</label>
                        <div class="form-check"><input class="form-check-input" type="radio"  name="book[roommate]" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Yes</label></div>
                        <div class="form-check"><input name="book[roommate]" class="form-check-input" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2">No</label></div>
                    </div>
                    <div class="form-group"><label>Roommate's Email &amp; Number</label>
                        <label>Roommate 1(Email, Phone Number)</label><input name="book[emailr1]" value="<?php echo sanitizeData($user->emailr1);?>" placeholder="roommate's email" class="form-control" type="email"><br><input name="phone_nor1" value="<?php echo sanitizeData($book->rm_phone_no);?>" placeholder="roommates phone number" class="form-control" type="tel"><br><label>Roommate 2(Email, Phone Number)</label><input name="book[emailr2]" value="<?php echo sanitizeData($book->emailr2);?>" placeholder="roommate's email" class="form-control" type="email"><br>
                        <input name="book[phone_no2]" value="<?php echo sanitizeData($book->phone_no2);?>" placeholder="roommate's phone number" 
                            class="form-control"  type="tel"><br>   <label>Roommate 3(Email, Phone Number)</label><input name="book[email3]" placeholder="roommate's email" class="form-control" value="<?php echo sanitizeData($book->email3);?>" type="email"><br><input name="book[phone_no3]" placeholder="roommate's number" value="<?php echo sanitizeData($book->phone_no3);?>" class="form-control" type="tel"></div><button class="btn btn-primary" type="submit">Book Now!</button></form>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="../assets/js/smoothproducts.min.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>