<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-sclae=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<?php include("navbar.php"); ?>

<div class="container">
	<div >
    <h2><center>แก้ไขโปรไฟล์</center></h2><hr>
    </div>
<form action="" method="get" class="form-horizontal">

	<div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">ชื่อผู้ใช้</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input name="" type="text" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">รหัสผ่าน</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input name="" type="password" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">ชื่อ</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input name="" type="text" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">นามสกุล</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input name="" type="text" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">อีเมล</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input name="" type="text" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">เบอร์โทร</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input name="" type="text" class="form-control">
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">ที่อยู่</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <textarea name="" cols="" rows="" class="form-control"></textarea>
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">คำถามกันลืม</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <select class="form-control" name="">
            <option value="0" selected>เลือกคำถามกันลืม</option>
            <option value="1">เลือกคำถามกันลืม</option>
            <option value="2">เลือกคำถามกันลืม</option>
          </select>
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <label class="">คำตอบ</label>
        </div>
        <div class="col-sm-offset-4 col-sm-4">
        <input type="text" class="form-control" id="" placeholder=""><br />
        </div>
    </div>
    
    <div class="form-group">
    	<div class="col-sm-offset-4 col-sm-5">
        <button type="button" name="button" class="btn btn-success col-sm-4">ยืนยัน</button>
    <button type="button" name="button" class="btn btn-danger col-sm-offset-1 col-sm-4">ยกเลิก</button>
        </div>
    </div>
    
</form>
</div>

<br><br>
<?php include("footer2.php"); ?>
</body>
</html>