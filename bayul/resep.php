<html>
<head>
<title>Data-resep-apoteker
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
<?php
if(isset($_GET['del'])){
	$del=$_GET['del'];
	mysql_query("delete from pasienbaru where nama='$del'");

}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="wrapper">
<div id="head">
</div>
<div id="foot">
<div id="profile-apot">
</div>
<a href="home-apoteker.php"><div id="home">
</div></a>
<a href="index.php"><div id="logout">
</div></a>

<H5 class="judul">Data Resep Kinik ABC
</div>

<div id="kotakkiri">
<div id="logo">
</div>
<?php
include("menu-apot.php");

?>
</div>
<div id="con">
<style>
.table{
	width:130;
	height:20;
	background-color:#dcb70c;
}
.no{
	width:40;
	height:50;
	background-color:#dcb70c;
}
.textt{
	font-family:lucida sans;
	font-size:13pt;
	color:black;
	text-align:center;
}
</style>
<br>
<div id="tbl">

<table border="1"  class="textt" style="margin-left:0;">
<tr>
<td class="no">No.</td>
<td class="table">Nama Obat</td>
<td class="table">Jenis Obat</td>
<td class="table">Pemakaian</td>
<td class="table">Penderita</td>
<td class="table">Dosis</td>
<td class="table">Efek Samping</td>
</tr>
</table>
</div>
<style>
.footer{
font-family:agency fb;
font-size:20;
color:black;
margin-left:300;
margin-top:100;
position:fixed;
}
</style>
<h5 class="footer"> &copy Yuliana | XI RPL-B | SMKN 4 Padalarang | 2014-2015
</div>
</body>
</html>