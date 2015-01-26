<html>
<head>
<title>home-office
</title>
</head>
<body>
<?php

mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("login");

session_start();

$status=$_SESSION['status'];
$type=$_SESSION['type'];
$username=$_SESSION['username'];

if($status!="loggedin"){
	session_destroy();
	header("location:index.php");

}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="wrapper">
<div id="head">
</div>
<div id="foot">
<div id="profile">
</div>
<a href="home-office.php"><div id="home">
</div></a>
<a href="index.php"><div id="logout">
</div></a>
<H5 class="judul">Selamat datang di Klinik ABC...
</div>
<div id="kotakkiri">
<div id="logo">
</div>
<?php
include("menu.php");

?>

</div>
<div id="con">
<h6 class="jud"> 
<br>
<br>
<br>
Selamat datang di Klinik ABC, 
<br>Apapun keluhan dan penyakit anda akan kami tangani sebaik mungkin.
<br>Dengan segala fasilitas yag ada disini, Insha Allah segala penyakit
<br>bisa sembuh dengan berobat secara rutin.
<br>Semoga nyaman sudah berobat disini...
<img src="img/ste.png" width="400" height="450" style="margin-left:600;margin-top:-80;">
</div>
<div id="kotakkanan">
<style="margin-left:100;margin-top:20;">

</div>
<style>
.footer{
font-family:agency fb;
font-size:20;
color:black;
margin-left:600;
margin-top:40;
position:fixed;
}
</style>
<h5 class="footer"> &copy Yuliana | XI RPL-B | SMKN 4 Padalarang | 2014-2015
</div>
</body>
</html>