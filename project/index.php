<?php
session_start();
if (!isset($_SESSION['loggedin'])  || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stuner - STUDENT CORNER</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- scrollbar  -->
    <div id="progressbar"></div>
    <div id="scrollPath"></div>
    <!-- preloader -->
    <div class="preloader">
        <div class="preloader-icon">
            <h2><img src="images/loader.png" alt="image"></h2>
        </div>
    </div>
    <!-- header -->
    <header id="header">
        <a href="index.php"> <img id="logo" src="images/logo.png" alt=""></a>
        <nav class="navbar">
            <ul style="padding-top: 2rem;" class="nav-ul">
                <li><a href="index.php">Home</a></li>
                <li><a href="#myservice_section">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#footer">Contact</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
        <div id="dropdown">
            <button><i class="fa-regular fa-user"></i>Hi,<?php echo $_SESSION['username'] ?><i class="fa-solid fa-angle-down"></i></button>
            <div class="drop-content">
                <a href="profile.php">Profile</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </header>

    <!-- slideshow container -->
    <div class="slide-container">
        <div class="mySlides fade">
            <img src="images/banner3.jpeg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="images/banner1.jpg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="images/banner2.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="images/slide3.jpeg" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <hr>
    <!-- our services section  -->
    <br><br>
    <div class="container-fluid servicebody" id="myservice_section" >
        <div class="service-are" id="service">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2><b>SERVICES</b></h2>
                        <p>
                            These are the services we provide and it will help you combine your resources hence saving time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <h3><a href="programming.php">PROGRAMMING</a></h3>
                        <p>
                            Here you will find all the lecture tutorials related to programming languages
                            like JAVA,PYTHON,ANDROID etc
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <h3><a href="video.php">VIDEO TUTORIALS</a></h3>
                        <p>
                            Here you will find all the videos tutorials related to programming languages
                            like JAVA,PYTHON,ANDROID etc
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="service-wrap text-center">
                        <div class="service-icon">
                        <i class="fa-sharp fa-solid fa-dumbbell"></i>
                        </div>
                        <h3><a href="online_quize/quizhome.php">EXERCISE</a></h3> <!--  exercise/exercise.php -->
                        <p>
                            Here you will find problem programs for practice and their implementation also which will improve your coding skill
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- faq section  -->
    <div class="faqs-container">
        <h2>Frequently Asked Questions</h2>
        <div class="questions-container">
            <div class="content-container">
                <div class="faq-header">
                    <h3>How do I purchase a membership?</h3>
                    <span class="open active">+</span>
                    <span class="close">-</span>
                </div>

                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eveniet, veniam!
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                        voluptatem voluptatibus temporibus nemo amet tempore aperiam
                        pariatur laboriosam qui vel!
                    </p>
                </div>
            </div>

            <div class="content-container">
                <div class="faq-header">
                    <h3>Which platforms are supported?</h3>
                    <span class="open active">+</span>
                    <span class="close">-</span>
                </div>

                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                        voluptatem voluptatibus temporibus nemo amet tempore aperiam
                        pariatur laboriosam qui vel!
                    </p>
                </div>
            </div>

            <div class="content-container">
                <div class="faq-header">
                    <h3>How to cancel the subscription?</h3>
                    <span class="open active">+</span>
                    <span class="close">-</span>
                </div>

                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eveniet, veniam!
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                        voluptatem voluptatibus temporibus nemo amet tempore aperiam
                        pariatur laboriosam qui vel!
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <footer>
        <div class="footer-container" id="footer">

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
                        <p style="display:inline-block ;">jse@mail.com</p>
                    </span>
                </div>
            </div>
            <div class="bottomSection">
                <span>Created by INCOGNITOS | @2020 All Rights Reserved</span>
            </div>
        </div>
    </footer>

    <script src="js/faq.js"></script>
    <script src="js/index.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/scroll.js"></script>
</body>

</html>