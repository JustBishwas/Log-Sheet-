<?php
include 'includes/bootstrap.php'
?>

<style type="text/css">
.carousel-item {
  height: 400px;
}

.carousel-item img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    min-height: 400px;
}
.btn {
  border: 1px solid white;
  background-color: white;
  color: black;
  padding: 10px 50px;
  font-size: 16px;
  cursor: pointer;
}

button
{
	margin: 10px 2%;

}
.success {
  border-color: white;
  color: white;
  background-color:rgba(0,0,0,0.2);
}
.info {
  border-color: white;
  color: white;
  background-color:rgba(0,0,0,0.2);
}
.carousel-caption
{
	margin-bottom: 5%;
}
a{
  text-decoration: none;
  list-style: none;
  color: white;
}
a:hover{
  list-style: none;
  text-decoration: none;
  background-color: whitesmoke;
  color: black;
}
h3 {
  letter-spacing: 3px;
  text-align: center;
}
h1{
  font-size: 26px;
  text-align: center;
  font-weight: 20px;
  margin-top: 4%;
}
h2{
  font-size: 20px;
}
.grande h1{
  font-size: 35px;
}
</style>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/7.jpg" class="d-block w-100" alt="images">
      <div class="carousel-caption d-none d-md-block">
        <h1>Welcome to Grande Hotel customer registration entry sheet</h1>
        <h2>Click the follow to do respective task</h2>
        <h4>For Staffs only</h4>
        <button class="btn info"><a href="insertdetails.php">ADD RECORD</a></button><button class="btn success"><a href="customerdetails.php">VIEW RECORDS</a></button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/8.jpg" class="d-block w-100" alt="images">
      <div class="carousel-caption d-none d-md-block">
        <h1>Welcome to Grande Hotel customer registration entry sheet</h1>
        <h2>Click the follow to do respective task</h2>
        <h4>For Staffs only</h4>
          <button class="btn info"><a href="insertdetails.php">ADD RECORD</a></button><button class="btn success"><a href="customerdetails.php">VIEW RECORDS</a></button>
      </div>
    </div>
        <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100" alt="images">
      <div class="carousel-caption d-none d-md-block">
        <h1>Welcome to Grande Hotel customer registration entry sheet</h1>
        <h2>Click the follow to do respective task</h2>
        <h4>For Staffs only</h4>
         <button class="btn info"><a href="insertdetails.php">ADD RECORD</a></button><button class="btn success"><a href="customerdetails.php">VIEW RECORDS</a></button>
      </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
  <span class="grande"><h1>GRANDE HOTEL</h1></span>
  <h3><i>Friendly and hardworking staff for the best customer satisfaction</i></h3>
</div>
