<?php
session_start();

if(!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 'admin') {
  echo "
      <script>
          window.location = './login.php';
      </script>
      ";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="./../assets/css/basic-style.css">
    <link rel="stylesheet" href="./../assets/css/adminNew.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <style>
    a{
      text-decoration: none;
    }
  </style>

  <body>

  <!-- Left Side -->
    <div id="left">

      <div class="left-header">
        <div id="toggle-icon">
          <i class="fa fa-align-justify"></i>
        </div>

        <div class="left-header-title">
          <a href="#"><h1>Admin Panel</h1></a>
        </div>
      </div> <!-- End Left Header -->

      <div class="user">
        <img src="./../assets/images/admin.png" alt="admin profile" class="user-img">
        <p>Admin Name</p>
      </div>

      <div class="left-contents-large">
          <a href="../assets/pages/adduser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Add User</p></a>
          <a href="../assets/pages/removeuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Remove User</p></a>
          <a href="../assets/pages/updateuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Update User</p></a>
          <a href="../assets/pages/registereduser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Registered User</p></a>
      </div>
    </div>

  <!-- Toggle Clicked View -->
    <div id="left-toggle">

      <div class="left-header">
        <div id="togglesmall">
          <i class="fa fa-align-justify"></i>
        </div>
      </div> <!-- End Left Header -->

      <div class="user-small">
        <img src="./../assets/images/admin.png" alt="admin profile" class="user-img-small">
      </div>

      <div class="left-contents-large">

          <a href="../assets/pages/adduser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
          <a href="../assets/pages/removeuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
          <a href="../assets/pages/updateuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
          <a href="../assets/pages/registereduser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
      </div>

    </div>
       <!-- End Left-->




    <!-- Right Side -->
    <div id="right">
      <div id="right-header">
        <ul class="nav-items">
          <li style="padding:0px 15px;"><input type="search" name="" placeholder="search"></li>
          <li><i class="fa fa-bell"></i></li>
          <li><i class="fa fa-user-circle"></i></li>
        </ul>
      </div>

      <div class="dashboard_content">
        <div class="dashboard_content_box">
          <iframe src="../assets/pages/adduser.php" scrolling="no"></iframe>
        </div>
        <div class="dashboard_content_box">
          <iframe src="../assets/pages/removeuser.php" scrolling="no"></iframe>
        </div>
        <div class="dashboard_content_box">
          <iframe src="../assets/pages/registereduser.php" scrolling="no"></iframe>
        </div>
        <div class="dashboard_content_box">
          <iframe src="../assets/pages/updateuser.php" scrolling="no"></iframe>
        </div>
      </div>
    </div>


  <script src="./../assets/js/adminNew.js"></script>
  </body>
</html>
