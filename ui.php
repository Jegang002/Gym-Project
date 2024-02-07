<?php
session_start();
$conn=mysqli_connect('localhost','root','','arnoldgym') or die('unable to connect');

if(isset($_SESSION['usern'])){
    $usern=$_SESSION['usern'];
}

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['usern']);
  header("Location:login.html");
  exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>You</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
    /* *{
        padding: 0;
        margin: 0;
        text-transform: capitalize;
        transition: all .2s linear;
    } */
    /* body {
        font-family: 'Poppins', sans-serif;
        background-color: aqua;
    } */

    #about h1 {
        font-size: 2.5em;
        /* Adjust the font size as needed */
    }

    #about p {
        font-size: 1.2em;
        /* Adjust the font size as needed */
    }

    #Team h1 {
        font-size: 2.5em;
        /* Adjust the font size as needed */
    }

    #Team p {
        font-size: 1.2em;
        /* Adjust the font size as needed */
    }

    .cdd a:hover {
        cursor: pointer;
        text-decoration: underline;
    }

    /* #navbarText ul li a:hover{
        cursor: pointer;
        color: red;
        
    } */
    /* #content h4 p{
        display: flex;W250-H530
    } */
    .car {
        height: 700px;
    }
    .hov:hover{
        background-color: brown;
    }
</style>
<script>
    $(document).ready(function () {
        $("#box1").hover(function () {
            $("#box1").css({ "width":"320px", "height":"567.25px", "background-color": "lightblue" });
        },
            function () {
                $("#box1").css({ "width": "286px", "height": "523.25px" });
            });
    });
    $(document).ready(function () {
        $("#box2").hover(function () {
            $("#box2").css({ "width": "320px", "height": "567.25px", "background-color": "lightblue" });
        },
            function () {
                $("#box2").css({ "width": "286px", "height": "523.25px" });
            });
    });


</script>

<body class="p-0 m-0">

    <!-- Example Code -->
    <!-- <div class="container-fluid"> -->
    <nav class="navbar navbar-expand-lg p-3 navbar-dark bg-dark  fixed-top">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="#">Arnold <span style="color:red;"><b>Gym</b></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home"
                            style="color:white;font-size: larger;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials"
                            style="color: white;font-size: larger;">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: white;font-size: larger;">AboutUs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" style="color:white;font-size: larger;">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#trainee" style="color: white;font-size: larger;">Trainee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html" style="color: white;font-size: larger;">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer" style="color: white;font-size: larger;">ContactUs</a>
                    </li>

                </ul>
                <span class="nav-item dropdown me-5">
                   <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false"><i class="bi bi-person-circle text-light "> My Profile</i>
                   </a>
                   <ul class="dropdown-menu bg-black">
                       <li class="dropdown-item hov">
                           <span class="text-white"><?php echo $usern; ?></span>
                        </li>
                       <li>
                        <a class="dropdown-item text-white hov" href="?logout=true" >Logout</li>
                    </a>
                   </ul>
               </span>
            </div>
        </div>
    </nav>

    <!-- carousel section -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="100">
                <img src="./images/car1.jpg" class="d-block w-100 car" alt="...">
                <div class="carousel-caption d-none d-md-block text-center">
                    <h2 style="color: aqua;">WELCOME TO Arnold Gym</h2>
                    <p style="color: aqua;">Comeback Stronger...</p>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="1000">
                <img src="./images/car2.jpg" class="d-block w-100 car" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="color: aqua;">WELCOME TO Arnold Gym</h2>
                    <p style="color: aqua;">Comeback Stronger...</p>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="1000">
                <img src="./images/car3.jpg" class="d-block w-100 car" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="color: aqua;">WELCOME TO Arnold Gym</h2>
                    <p style="color: aqua;">Comeback Stronger...</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="1000">
                <img src="./images/car4.jpg" class="d-block w-100 car" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="color: red;">WELCOME TO Arnold Gym</h2>
                    <p style="color: red;">Comeback Stronger...</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="10">
                <img src="./images/car5.jpg" class="d-block w-100 car" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-center" style="color: aqua;">WELCOME TO Arnold Gym</h2>
                    <p style="color: aqua;">Comeback Stronger...</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section id="about" class="bg-white h-100 ">
        <div class="container-fluid ">
            <div class="row p-5  align-items-center  ">
                <div class="col-md p-5  ">
                    <img src="./images/empire.png" alt="" class="img-fluid ">
                </div>
                <div class="col-md" id="content">
                    <h1 class="mb-4" style="color: red;">About Us</h1>
                    <h1><b>Every Day Is A Chance To Become Better</b></h1>
                    <p>GYM 24 provides a 24/7 Fitness facility to residents of Martinsville and Henry County, as well as
                        surrounding areas to help people reach and maintain their goals. We combine different types of
                        fitness equipment to meet different fitness needs and levels. </p>
                    <h4><img src="./images/correct.png" alt="correct" width="25px"> <b>Body and Mind</b></h4>
                    <p>To keep the body in good health is a duty... otherwise we shall not be able to keep our mind
                        strong and clear.</p>
                    <h4><img src="./images/correct.png" alt="correct" width="25px"> <b>Stratagies</b></h4>
                    <p>“Objectives can be compared to a compass bearing by which a ship navigates...</p>
                    <h4><img src="./images/correct.png" alt="correct" width="25px"> <b>Healthy Life</b></h4>
                    <p>“A good laugh and a long sleep are the best cures in the doctor's book.” “A healthy lifestyle is
                        the most potent medicine at your disposal.”</p>
                    <h4><img src="./images/correct.png" alt="correct" width="25px"> <b>Workout</b></h4>
                    <p>“When I feel tired, I just think about how great I will feel once I finally reach my goal.”...
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="trainee" class="container-fluid bg-white text-dark text-center">
        <div class="row text-center justify-content-center">
            <div class="text-center">
                <h1 style="color: red;"><b>TRAINERS</b></h1>
            </div>
            <!-- <div class="col-md"> -->
                <div class="card p-0  m-5 bg-dark" style="width: 18rem;">
                    <img src="./images/card3.jpeg" class="card-img-top rounded-circle " height="290px" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><b style="color:red;">Teejay</b></h5><b
                            class="text-primary">Mr.Chennai</b>
                        <p class="card-text text-white"><del>₹1000/Month</del><br><b>₹600/Month</b></p>
                        <button type="submit" class="btn btn-primary"><a href="trainee1.html"
                                style="text-decoration: none;color: white;">Book Now</a></button>
                    </div>
                    
                </div>
            <!-- </div> -->
            <!-- <div class="col-md"> -->
                <div class="card p-0  m-5 bg-dark" style="width: 18rem;">
                    <img src="./images/card1.jpeg" class="card-img-top rounded-circle " height="290px" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><b style="color:red;">Ip Mohan</b></h5><b
                            class="text-primary">Mr.Erode</b>
                        <p class="card-text text-white"><del>₹1800/Month</del><br><b>₹1200/Month</b></p>
                        <button type="submit" class="btn btn-primary"><a href="trainee2.html"
                                style="text-decoration: none;color: white;">Book Now</a></button>
                    </div>
                </div>
            <!-- </div> -->
            <!-- <div class="col-md"> -->
                <div class="card p-0  m-5 bg-dark text-white" style="width: 18rem;">
                    <img src="./images/card2.jpeg" class="card-img-top rounded-circle " height="290px" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><b style="color:red;">Mr.Gj </b></h5><b class="text-primary">Mr.Asia</b>
                        <p class="card-text -white"><del>₹2200 for 2 Month</del><br><b>₹1600 for 2 Month</b></p>
                        <button type="submit" class="btn btn-primary"><a href="trainee3.html"
                                style="text-decoration: none;color: white;">Book Now</a></button>
                    </div>
                </div>
            <!-- </div> -->
        </div>

    </section>

    <section id="services" class="container-fluid bg-white text-dark text-center">
        <div class="row justify-content-center">
        <div class="text-center">
            <h1 style="color: red;"><b>SERVICES</b></h1>
        </div>
                
                <div class="card p-0 m-5 bg-dark text-white" style="width:18rem;">
                    <div class="card-body">
                        <p style="color: red;">Pricing Plan</p>
                        <h3>Affordable Pricing Plan For You</h3><br>
                        <p><img src="./images/cardio.png" alt="cardio" width="25px"> Cardio Exercise</p><br>
                        <p><img src="./images/weight-lifting.png" alt="weight" width="25px"> Weight-Lifting</p><br>
                        <p><img src="./images/diet.png" alt="diet" width="25px"> Diet Plans</p><br>
                        <p><img src="./images/results.png" alt="results" width="25px"> Overall Results</p><br>
                    </div>
                </div>

                <div class="card p-0 m-5 bg-dark text-white" style="width:18rem;" id="box2">
                    <div class="card-body">
                        <h4 style="color: red;">Basic Plan</h4>
                        <del>₹2600/Month</del>
                        <p><b>₹2000/Month</b></p><br>
                        <p><img src="./images/personal-trainee.png" alt="trainee" width="25px"> Personal Training Weekly 1 Day
                        </p><br>
                        <p><img src="./images/cardio.png" alt="cardio" width="25px"> Cardio Exercise</p><br>
                        <p><img src="./images/weight-lifting.png" alt="weight" width="25px"> Weight-Lifting</p><br>
                        <p><img src="./images/diet.png" alt="diet" width="25px"> Diet Plans</p><br>
                        <p><img src="./images/results.png" alt="results" width="25px"> Overall Results</p>
                        <button type="submit" class="btn btn-danger"><a href="basic.html"
                                style="text-decoration: none;color: white;">Get Started</a></button>
                    </div>
                </div>
            <!-- </div> -->
            <!-- <div class="col-md"> -->
                <div class="card p-0 m-5 bg-dark text-white" style="width: 18rem;" id="box1">
                    <div class="card-body">
                        <h4 style="color: red;">Premium Plan</h4>
                        <del>₹3000/Month</del>
                        <p><b>₹2400/Month</b></p><br>
                        <p><img src="./images/personal-trainee.png" alt="trainee" width="25px"> Personal Training</p><br>
                        <p><img src="./images/cardio.png" alt="cardio" width="25px"> Cardio Exercise</p><br>
                        <p><img src="./images/weight-lifting.png" alt="weight" width="25px"> Weight-Lifting</p><br>
                        <p><img src="./images/diet.png" alt="diet" width="25px"> Diet Plans</p><br>
                        <p><img src="./images/results.png" alt="results" width="25px"> Overall Results</p>
                        <button type="submit" class="btn btn-danger"><a href="premium.html"
                                style="text-decoration: none;color: white;">Get Started</a></button>
                    </div>
                </div>
            <!-- </div> -->
        </div>
        <div class="row container-fluid p-5 bg-light text-success">
            <div class="col-md">
                <img src="./images/calendar.png" alt="calender" width="30px" id="image1"><br>
                <h3>365</h3>
                <p>Working Days</p>
            </div>
            <div class="col-md">
                <img src="./images/clients.png" alt="clients" width="30px" id="image2"><br>
                <h3>203</h3>
                <p>Happy Clients</p>
            </div>
            <div class="col-md">
                <img src="./images/gold-medal.png" alt="medals" width="30px" id="image3"><br>
                <h3>41</h3>
                <p>Successful Stories</p>
            </div>
            <div class="col-md">
                <img src="./images/bodies.png" alt="medals" width="30px" id="image4"><br>
                <h3>87</h3>
                <p>Perfect Bodies</p>
            </div>
        </div>
    </section>

    <section id="testimonials" class=" bg-white ">
        <div class="container-fluid">
            <div class="row p-5 justify-content-center">
                <div class="text-center">
                    <h1 style="color: red;"><b>TESTIMONIALS</b></h1>
                </div>
                                <div class="card p-0 m-3" style="width: 18rem;">
                    <img src="./images/card3.jpeg" class="card-img-top" height="290px" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><b style="color:red;">Naveen Kumar</b></h5>
                        <p class="card-text">Fitness within is the cleanest and most organized gym I’ve ever seen! I
                            have no words to say how wonderful they are! Domenic makes you feel super comfortable,
                            Kaitlyn helps you eat better and healthy! Fitness Within has a team of excellence! They have
                            a place for anyone, a plan for any goal, everything is very flexible! I am extremely
                            satisfied with Fitness Within and the entire team. 1 to 10. They are 11🥇</p>
                        <p class="justify-content-end" style="text-align: right;"><a href="#"> More info>>></a></p>
                    </div>
                </div>
                <div class="card p-0  m-3" style="width: 18rem;">
                    <img src="./images/card2.jpeg" class="card-img-top rounded " height="290px" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><b style="color:red;">Gopal K</b></h5>
                        <p class="card-text">Since joining Fitness Within one year ago, I have become stronger and I
                            have lost 38lbs. The workouts are always different, hard and fun! The trainers will push you
                            harder than though you could go.I liked knowing you have someone there if you have questions
                            and who is also going to hold you
                            accountable. I really appreciate that the environment and culture is relaxed and
                            comfortable. (April 2020)</p>
                        <p class="justify-content-end" style="text-align: right;"><a href="#"> More info>>></a></p>
                    </div>
                </div>
                <div class="card p-0  m-3" style="width: 18rem;">
                    <img src="./images/card4.jpeg" class="card-img-top" height="290px" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><b style="color:red;">Mohana Prasath</b></h5>
                        <p class="card-text">It has been almost one year and I have lost weight and increased my
                            strength. I find the coaches – so motivating and supportive. During the shred I worked with
                            Dave and he was very motivating and held me accountable. The nutritional guidance and meal
                            plans are easy to follow that is realistic and plenty of food. Everyone is extremely – REAL
                            – supportive, FUN, KNOWLEDGABLE and challenging.</p>
                        <p class="justify-content-end" style="text-align: right;"><a href="#"> More info>>></a></p>
                    </div>
                </div>
                <div class="card p-0  m-3" style="width: 18rem;">
                    <img src="./images/card1.jpeg" class="card-img-top" height="290px" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><b style="color:red;">Mukhil S.S</b></h5>
                        <p class="card-text">I have been training at Fitness Within for 2 years. I look forward to
                            coming into the studio because I know that I will get a GREAT WORKOUT! I love training here
                            and I am getting so much stronger and tighter. The coaches pushed me beyond what I thought I
                            could handle! I love the atmosphere and the people. They make it so comfortable to be in a
                            fitness environment. (August 2020)</p>
                        <p class="justify-content-end" style="text-align: right;"><a href="#"> More info>>></a></p>
                    </div>
                </div>
                </div>
                <footer id="footer" class="">
        <div class="container-fluid p-4 m-0 bg-dark text-white text-center">
                    <div class="row">
                        <div class="col-md">
                            <h5 style="color: red;">About Us</h5>
                            <p>GYM 24 provides a 24/7 Fitness facility to residents of Martinsville and Henry County, as well as
                                surrounding areas to help people reach and maintain their goals. We combine different types of
                                fitness equipment to meet different fitness needs and levels.</p>
                        </div>
                        <div class="col-md">
                            <h5 style="color: red;">Contact Information</h5>
                            
                            <p><img src="./images/gmail.png" alt="email" width="25px"> Email: contact@ecommercesite.com</p>
                            <p><img src="./images/phone.png" alt="phone" width="25px"> Phone: 123-456-7890</p>
                            <p><img src="./images/address.png" alt="address" width="25px"> Address:310,Anna Nagar,Chenai-600028</p>
                            
                        </div>
                        <div class="col-md">
                            <h5 style="color: red;">Quick Links</h5>
                            <ul class="list-unstyled cdd">
                                <li class="my-3"><a class="nav-link" href="#home">Home</a></li>
                                <li class="my-3"><a class="nav-link" href="#features">Testimonials</a></li>
                                <li class="my-3"><a class="nav-link" href="#about">About Us</a></li>
                                <li class="my-3"><a class="nav-link" href="#footer">Contact Us</a></li>
                            </ul>
                        </div>
                    <hr>
                    <p>&copy; 2023 Online Gym Website. All rights reserved.</p>
                    </div>
                    </div>
                </footer>

                
</body>

</html>