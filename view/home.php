<?php
session_start();
require '../db/connection.php'; 

$queryVehicleTypes='SELECT vehicle_type, MAX(no_of_passengers) FROM vehicle GROUP BY vehicle_type';
$resultVehicleTypes=$connection->query($queryVehicleTypes);
$dataVehicleTypes=$resultVehicleTypes->fetch_all();
// var_dump($dataVehicleTypes);


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

        <section class="row-container-flex img-section3 parralax" id="section3">
            <div class="content" style="background-color:rgba(0,0,0,0.5)">
                <form action="../controller/homecontroller.php" method="post">
                    <div class="row-flex">
                        <div class="col-6">
                            <div class="content right" >
                                Vehicle Type
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="content">
                                <select name="vehiType" id="vehiType">
                                    <option value="NULL" disabled selected>Choose a type</option>
                                    
                                <?php
                                    foreach ($dataVehicleTypes as $data) {
                                ?>
                                    <option value="<?=$data[0]?>"><?=$data[0]?></option>
                                <?php                                    
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row-flex">
                        <div class="col-6">
                            <div class="content right">
                                Max Passenger Count
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="content">
                                <input type="number" name="passenger-count" id="passenger-count" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row-flex">
                        <div class="col-6">
                            <div class="content right">
                                Reservation From
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="content">
                                <input type="date" name="time-from" id="time-from">
                            </div>
                        </div>
                    </div>

                    <div class="row-flex">
                        <div class="col-6">
                            <div class="content right">
                                Reservation Until
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="content">
                            <input type="date" name="time-to" id="time-to">
                            </div>
                        </div>
                    </div>

                    <div class="row-flex content center">
                        <input type="submit" value="Search" id="search">
                        <input type="reset" value="Reset" id="reset">
                    </div>
                </form>
            </div>

        </section>
        

        <script>
            var passengers={
                <?php
                    foreach ($dataVehicleTypes as $data) {
                ?>
                    "<?=$data[0]?>":<?=$data[1]?>,
                <?php                                    
                    }
                ?>
            }

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

            document.getElementById("vehiType").addEventListener("input",function(event) {
                document.getElementById("passenger-count").outerHTML='<input type="number" name="passenger-count" id="passenger-count" min="1" max="'+passengers[event.target.value]+'" value="'+passengers[event.target.value]+'">';
            });

            //this is the ajax part

            document.getElementById("search").addEventListener("click",function(event) {
                event.preventDefault();

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(this.responseText);
                    }
                };
                xmlhttp.open("POST", "./../controller/homeController.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("vehiType="+document.getElementById("vehiType").value+
                "&passenger-count="+document.getElementById("passenger-count").value+
                "&time-from="+document.getElementById("time-from").value+
                "&time-to="+document.getElementById("time-to").value);

                document.getElementById("passenger-count").outerHTML='<input type="number" name="passenger-count" id="passenger-count" min="1" max="'+passengers[event.target.value]+'" value="'+passengers[event.target.value]+'">';
            });


        </script>

    </body>

</html>
