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
<div id="profile">
</div>
<a href="home-office.php"><div id="home">
</div></a>
<a href="index.php"><div id="logout">
</div></a>
<H5 class="judul"><center>Data Dokter Kinik ABC
</div>
<div id="kotakkiri">
<div id="logo">
</div>
<?php
include("menu.php");

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
<td class="table">Nama</td>

<td class="table">Tanggal Lahir</td>

<td class="table">Alamat</td>

<td class="table">Spesialis</td>

<td class="table">Jadwal Praktek</td>

<td class="table">Jadwal Kerja</td>
</tr>
<td>1</td>
<td>Yuliana</td>
<td>28/11/1997</td>
<td>Cijeungjing</td>
<td>Dokter Umum</td>
<td>Sabtu</td>
<td>Senin s/d Sabtu</td>
<tr>
<td>2</td>
<td>Nabilah</td>
<td>28/10/1997</td>
<td>Cijeungjing</td>
<td>Dokter gigi</td>
<td>Jumat</td>
<td>Senin s/d Sabtu</td>
<tr>
<td>3</td>
<td>Marza</td>
<td>28/11/1997</td>
<td>Cijeungjing</td>
<td>Dokter hewan</td>
<td>Kmais</td>
<td>Senin s/d Sabtu</td>
<tr>
<td>4</td>
<td>Desy</td>
<td>28/11/1997</td>
<td>Cijeungjing</td>
<td>Dokter tht</td>
<td>Rabu</td>
<td>Senin s/d Sabtu</td>
<tr>
<td>5</td>
<td>Ratu</td>
<td>28/11/1997</td>
<td>Cijeungjing</td>
<td>Dokter Kulit</td>
<td>Selasa</td>
<td>Senin s/d Sabtu</td>
</t>
</table>
<style>
.footer{
font-family:agency fb;
font-size:20;
color:black;
margin-left:300;
margin-top:200;
position:fixed;
}
</style>
<h5 class="footer"> &copy Yuliana | XI RPL-B | SMKN 4 Padalarang | 2014-2015</h5>

</div>
</body>
</html>