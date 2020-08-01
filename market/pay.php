<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-sclae=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body style="background-color:#ededed; font-size:18px;">
<?php include("navbar.php"); ?>

<div class="container" style="background-color:#fff;">
 	<div ><br>
    <h3><center>ยืนยันการชำระเงิน</center></h3><hr><br>
    </div>
    
     <form action="" method="get" class="form-horizontal" enctype="multipart/form-data">
     
     <div class="form-group">
    <label class="control-label col-sm-4">รหัสใบสั่งซื้อ</label>
    <div class="col-sm-4">
    	<label class="form-control">kanokwan</label>
    </div>
    </div>
    
    <div class="form-group">
    <label class="control-label col-sm-4">จำนวนเงินที่ต้องชำระ</label>
    <div class="col-sm-4">
    	<label class="form-control" style="color:#F00;">7888</label>
    </div>
    </div>
    
    <div class="form-group">
    <label class="control-label col-sm-4">แนบเอกสารชำระเงิน/สลิบ</label>
    <div class="col-sm-4">
    	<input name="" type="file" >
    	<!-- <input name="" type="" class="form-control btn btn-primary">-->
    </div>
    </div>
    
    <div class="form-group">
    <label class="control-label col-sm-4">โอนผ่านบัญชี</label>
    <div class="col-sm-4">
    	<select name="select" class="form-control">
        <option value="0" selected>เลือกบัญชีธนาคาร</option>
        </select>
    </div>
    </div>
    
    <div class="form-group">
    <label class="control-label col-sm-4">เลข 4 ตัวท้ายบัญชี</label>
    <div class="col-sm-4">
    	<input name="" type="text" class="form-control" maxlength="4">
    </div>
    </div>
    
    
    <div class="form-group">
   
    <div class="col-sm-offset-4 col-sm-4">
    	<input type="button" value="ยืนยัน" class="btn btn-success form-control">
    </div>
    </div>
    
    
    </form>
    
    
    
</div>
<br><br>
<?php include("footer2.php"); ?>
</body>
</html>
<body>
</body>
</html>