<?php
session_start();
require './../db/connection.php';       //get the mysql connection (can be used as $connection)

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT user_role FROM users WHERE username='$username' AND pass='$password'";
$result = $connection->query($query);

if($result) {
	$data = $result->fetch_assoc()['user_role'];
	$_SESSION['user_role'] = $data;
    echo $data;
} else {
    echo "";
}