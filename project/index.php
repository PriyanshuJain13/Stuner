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
    <title>Stock exchange</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header -->
    <header id="header">
        <a href="index.php"> <img id="logo" src="images/logo.png" alt=""></a>
        <nav class="navbar">
            <ul style="padding-top: 2rem;" class="nav-ul">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Market data</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">Login</a></li>
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

    <!-- slideshow container -->
    <div class="slide-container">
        <div class="mySlides fade">
            <img src="images/slide1.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="images/slide2.jpeg" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="images/slide1.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="images/slide2.jpeg" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>

    <!-- stock list  -->
    <?php
    $url = 'https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=IBM&interval=5min&apikey=demo&datatype=csv';

    $data = file_get_contents($url);
    $row = explode("\n", $data);
    $count = count($row) - 1;

    for ($x = 0; $x < $count; $x++) {
        $day[] = explode(",", $row[$x]);
    }
    // echo "<pre>";
    // print_r($day);
    // echo "</pre>";

    ?>
    <section class="stock-list">

        <!-- form  -->
        <div class="form">
            <form action="">
                <input type="text" placeholder="Enter name of stock" class="insert">
                <input type="submit" value="submit" class="submit">
            </form>
        </div>
        
        <!-- display table  -->
        <div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th><?php echo $day[0][0]?></th>
                        <th><?php echo $day[0][1]?></th>
                        <th><?php echo $day[0][2]?></th>
                        <th><?php echo $day[0][3]?></th>
                        <th><?php echo $day[0][4]?></th>
                        <th><?php echo $day[0][5]?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        for($x = 1;$x < $count;$x++)
                        {
                            $day[] = explode(",",$row[$x]);
                            echo "<tr>";
                            echo"<td>".$x."</td>";
                            echo"<td>".$day[$x][0]."</td>";
                            echo"<td>".$day[$x][1]."</td>";
                            echo"<td>".$day[$x][2]."</td>";
                            echo"<td>".$day[$x][3]."</td>";
                            echo"<td>".$day[$x][4]."</td>";
                            echo"<td>".$day[$x][5]."</td>";
                            echo"</tr>";
                        }
                    ?>
                    <tr>
                </tbody>
            </table>

        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="footer-container">

            <div class="topSection">
                <div class="about-us">
                    <h3>About Us</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, natus facilis hic recusandae dignissimos cumque illo aliquam reiciendis nisi autem?</p>
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
                        <p>Noida,Uttar Pradesh</p>
                    </span>
                    <span>
                        <i class="fa-solid fa-phone"></i>
                        <p>+91 7088556536</p>
                    </span>
                    <span>
                        <i class="fa-solid fa-envelope"></i>
                        <p>jse.mail.com</p>
                    </span>
                </div>
            </div>
            <div class="bottomSection">
                <span>Created by Priyanshu,Anirudh,Shubhangam | @2020 All Rights Reserved</span>
            </div>
        </div>
    </footer>

    <script src="js/index.js"></script>
</body>

</html>