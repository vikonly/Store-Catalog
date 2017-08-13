<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$db_name = "final_1531";

$conn = mysqli_connect($host, 
                       $user, 
                       $pass, 
                       $db_name);

if (!$conn) {
    echo "Not connected!";
}
?>


