<?php
include_once 'dbconn.php';

$room = $_POST['room'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$checkedin = $_POST['checkedin'];

$insertsql = "INSERT INTO customers (room, firstname, lastname, mobile, checkedin) VALUES ('$room', '$firstname', '$lastname', '$mobile', '$checkedin');";
mysqli_query($conn, $insertsql);

$_SESSION['message'] = "Record has been saved";
$_SESSION['msg_type'] = "success";

header("Location: ../customerdetails.php");

?>