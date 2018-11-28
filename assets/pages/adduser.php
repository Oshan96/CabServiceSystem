<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="../css/basic-style.css">
    <link rel="stylesheet" href="../css/adminNew.css">
  <link rel="stylesheet" href="../css/adduser.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>

  <!-- Left Side -->
    <div id="left">

      <div class="left-header">
        <div id="toggle-icon">
          <i class="fa fa-align-justify"></i>
        </div>

        <div class="left-header-title">
          <a href="../../view/adminNew.php"><h1>Admin Panel</h1></a>
        </div>
      </div> <!-- End Left Header -->

      <div class="user">
        <img src="../images/admin.png" alt="admin profile" class="user-img">
        <p>Admin Name</p>
      </div>

      <div class="left-contents-large">
          <a href="#" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Add User</p></a>
          <a href="./removeuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Remove User</p></a>
          <a href="./updateuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Update User</p></a>
          <a href="./registereduser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Registered User</p></a>
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
        <img src="../images/admin.png" alt="admin profile" class="user-img-small">
      </div>

      <div class="left-contents-large">

          <a href="#" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
          <a href="./removeuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
          <a href="./updateuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
          <a href="./registereduser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
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

      <div class="add_user">
        <div class="add_user_title">
            <h1>Add User</h1>
        </div>

        <div class="add_user_form">
            <form action="#" method="post">

                <div class="form-element">
                  <div><label for="name">User Name:</label></div>
                  <div><input type="text" id="user_name" name="user_name"></div>
                </div>

                <div class="form-element">
                  <div><label for="full_name">Full Name:</label></div>
                  <div><input type="text" id="full_name" name="full_name"></div>
                </div>

                <div class="form-element">
                  <div><label for="nic">NIC:</label></div>
                  <div><input type="text" id="nic" name="nic"></div>
                </div>

                <div class="form-element">
                  <div><label for="dob">D.O.B:</label></div>
                  <div><input type="date" id="dob" name="dob"></div>
                </div>

                <button type="submit" name="button" class="button-bg form-btn">Add User</button>
              </form>
          </div>


      </div>

    </div>


  <script src="../js/adminNew.js"></script>
  </body>
</html>
