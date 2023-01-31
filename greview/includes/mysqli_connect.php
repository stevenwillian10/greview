<?php


DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'greview');

//make connection
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect to MySQL:' . mysqli_connect_error());

function query($query){
    global $conn;
    $result = mysqli_query($dbc, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

//set encoding
mysqli_set_charset($dbc, 'utf-8');
