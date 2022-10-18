<?php
session_start();
$conn=mysqli_connect("localhost","root","","userregistration");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/website');
define('SITE_PATH','http://localhost/userregistration/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');
?>