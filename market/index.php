<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
body{
	margin:0;
	}
</style>
<title>shopping</title>
</head>

<body style="background-color:#ededed; font-size:18px;">
<!----------------------------------navbar---------------------------->
<?php include("navbar.php"); ?>



<!----------------------------------search---------------------------->
<?php include("search.php"); ?>



<!----------------------------------slide---------------------------->
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">

	<div class="item active">
    <img src="image/chicago.jpg">
    </div>
    
    <div class="item">
    <img src="image/la.jpg">
    </div>

	<div class="item">
    <img src="image/ny.jpg">
    </div>
</div>

	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    
    <a class="right carousel-control" href="#myCarousel" data-slide="nexr">
    <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
</div>
<br>
<br>


<!----------------------------------สินค้าแนะนำ---------------------------->
<div class="container" style="background-color:#fff;">
<h2>สินค้าแนะนำ</h2>
<hr>
<div class="row">
<div class="col-sm-3">
<div class="thumbnail" style="padding:15px;">
    <img src="image/product/img01.png" class="img-responsive">
    <br>
    <div class="row">
    	<div class="col-sm-12">ชื่อสินต้า</div>
    </div>
    <div class="row">
    	<div class="col-sm-6">ราคา</div>
        <div class="col-sm-6">----</div>
    </div>
    <center>
    	<button type="submit" class="btn btn-danger">สั่งซื้อสินค้า</button>
        <button type="submit" class="btn btn-primary">รายละเอียดสินค้า</button>
    </center>
</div>
</div>

</div>
</div>
<br>
<br>



<!----------------------------------หมวดหมู่---------------------------->
<div class="container" style="background-color:#fff;" >
<h2>หมวดหมู่ : 
		<a href="#category" class="btn btn-primary btn-lg">เสื้อผ้า</a> 
		<a href="#category" class="btn btn-primary btn-lg">กางเกง</a> 
		<a href="#category" class="btn btn-primary btn-lg">รองเท้า</a> 
        <a href="#category" class="btn btn-primary btn-lg">กระเป๋า</a></h2>
<hr>
<div class="row">
<div class="col-md-4">
<div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="image/product/img02.png" alt="Nature" style="width:100%" class="img-rounded img-responsive">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
</div>
</div>

<div class="col-md-4">
<div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="image/product/img02.png" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
</div>
</div>

<div class="col-md-4">
<div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="image/product/img02.png" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
</div>
</div>


</div>
</div>
</div>
<br><br>
<!----------------------------------footer---------------------------->
<div style="bottom:0;">
<?php include("footer2.php"); ?>
</div>
</body>
</html>