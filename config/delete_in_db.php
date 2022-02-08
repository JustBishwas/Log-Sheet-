<?php
include 'dbconn.php'
?>
<?php
include 'insert_in_db.php'
?>
<?php
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$conn->query("DELETE FROM customers WHERE id=$id") or die($conn->error());
}

$_SESSION['message'] = "Record has been deleted";
$_SESSION['msg_type'] = "danger";

header("Location: ../customerdetails.php");

?>