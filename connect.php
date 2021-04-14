<?php
//$host = 'localhost'; 
//$database = 'demis'; 
//$user = 'root'; 
//$password = 'root'; 

//$link = mysqli_connect($host, $user, $password, $database) 
//    or die("Ошибка " . mysqli_error($link));


$mysqli = false;
function connectDB(){
    global $mysqli;
    $mysqli = new mysqli ("localhost", "root", "root", "demis");
    $mysqli->query("SET NAMES 'UTF-8'");
}

function closeDB(){
    global $mysqli;
    $mysqli->close();
}

?>