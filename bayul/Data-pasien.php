<html>
<head>
<title>Data-pasien
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
<div id="profile">
</div>
<a href="home-office.php"><div id="home">
</div></a>
<a href="index.php"><div id="logout">
</div></a>

<H5 class="judul">Data Pasien Kinik ABC
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
	width:300;

	background-color:#dcb70c;
}
.no{
	width:70;
	height:30;
	background-color:#dcb70c;
}
.textt{
	font-family:lucida sans;
	font-size:12pt;
	color:black;
	text-align:center;
}
</style>
<br>
<div id="tbl">
<table  border="1" class="textt" >
<tr>
<td class="no">ID</td>
<td class="table">Nama</td>
<td class="table">Kelahiran</td>
<td class="table">Alamat</td>
<td class="no">Gender</td>
<td class="no">Gol.D</td>
<td class="table">Penyakit</td>
<td class="table">Keluhan</td>
<td class="table">Keterangan</td>
</tr>


<?php
			$pasienbaru=mysql_query("select * from pasienbaru");
			$no=1;

			while($tampil=mysql_fetch_array($pasienbaru)){
				echo"<tr>";
				echo "<td>".$no."</td>";
				echo "<td>".$tampil['namalengkap']."</td>";
				echo "<td>".$tampil['lahir']."</td>";

				echo "<td>".$tampil['alamat']."</td>";
				echo "<td>".$tampil['gender']."</td>";
				echo "<td>".$tampil['gol']."</td>";
				echo "<td>".$tampil['penderita']."</td>";
					echo "<td>".$tampil['keluhan']."</td>";
				echo "<td><a href='Data-pasien.php?del=".$tampil['nama']."'>delete</a>";
				echo "&nbsp;&nbsp;&nbsp;<a href='update_data.php?edit=".$tampil['nama']."'>edit</a></td>";

				echo "</tr>";
				$no++;
			}

		?>
		</table>
		</div>

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