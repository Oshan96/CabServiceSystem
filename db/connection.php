<?php
/*

Creates a connection object to the mysql database
To change database details please change the '/db/dbconfig.json' file accordingly

*/
$data_array = json_decode(file_get_contents('./dbconfig.json'), true);

$connection = new mysqli($data_array['server'],$data_array['username'],$data_array['password'],$data_array['db']);

if($connection->connect_error) {
    die('Connection failed! '.$connection->connect_error);
}