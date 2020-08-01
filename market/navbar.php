<?php require('Connections/dbcon.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>shopping</title>
</head>

<body style="font-size:20px;">
<div class="navbar navbar-inverse">
	<div class="container-fluid">
    <div class="navbar-header">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
    <div class="navbar-brand">
    	<span class="glyphicon glyphicon-shopping-cart" style="font-size:24px;"></span>
    	<span style="font-size:24px;">MAGIC SHOP</span>
    </div>
    </div>
    <div class="collapse navbar-collapse">
    	<ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">หน้าแรก</a></li>
        <li><a href="pay.php">สินค้า</a></li>
        <li><a href="basket.php">ตะกร้าสินค้า</a></li>
        <li><a >ชำระเงิน</a></li>
        <li><a href="regis_test.php"><span class="glyphicon glyphicon-user"></span> สมัครสมาชิก</a></li>
        <li><a><span class="glyphicon glyphicon-log-in"></span> เข้าสู่ระบบ</a></li>
        
        
        <li><a><img src="image/catagory/01.png" class="img-circle" width="25px;"></a></li>
        <li><a><span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ</a></li>
        
        </ul>
    </div>
    </div>
</div>
</body>
</html>