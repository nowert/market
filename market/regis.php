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
	<h1 style="text-align:center;"><p>REGISTER</p></h1><hr>
    
        <form class="form-inline" action="" method="post">

          <div class="row">
              <div class="col-sm-offset-1 col-sm-2">
                  <label for="">ชื่อผู้ใช้</label>
                </div>
                <div class="col-sm-1">
                  <input type="text" name="" value="" class="form-control">
              </div>

              <div class="col-sm-offset-2 col-sm-2">
                  <label for="">รหัส</label>
              </div>
              <div class="col-sm-1">
                  <input type="password" name="" value="" class="form-control">
              </div>
          </div><br / />

          <div class="row">
            <div class="col-sm-offset-1 col-sm-2">
              <label for="">ชื่อ</label>
            </div>
            <div class="col-sm-1">
              <input type="text" name="" value="" class="form-control">
            </div>

            <div class="col-sm-offset-2 col-sm-2">
              <label for="">นามสุกล</label>
            </div>
            <div class="col-sm-1">
              <input type="text" name="" value="" class="form-control">
            </div>
          </div><br / />

          <div class="row">
            <div class="col-sm-offset-1 col-sm-2">
              <label for="">อีเมล</label>
            </div>
            <div class="col-sm-1">
              <input type="text" name="" value="" class="form-control">
            </div>

            <div class="col-sm-offset-2 col-sm-2">
              <label for="">เบอร์โทร</label>
            </div>
            <div class="col-sm-1">
              <input type="text" name="" value="" class="form-control">
            </div>
          </div><br / />

          <div class="row">
            <div class="col-sm-offset-1 col-sm-2">
              <label for="">ที่อยู่</label>
            </div>
            <div class="col-sm-7">
              <textarea name="name" class="form-control" rows="6" cols="90"></textarea>
            </div>
          </div><br / />

          <div class="row">
            <div class="col-sm-offset-1 col-sm-2">
              <label for="">คำถามกันลืม</label>
            </div>
            <div class="col-sm-1">
              <select class="form-control input-lg" name="">
                <option value="0" selected>เลือกคำถามกันลืม</option>
                <option value="1">เลือกคำถามกันลืม</option>
                <option value="2">เลือกคำถามกันลืม</option>
              </select>
            </div>

            <div class="col-sm-offset-2 col-sm-2">
              <label for="">คำตอบ</label>
            </div>
            <div class="col-sm-1">
              <input type="text" name="" value="" class="form-control">
            </div>
          </div><br / />
          
          <div class="row">
            <div class="col-sm-offset-1 col-sm-2">
              
            </div>
            <div class="col-sm-1">
             <input type="button" name="" value="ยืนยัน" class="form-control btn btn-success">
            </div>

            <div class="col-sm-offset-2 col-sm-2">
              
            </div>
            <div class="col-sm-1">
              <input type="button" name="" value="ยกเลิก" class="form-control btn btn-danger">
            </div>
          </div><br / />


        </form>
</div><br><br>
<?php include("footer2.php"); ?>
</body>
</html>