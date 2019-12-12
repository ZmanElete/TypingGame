<?php
$servername = "localhost";
$username = "id10698781_zach";
$password = "98zbxdvfth13";
$dbname = "id10698781_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Connection Failed";
    die("Connection failed: " . $conn->connect_error);
} 
else
{
    //echo "Connection Success";
}
?>