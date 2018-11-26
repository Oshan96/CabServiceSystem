<?php
session_start();

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Index</title>
        <link rel="stylesheet" type="text/css" href="./../assets/css/basic-style.css">
        <link rel="stylesheet" type="text/css" href="./../assets/css/header.css">
        <link rel="stylesheet" type="text/css" href="./../assets/css/home.css">
        <script type="text/javascript" src="./../assets/js/navigationevent.js"></script>
        <script type="text/javascript" src="./../assets/js/homecontroller.js"></script>
    </head>

    <body>

        <div class="row-container-flex parralax" id="banner">
            <div class="row-flex" id="navbar">
                <div class="col-1">
                    <a href="#banner">
                        <div class="nav-logo" id="nav_logo"></div>
                    </a>
                </div>
                <div class="col-11" id="button-container">
                    <a class="button-bg" id="btnLogout" style="padding-left:20px; display: none;" onclick="logout()">Logout</a>
                    <a class="button-bg" id="btnLogin" style="padding-left:20px;" onclick="login()">Log in</a>
                    <a class="button-bg">Help</a>
                    <a class="button-bg">Contact Us</a>
                    <a class="button-bg">Title 3</a>
                    <a class="button-bg">Title 4</a>
                    <a class="button-bg" href="#section3" id="sec3">Reserve Vehicle</a>
                    <a class="button-bg" href="#section2" id="sec2">About Us</a>
                </div>
            </div>

            <div class="row-flex" id="typing-row">
                <div class="col-12">
                    <p id="typing"></p>
                </div>
            </div>
        </div>


        <section class="row-container-flex parralax img-section2" id="section2">
            <div class="row-flex content">
            
                <div class="col-12 heading">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <p>
                    The pioneer in shaping the cab/taxi service industry in Sri Lanka, Smart Cabs aims to be Sri Lanka’s Number one cab/taxi service in near future. Thus providing complete bouquet of end to end transportation solutions through its fleet of many vehicles varying in a wide range of luxury to semi luxury.
                    </p>
                </div>

                <div class="col-12 heading">
                    <h2>Our Vision</h2>
                </div>
                <div class="col-12">
                    <p>
                    To be the preferred cab/taxi service provider in Sri Lanka and immediate suburbs among the cab users and within the corporate client by providing excellent, quality and on time service by closely monitoring the day to day operations, immediately addressing client complaints and maintaining high standard of customer orientation.
                    </p>
                </div>

                <div class="col-12 heading">
                    <h2>Our Mission</h2>
                </div>
                <div class="col-12">
                    <p>
                    Whilst our well maintained variety of fleet and highly professional chauffeurs ensuring the comfort & safety of our rides, our valued customers matter most to us. Smart Cabs has set high standards in order to achieve our vision by enduring strict regulations and policies to ensure discipline and honesty among our staff members. All our chauffeurs are screened through a thorough selection process with necessary background checks. Our hard working employees are the key to our success and that’s why we set the foundation by providing recurrent training sessions from all our chauffeurs to Contact Centre staff.

                    We further identify the changing market demands and requirements of our valued customer thus provide enhanced, flexible and regularly upgraded transportation solutions.
                    </p>
                </div>
                
            </div>
           
        </section>

        <section class="img-section3 parralax" id="section3">

        </section>
        

        <script>

            window.onload = function() {
                <?php
                if(isset($_SESSION['user_role'])) {
                    if(!empty($_SESSION['user_role']) && $_SESSION['user_role'] != 'guest') {
                    
                        ?>
                        document.getElementById("btnLogout").style.display = "inline-block";
                        document.getElementById("btnLogin").style.display = "none";
                        <?php       
                    }
                }
                ?>

                typewrite();
            }

            function logout() {
                <?php
                session_unset();
                session_destroy();
                ?>
                window.location = "./home.php";
            }

            function login() {
                <?php
                session_unset();
                ?>
                window.location = "./login.php";
            }

            


        </script>




    </body>







</html>
