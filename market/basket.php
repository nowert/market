<?php require("connection.php"); ?>
<?php 

$sql="select * from order where order_id='1448507456'";
$query=mysqli_query($conn,$sql);
$get_data=mysqli_fetch_array($conn,$query);
echo $get_data["order_id"];


?>
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

<body style="background-color:#ededed; font-size:18px;">
<?php include("navbar.php"); ?>

<div class="container" style="background-color:#fff;">

<div class="row">
	<div class="col-sm-12" style="background-color:#b57636; text-align:center; color:#fff;"><h3>ตะกร้าสินค้า</h3></div>
</div>

<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
      	<th width="5%"></th>
        <th width="13%"><center>No.</center></th>
        <th width="15%"><center>รูป</center></th>
        <th width="25%"><center>รายการสินค้า</center></th>
        <th width="5%"><center>จำนวน</center></th>
        <th width="10%"><center>ราคา</center></th>
        <th width="12%">ราคารวม</th>
        <th width="5%"><center>แก้ไข</center></th>
        <th width="10%"><center>ลบ</center></th>
      </tr>
    </thead>
    
    <tbody>
      <tr>
      	<td width="5%"><center><input type="checkbox" style="width: 20px;
height: 20px;"></center></td>
        <td width="13%"><center></center></td>
        <td width="15%"><center></center></td>
        <td width="25%"><center></center></td>
        <td width="5%"><input type="number" value="1" min="1" style="width: 4em"></td>
        <td width="10%"><center></center></td>
        <td width="12%"></td>
        <td width="5%"><button type="submit" class="btn btn-warning btn-block">แก้ไข</button></td>
        <td width="10%"><center><button type="submit" class="btn btn-danger btn-block">ลบ</button></center></td>
      </tr>
      </tbody>

      <tfoot>
      <tr>
      	<td width="5%"><center><input type="checkbox" style="width: 20px;
height: 20px;"></center></td>
        <td width="13%"> เลือกทั้งหมด</td>
        <td width="20%"><center></center></td>
        <td width="25%"><center></center></td>
        <td width="5%"></td>
        <td width="10%" align="right">ราคารวม</td>
        <td width="12%"><?php echo $totalsumprice; ?></td>
        <td width="5%" align="right">บาท</td>
        <td width="10%"></td>
      </tr>
      
      <tr>
      	<td width="5%"><center></td>
        <td width="13%"> </td>
        <td width="20%"><center></center></td>
        <td width="25%"><center></center></td>
        <td width="5%"></td>
        <td width="10%"align="right">ส่วนลด</td>
        <td width="12%">
			<?php if($totalsumprice>=5000) {
				      $lod=$totalsumprice*(5/100);
			        } else if($totalsumprice>=3000){
					  $lod=$totalsumprice*(3/100);
						} else if($totalsumprice>=2000){
					  $lod=$totalsumprice*(2/100);
						} else {
							$lod=0;
							}
							echo $lod; // แสดงค่าส่วนลดบน Browser
			?>
        </td>
        <td width="5%" align="right">บาท</td>
        <td width="10%"></td>
      </tr>
      
      <tr>
      	<td width="5%"><center></td>
        <td width="13%"> </td>
        <td width="20%"><center></center></td>
        <td width="25%"><center></center></td>
        <td width="5%"></td>
        <td width="10%"align="right">ภาษี</td>
        <td width="12%"><?php 
							$vat=($totalsumprice-$lod)*(7/100); 
							echo $vat; 
						?></td>
        <td width="5%" align="right">บาท</td>
        <td width="10%"></td>
      </tr>
      
      <tr>
      	<td width="5%"><center></td>
        <td width="13%"> </td>
        <td width="20%"><center></center></td>
        <td width="25%"><center></center></td>
        <td width="5%"></td>
        <td width="10%"align="right">รวมสุทธิ</td>
        <td width="12%"><?php echo($totalsumprice-$lod)+$vat; ?></td>
        <td width="5%" align="right">บาท</td>
        <td width="10%"></td>
      </tr>
      
      <tr>
      	<td width="5%"><center></td>
        <td width="13%"> </td>
        <td width="20%"><center></center></td>
        <td width="25%"><center></center></td>
        <td width="5%"></td>
        <td width="10%"align="right"></td>
        <td width="12%"></td>
        <td width="15%"><a class="btn btn-info btn-block" onClick="window.print();">พิมพ์ใบสั่งซื้อ</a></td>
        <td width="10%"><a class="btn btn-danger btn-block">ชำระเงิน</a></td>
        
        
      </tr>
      
      </tfoot>
    
  </table>
</div>
</div>

<br><br>
<?php include("footer2.php"); ?>
</body>
</html>