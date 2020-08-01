<?php
error_reporting(E_ALL);
ini_set('display_errors',0);
$servername="localhost";
$username="root";
$password="1234";
$dbname="businessdb";
$conn=new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
date_default_timezone_set("Asia/Bangkok");
session_start();
echo "test";
if($conn){
	echo "pass";
	} else {
	echo "no pass";
	}
$sql="INSERT INTO order (order_id, order_user, order_date, order_bank_id, order_addr_send, order_send_pic, order_detail_return, order_return_pic) VALUES
('1448507450', 'thegod12012540@gmail.com', '2015-11-26 10:11:35', 3, '154 ถ.มรุพงษ์', '1448510045_img.jpg', NULL, NULL),";

$query=mysqli_query($conn,$sql);
?>
