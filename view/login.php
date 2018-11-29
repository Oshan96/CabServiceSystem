<?php
session_start();
if(isset($_SESSION['user_role'])) {
    switch($_SESSION['user_role']) {
        case 'admin':{
			echo "<script>
						window.location = './adminNew.html';
						</script>";
		} break;
		default : {
			echo "<script>
						window.location = './home.php';
						</script>";
		}
    }
}
?>
<!--DOCTYPE HTML-->
<html>
    <head>
        <title>Login</title>
        <link type="text/css" rel="stylesheet" href="./../assets/css/basic-style.css">
        <link type="text/css" rel="stylesheet" href="./../assets/css/login-style.css">

        <script type="text/javascript" src="./../assets/js/navigationevent.js"></script>
    </head>

    <body>

        <div class="row-container-flex image-container">
            <div class="row-flex" style="padding-bottom:0;">
                <div class="col-5 login" id="first">
                    <div class="row-container-flex" id="content-container" style="background-color: #2d3339;">
                        <div class="row-flex">
                            <div class="col-12 title">
                                <h1>Smart Cabs</h1>
                            </div>
                        </div>
            
                        <div class="row-flex">
                            <div class="col-12">
                                    <input id="username" type="text" placeholder="Username">
                            </div>
                        </div>
            
                        <div class="row-flex">
                            <div class="col-12">
                                    <input id="password" type="password" placeholder="Password">
                            </div>
                        </div>
            
                        <div class="row-flex">
                            <div class="col-12 align-right">
                                <button class="button-bg" id="btnLogin" onclick="verify()">Login</button>
                            </div>
                        </div>

                        <div class="row-flex">
                            <div class="col-12 align-right">
                                <a alt="continue as guest" onclick="guestLogin()" class="link">continue as guest</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-7" id="second"></div>
            </div>
           
        </div>
 

        <script type="text/javascript">
            function verify() {
                var username = document.getElementById('username').value;
                var password = document.getElementById('password').value;

                if(username == "" || password == "") {
                    console.log("username or password is empty");
                    document.getElementById('username').innerHTML = "";
                    document.getElementById('password').innerHTML = "";
                } else {
                    // alert("ready to pass data");
                    verifyLogin(username,password);
                }
            }

            function verifyLogin(username, password) {
                var request = new XMLHttpRequest();
                request.onreadystatechange = function() {
                    if(request.readyState == 4 && request.status == 200) {
                        //check whether the username,pass are correct
                        if(request.responseText != "") {
                            // alert(reques.responseText)
                            //redirect to relevant page
                            switch(request.responseText) {
                                case 'admin' :{
                                    window.location = './adminNew.php';
                                } break;   //need to set session
                                default : {
                                    window.location = './home.php';
                                } 
                            }
                        }else {
                            console.log('user does not exist or wrong credentials');
                            document.getElementById('username').innerHTML = "";
                            document.getElementById('password').innerHTML = "";
                            // alert(request.responseText)
                        }
                    }
                }

                request.open('POST','./../controller/logincontroller.php',true);
                request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                request.send('username='+username+"&password="+password);
            }

            function guestLogin() {
                <?php
                $_SESSION['user_role'] = 'guest';
                ?>

                window.location = './home.php';
            }
        </script>



    </body>







</html>