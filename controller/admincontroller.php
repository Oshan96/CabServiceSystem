<?php

require './../db/connection.php';

$function = $_POST['function'];

switch($function) {
    case 'add' : {
        
        if(addUser()) {
            switch($_POST['role']) {
                case 'driver' : addDriver(); break;
                case 'customer' : addCustomer(); break;
            }
            echo true;
        } else {
            echo false;
        }

    } break;

    case 'delete' : {
        echo removeUser();
    } break;

    case 'viewAll' : echo getAllUsers(); break;
}

$connection->close();


/////////////////// Functions /////////////////////

function addUser() {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $address = $_POST['address'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $nic = $_POST['nic'];
    $role = $_POST['role'];

    $query = "INSERT INTO users VALUES('$username','$password','$name','$address','$dob','$nic','$role')";

    return $connection->query($query);

}

function addDriver() {
    $username = $_POST['username'];
    $license_no = $_POST['license_no'];
    $exp = $_POST['license_exp'];

    //working status is 1 (true) when adding

    $query = "INSERT INTO driver VALUES('$username','$license_no','$exp',1)";

    return $connection->query($query);

}

function addCustomer() {
    $username = $_POST['username'];
    $date = date("Y-m-d");

    //Joined customer's status is 1 (true)
    $query = "INSERT INTO customer VALUES('$username','$date',1)";

    return $connection->query($query);
}

function removeUser() {
    $username = $_POST['username'];

    $query = "DELETE FROM users WHERE username='$username'";

    return $connection->query($query);
}

function getAllUsers() {
    $query = "SELECT * FROM users";

    return $connection->query($query);
}




















?>