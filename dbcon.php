<?php
$conn = new mysqli('localhost','root','','vueuser');
if ($conn->connect_error) {
    die('Error : ('. $conn->connect_errno .') '. $conn->connect_error);
}
?>