<?php 

include 'auth.php';
include 'includes/db.php';
    
$id = $_GET['id'];

$sql = "DELETE FROM `booking` Where booking_id = $id";

$query = mysqli_query($con,$sql);

header('Location: memberindex.php');


?>