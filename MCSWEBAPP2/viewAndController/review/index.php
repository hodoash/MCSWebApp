
<?php
require_once('../../model/settings.php');  

$errors=[];
//$user=[];
//$email='';
//$pass='';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //echo "one";
    //echo $_POST['email'];
    $name= $_POST['name'];// ?? '';
    $sub=$_POST['sub'];// ?? '';
    $messages=$_POST['messages'];

    $name=sanitizeData($name);
    $sub=sanitizeComment($sub);
    $messages=sanitizeComment($messages);

    //$review=new Review($name,$sub,$messages);


    $method = new ReflectionMethod('review', 'valUserForm');
    $method->setAccessible(true);
    $errors= $method->invoke($review=new Review($name,$sub,$messages));//print_r($errors);return true;
    //User::valUserForm();



    //echo $messages; return true;
    if(empty($errors)){
        //$review=new Review($name,$sub,$messages);
        //echo $review->name;
       $result=$review->save();
        if($result){
            //$new_id=$review->id;
            
        }    //redirect_to(URL.'/login');
       
    }
    else{
            $errors[]=" Error,User was not able add review.";
        }
    

}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Reviews | Cozy Hill</title>
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
                        <a class="nav-link" href="../bookHostel/index.php">Book a Hostel</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="../review/index.php">Reviews</a>
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
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Tell Us What You Think</h2>
                    <p>Thoughts, problems or anything you especially loved about any of the hostels. Let us know, so we can improve to provide better services or help keep us on the right track.</p>
                </div>
                <form method="POST" action="">
                    <div class="form-group"><label>Name</label><input class="form-control" name="name" type="text"></div>
                    <div class="form-group"><label>Subject</label><input class="form-control" name="sub" type="text"></div>
                    <div class="form-group"><label>Message</label><textarea name="messages" class="form-control"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="../assets/js/smoothproducts.min.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>