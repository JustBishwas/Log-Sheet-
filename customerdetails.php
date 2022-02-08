<!DOCTYPE html>
<html>
<head>
	<title>Customer details</title>
</head>
<?php
include 'includes/bootstrap.php'
?>
<?php
	include 'config/dbconn.php'
?>
<?php
$result = $conn->query("SELECT * FROM customers") or die($conn->error);
?>
<body>
	<?php
		if (isset($_SESSION['message'])): 
			?>
			<div class="alert alert-<?=$_SESSION['msg_type']?>">
				<?php
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				?>
			</div> 
		<?php endif ?>
	<div class="container">
<div class="row justify-content-center">
	<table class="table">
		<thead>
			<tr>
				<th>Room no</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Mobile number</th>
				<th>Checked in date</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<?php
			while ($row = $result->fetch_assoc()):
		?>
		<tr>
			<td><?php echo $row['room'];?></td>
			<td><?php echo $row['firstname'];?></td>
			<td><?php echo $row['lastname'];?></td>
			<td><?php echo $row['mobile'];?></td>
			<td><?php echo $row['checkedin'];?></td>
			<td><a href="config/delete_in_db.php?delete=<?php echo $row['id'];?>" 
				class="btn btn-danger">Delete Record</a></td>
		</tr>
	<?php endwhile; ?>
	</table>
</div>
</div>
</body>
</html>