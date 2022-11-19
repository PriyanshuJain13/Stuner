<?php
session_start();
if(!isset($_SESSION['loggedin'])  || $_SESSION['loggedin'] !== true)
{
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header -->
    <header id="header">
        <a href="index.php"> <img id="logo" src="images/jiitlogo-removebg-preview.png" alt=""></a>
        <div id="dropdown">
            <button><i class="fa-regular fa-user"></i>Hi,<?php echo $_SESSION['username'] ?><i class="fa-solid fa-angle-down"></i></button> 
            <div class="drop-content">
                <a href="profile.php">Profile</a>
                <a href="logout.php">sign-out</a>    
            </div>
        </div>
    </header>

    <!-- body  -->
    <div class="profile-body">
        <div class="left-pane">
            <div class="profile-pic">
                <img src="" >
            </div>
        </div>
        <div class="right-pane">

        </div>
    </div>
    
</body>

</html>