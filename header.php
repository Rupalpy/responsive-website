<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinquid</title>

    <style>
        .btn{
            color: black;
            margin: 11px 0px;
            border-color: black;
        }
        h1{
            text-align: center;
        }
        .form{
            font-size: 25px;
        }
        .drinks .drink .image{
            width: 235px;
        }
        .drinks{
            gap: 370px;
        }
    </style>
</head>

<body>
    <nav class="navbar background heightnav-r">
        <ul class="navlist vis-r">
            <div class="logo"><img src="img/black.jpg" alt="logo"></div>
            <li><a href="index.php"> Home </a></li>
            <li><a href="about.php"> About </a></li>
            <?php 
						if(isset($_SESSION['u_id'])){?>
								<li><a href="logout.php">Logout </a></li>
                                <li><a href="cart.php">Cart </a></li>
							<?php }else{ ?>
								<li><a href="login.php">Login </a></li>
								<li><a href="register.php">Register </a></li>
		

							<?php } ?>


            
            <li><a href="contact.php"> Contact Us </a></li>
        </ul>
        
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>