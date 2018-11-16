<?php
require './../db/connection.php';       //get the mysql connection (can be used as $connection)

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT user_role FROM users WHERE username='$username' AND pass='$password'";
$result = $connection->query($query);

if($result) {
    echo $result->fetch_assoc()['user_role'];
} else {
    echo "";
}

