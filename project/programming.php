<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Unique Developer</title>
    <link rel="stylesheet" type="text/css" href="programming.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        .div1 {
            margin-top: 5%;
            height: 500px;
            width: 1263px;
        }
        img{
            max-width: 100%;
        }
    </style>
</head>

<body>


    <!---Navigation Starts	----->
    <!-- header -->
    <header id="header">
        <a href="index.php"> <img id="logo" src="images/logo.png" alt=""></a>
        <nav class="navbar">
            <ul style="padding-top: 2rem;" class="nav-ul">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Student data</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
        <div id="dropdown">
            <button><i class="fa-regular fa-user"></i>Hi,<?php echo $_SESSION['username'] ?><i class="fa-solid fa-angle-down"></i></button>
            <div class="drop-content">
                <a href="profile.php">Profile</a>
                <a href="logout.php">sign-out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid  div1">
        <img src="images/programming_image.png" alt="">
    </div>

    <!---programming languages Section Start	----->
    <br><br><br><br><br>
    <section class="latest-news-area" id="latest">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2><b>PROGRAMMING LANGUAGES</b></h2>
                        <div class="sub-heading">
                            Following are the available programming languages <br>
                            Start learning today
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <?php
            $con = mysqli_connect('localhost', 'root');


            mysqli_select_db($con, 'project');

            $q = "select * from programming_languages";
            $query = mysqli_query($con, $q);
            while ($res = mysqli_fetch_array($query)) {

            ?>

                <div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 10px;">
                    <div class="latest-news-wrap">
                        <div class="news-img">
                            <img src=<?php echo $res['language_image']; ?> class="img-responsive">
                            <div class="deat">
                                <span><?php echo $res['language_name']; ?></span>
                            </div>
                        </div>

                        <div class="news-content">
                            <p>
                                <?php echo $res['language_description']; ?>
                            </p><br>
                            <a href="https://www.geeksforgeeks.org/<?php echo $res['language_name'] ?>" target="_blank">Start Reading...</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <!---footer Section Start	----->
    <footer>
        <div class="footer-container">

            <div class="topSection">
                <div class="about-us">
                    <h3>About Us</h3>
                    <hr>
                    <p>an initiative towards changing the way of learning in this mordern era of online education and replicate its positive action to society to replicate them</p>
                    <div class="icons">
                        <i class="fa-brands fa-facebook fa-2x"></i>
                        <i class="fa-brands fa-twitter fa-2x"></i>
                        <i class="fa-brands fa-instagram fa-2x"></i>
                        <i class="fa-brands fa-youtube fa-2x"></i>
                    </div>

                </div>
                <div class="Address">
                    <h3>Address</h3>
                    <hr>
                    <span>
                        <i class="fa-solid fa-location-dot"></i>
                        <p style="display:inline-block ;">Noida,Uttar Pradesh</p>
                    </span>
                    <br>
                    <span>
                        <i class="fa-solid fa-phone"></i>
                        <p style="display:inline-block ;">+91 7088556536</p>
                    </span>
                    <br>
                    <span>
                        <i class="fa-solid fa-envelope"></i>
                        <p style="display:inline-block ;">jse.mail.com</p>
                    </span>
                </div>
            </div>
            <div class="bottomSection">
                <span>Created by INCOGNITOS | @2020 All Rights Reserved</span>
            </div>
        </div>
    </footer>
    
</body>

</html>