<?php
// $servername = "sql211.infinityfree.com";
// $username = "if0_38859788";
// $password = "Oli5eN4QNtKf1v3";
// $dbname = "if0_38859788_eventos";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "local_webpage";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


