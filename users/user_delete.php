<?php 
session_start();
require '../db.php';

$id=$_GET['id'];

$delete="DELETE FROM users WHERE id='$id'";
mysqli_query($db_connection,$delete);


$_SESSION['delete']='User Delete Successfully!';
header('location:user.php')

?>