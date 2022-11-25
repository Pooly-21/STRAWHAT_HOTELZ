<?php

// ===================================== Setup ======================================= 

    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    session_start();

// ============================== Variables and logic ================================ 

   include_once __DIR__ . "/includes/data.php";
   
?>


<!-- ================================= Web Page =================================== -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
    <title>STRAWHAT_HOTELS</title>
</head>
<body background="./img/alex-perez-ioJBsYQ-pPM-unsplash.jpg">
    
<!-- ================================= navbar =================================== -->
<div class="nav">
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <button type="submit" name="filterOption" value="home">HOME</button>
        </form>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <button type="submit" name="filterOption" value="view_hotels">View_Hotels</button>
        </form>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <button type="submit" name="filterOption" value="hotel_details">Hotel_Details</button>
        </form>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <button type="submit" name="filterOption" value="confirm">ConfirmationZ</button>
        </form>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <button type="submit" name="filterOption" value="profile">Profile</button>
        </form>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <button type="submit" name="filterOption" value="sign_up">Sign_Up</button>
        </form>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <button type="submit" name="filterOption" value="login">Login</button>
        </form>
</div>

<!-- ================================= includes into navbar =================================== -->
    <?php
        if ( isset( $_GET['filterOption'] ) ) {
            
            switch ($_GET['filterOption']) {
                case 'home':
                    include_once __DIR__ . "/template/home.php";
                    break;
                case 'view_hotels':
                    include_once __DIR__ . "/template/commerce.php";
                    break;

                case 'Hotel_Details':
                    include_once __DIR__ . "/template/Hotel_Details.php";
                    break;

                case 'confirm':
                    include_once __DIR__ . "/template/Confirmationz.php";
                    break;

                case 'profile':
                    include_once __DIR__ . "/template/profile.php";
                    break;   

                case 'sign_up':
                    include_once __DIR__ . "/template/Sign_up.php";
                    break;

                case 'login':
                    include_once __DIR__ . "/template/login.php";

                default:
                    # code...
                    break;
            }
        }
    ?>


</body>
</html>