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
    <title>Video - Recommended</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="video.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header -->
    <header id="header">
        <a href="index.php"> <img id="logo" src="images/logo.png" alt=""></a>
        <nav class="navbar">
            <ul style="padding-top: 2rem;" class="nav-ul">
                <li><a href="index.php">Home</a></li>
                <li><a href="#contact">Services</a></li>
                <li><a href="#about">About</a></li>
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

    <h1 style="text-align: center;">Here are your recommended videos</h1>
    <div class="videos">
        <iframe id="player" type="text/html" width="640" height="390" src="http://www.youtube.com/embed/M7lc1UVf-VE?enablejsapi=1&origin=http://example.com" frameborder="0"></iframe>
    </div>

</body>

</html>