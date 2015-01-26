
<?php
if(!empty($_POST['baru'])){

$namalengkap =$_POST['namalengkap'];
$alamat =$_POST['alamat'];
$lahir =$_POST['lahir'];
$gender =$_POST['gender'];
$gol =$_POST['gol'];
$penderita =$_POST['penderita'];
$keluhan =$_POST['keluhan'];
mysql_query("insert into pasienbaru (namalengkap, alamat, lahir, gender, gol, penderita, keluhan)
	values ('".$namalengkap."','".$alamat."','".$lahir."','".$gender."','".$gol."','".$penderita."','".$keluhan."')");
}

?>