<html>
<head>
<title>Data-dokter
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
<div id="profile-dok">
</div>
<a href="home-dokter.php"><div id="home">
</div></a>
<a href="index.php"><div id="logout">
</div></a>
<H5 class="judul"><center>Data Antrian Pasien Kinik ABC
</div>
<div id="kotakkiri">
<div id="logo">
</div>
<?php
include("menu-dok.php");

?>

</div>
<div id="con">
<style>
.footer{
font-family:agency fb;
font-size:20;
color:black;
margin-left:300;
margin-top:-50;
position:fixed;
}
</style>
<h5 class="footer"> &copy Yuliana | XI RPL-B | SMKN 4 Padalrang | 2014-2015

</div>
</body>
</html>