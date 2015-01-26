<?php
if(!empty($_POST['update'])){

$id=$_POST['nama'];
$nama=$_POST['namalengkap'];
$jenis_kelamin=$_POST['alamat'];
$tanggal_lahir=$_POST['lahir'];
$gol_darah=$_POST['gol'];
$alamat=$_POST['penderita'];
$keluhan=$_POST['keluhan'];

$write=mysql_query("update pasien set nama='".$nama."' where id_num='".$id."'");
$write=mysql_query("update pasien set nama='".$namalengkap."' where id_num='".$id."'");
$write=mysql_query("update pasien set alamat='".$alamat."' where id_num='".$id."'");
$write=mysql_query("update pasien set tanggal_lahir='".$lahir."' where id_num='".$id."'");
$write=mysql_query("update pasien set gol_darah='".$gol."' where id_num='".$id."'");
$write=mysql_query("update pasien set alamat='".$penderita."' where id_num='".$id."'");
$write=mysql_query("update pasien set keluhan='".$keluhan."' where id_num='".$id."'");

header("location:Data-pasien.php");
}

?>