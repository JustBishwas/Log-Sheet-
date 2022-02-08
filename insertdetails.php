<!DOCTYPE html>
<html>
<head>
	<title>Insert customer details</title>
	<?php
	include 'includes/bootstrap.php'
	?>
</head>
<style type="text/css">
	h1{
		text-align: center;
	}
</style>
<body>
	<?php
		require_once 'config/dbconn.php';
	?>		
	<h1>Enter customer details</h1>
	<div class="container">
<form method="POST" action="config/insert_in_db.php">
	  <div class="form-group">
    <label for="exampleInputEmail1">Room no</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="room" value="<?php echo $room; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstname" value="<?php echo $firstname; ?>">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Last name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lastname" value="<?php echo $lastname; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mobile no</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="mobile" value="<?php echo $mobile; ?>">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Checked in date</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="checkedin" value="<?php echo $checkedin; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Reocrd in database</button>
</form>
</div>
</body>
</html>