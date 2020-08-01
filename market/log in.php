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
	<div ><br>
    <h2><center>Log In</center></h2><hr><br>
    </div>
    <form action="" method="get" class="form-horizontal">
    
    <div class="form-group">
    <label class="control-label col-sm-4">E-mail : </label>
    <div class="col-sm-4">
    	<input name="" type="text" class="form-control" placeholder="ป้อนE-mail">
    </div>
    </div>
    
    <div class="form-group">
    <label class="control-label col-sm-4">Password : </label>
    <div class="col-sm-4">
    	<input name="" type="password" class="form-control" placeholder="ป้อนรหัสผ่าน">
    </div>
    </div>
   
    <div class="form-group">
    <div class="col-sm-offset-4 col-sm-2">
    	<input name="" type="submit" class="form-control btn-success" value="ยืนยัน">
    </div>
    <div class="col-sm-2">
    	<input name="" type="submit" class="form-control btn-danger" value="ยกเลิก">
    </div>
    </div>
    
    </form>
</div>

<br><br>
<?php include("footer.php"); ?>
</body>
</html>