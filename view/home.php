<?php
session_start();

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Index</title>
        <link rel="stylesheet" type="text/css" href="./../assets/css/basic-style.css">
        <link rel="stylesheet" type="text/css" href="./../assets/css/header.css">
        <script type="text/javascript" src="./../assets/js/navigationevent.js"></script>
    </head>

    <body>

        <div class="row-container-flex" id="banner">
            <div class="row-flex" id="navbar">
                <div class="col-12" id="button-container">
                    <a class="button-bg" id="btnLogout" style="padding-left:20px; display: none;" onclick="logout()">Logout</a>
                    <a class="button-bg" id="btnLogin" style="padding-left:20px;" onclick="login()">Log in</a>
                    <a class="button-bg">About</a>
                    <a class="button-bg">Services</a>
                    <a class="button-bg">Title 3</a>
                    <a class="button-bg">Title 4</a>
                    <a class="button-bg">Title 5</a>
                    <a class="button-bg">Contact Us</a>
                </div>
            </div>
        </div>


        <div class="row-container-flex">
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
        </div>
        

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
