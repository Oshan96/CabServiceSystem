<?php
session_start();
require './../db/connection.php';       //get the mysql connection (can be used as $connection)

// $username = $_POST['username'];
// $password = $_POST['password'];

// $query = "SELECT user_role FROM users";
// $result = $connection->query($query);

// if($result) {
// 	$data = $result->fetch_assoc()['user_role'];
// 	$_SESSION['user_role'] = $data;
//     echo $data;
// } else {
//     echo "";
// }

$vehiType=$_POST['vehiType'];
$passenger_count=$_POST['passenger-count'];
$from=$_POST['time-from'];
$to=$_POST['time-to'];
// $query = "SELECT * FROM vehicle WHERE vehicle_type='$vehiType'";
$query = "SELECT * FROM vehicle WHERE vehicle_type='vehiType' AND no_of_passengers>='$passenger_count' AND vehicle_no NOT IN (SELECT vehicle_no FROM booking_details WHERE". 
" ('$from' NOT BETWEEN booking_date AND return_date) AND ('$to' NOT BETWEEN booking_date AND return_date))";
$result = $connection->query($query);
// echo($connection->error);
// die;

// var_dump($result);
// die;

echo '[';
while ($row = $result->fetch_assoc()) {
    echo json_encode($row);
}
echo ']';



