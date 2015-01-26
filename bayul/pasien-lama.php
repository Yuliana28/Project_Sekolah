<html>
<head>
<title>pasien-lama
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

<H5 class="judul"><center>Silakan cari disini...
</div>
<div id="kotakkiri">
<div id="logo">
</div>
<?php
include("menu.php");

?>

</div>
<div id="con">
<form method="POST">
		<table>
		<tr>
			
			<br>
			<td><div class="jud" style="margin-top:-10;">Username
			<td><input class="input" type="text" placeholder="Masukan Username" name="username" style="width:250;height:40;border-radius:20px;padding-left:10;margin-top:5;margin-left:20;"/><h6>
			</tr>			
			<td colspan="5"><input class="text"  name="cari" type="submit" value="cari" style="width:100;margin-left:280;height:40;"/></td>

</tr>
	</table>

	
				</form>
				<img src="img/dok.png" width="400" height="450" style="margin-left:600;margin-top:-50;">
				
				<?php
				include("cari.php");
				?>
				
</div>
<div id="kotakkanan">
</div>
<style>
.footer{
font-family:agency fb;
font-size:20;
color:black;
margin-left:600;
margin-top:50;
position:fixed;
}
</style>
<h5 class="footer"> &copy Yuliana | XI RPL-B | SMKN 4 Padalarang | 2014-2015

</div>
</body>
</html>