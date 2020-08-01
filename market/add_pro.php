<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>Untitled Document</title>
</head>

<body style="background-color:#ededed; font-size:18px;">
<?php include("navbar.php"); ?>


<!------->
<div class="container" style="background-color:#fff;">
	<h1 style="text-align:center;"><p>เพิ่มข้อมูลสินค้า</p></h1><hr>
    
<form action="" method="get" class="form-horizontal">

	<div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">ชื่อสินค้า</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input name="" type="text" class="form-control" placeholder="ป้อนชื่อสินค้า">
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">ราคา</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input name="" type="text" class="form-control" placeholder="ป้อนราคาสินค้า">
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">รายละเอียด</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input name="" type="text" class="form-control" placeholder="ป้อนรายละเอียดสินค้า">
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">จำนวนสินค้า</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input name="" type="number" class="form-control" min="1" max="50" value="1">
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">รูปสินค้า</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input name="filetoupload" type="file">
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <button type="button" name="button" class="btn btn-success col-sm-4">ยืนยัน</button>
    <button type="button" name="button" class="btn btn-danger col-sm-offset-1 col-sm-4">ยกเลิก</button>
        </div>
    </div>
    
</form>
</div><br><br>
<?php include("footer2.php"); ?>
</body>
</html>