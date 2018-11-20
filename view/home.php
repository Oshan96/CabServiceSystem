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

        <div class="row-container-flex" id="banner">
            <div class="row-flex" id="navbar">
                <div class="col-1">
                    <a href="#banner">
                        <div class="nav-logo" id="nav_logo"></div>
                    </a>
                </div>
                <div class="col-11" id="button-container">
                    <a class="button-bg" id="btnLogout" style="padding-left:20px; display: none;" onclick="logout()">Logout</a>
                    <a class="button-bg" id="btnLogin" style="padding-left:20px;" onclick="login()">Log in</a>
                    <a class="button-bg">About</a>
                    <a class="button-bg">Services</a>
                    <a class="button-bg">Title 3</a>
                    <a class="button-bg">Title 4</a>
                    <a class="button-bg" href="#section3">Title 5</a>
                    <a class="button-bg" href="#section2">Contact Us</a>
                </div>
            </div>

            <div class="row-flex" id="typing-row">
                <div class="col-12">
                    <p id="typing"></p>
                </div>
            </div>
        </div>


        <section class="row-container-flex parralax img-section2" id="section2">
            <div class="row-flex">
                <div class="col-3">
    
                </div>
                <div class="col-4"></div>
                <div class="col-2"></div>
                <div class="col-2">
                        <button class="button-bg">Hello There</button>
                </div>
                <div class="col-1"></div>
                <!-- <div class="col-2" style="background-color:slateblue;"></div> -->
            </div>
            <div class="row-flex">
                <div class="col-4">
    
                </div>
                <div class="col-2"></div>
                <div class="col-1"></div>
                <div class="col-3">
                        <p>Hello There</p>
                </div>
                <!-- <div class="col-2"></div> -->
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
