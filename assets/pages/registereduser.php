<?php
require './../../db/connection.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="../css/basic-style.css">
    <link rel="stylesheet" href="../css/adminNew.css">
    <link rel="stylesheet" href="../css/registereduser.css">

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
          <a href="./adduser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Add User</p></a>
          <a href="./removeuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Remove User</p></a>
          <a href="./updateuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Update User</p></a>
          <a href="#" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i><p>Registered User</p></a>
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
          <a href="./adduser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
          <a href="./removeuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
          <a href="./updateuser.php" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
          <a href="#" class="left-nav-items button-bg"><i class="fa fa-tachometer"></i></a>
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



        <?php
            // $con=mysqli_connect('localhost','root','') or die(mysqli_error());
            // mysqli_select_db($con, 'cabservice') or die("cannot select DB");

            $sql = "SELECT * FROM customer";
            $result = $connection->query($sql);
        ?>
        <div class="view_user_title">
          <h1>Registerd User</h1>
        </div>
        <div class="view_user">
          <table class="table">
            <th>
              User Name
            </th>
            <th>
              Joined Date
            </th>
            <th>
              Reg Status
            </th>
            <?php
              while ($rowtable = $connection->fetch_array($result, MYSQLI_ASSOC)) {
            ?>
            <tr>
              <td><?php echo $rowtable['username']; ?> <br/></td>
              <td><?php echo $rowtable['joined_date']; ?> <br/></td>
              <td><?php echo $rowtable['reg_status']; ?> <br/></td>
              </tr>
              <?php
              }
              ?>
          </table>
        </div>



  <script src="../js/adminNew.js"></script>
  </body>
</html>
