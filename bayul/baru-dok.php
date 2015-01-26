<?php
if(!empty($_POST['baru-dok'])){

$nama =$_POST['id_num'];
$namalengkap =$_POST['nama'];
$alamat =$_POST['alamat'];
$lahir =$_POST['lahir'];
$gol =$_POST['spesialis'];
$penderita =$_POST['praktek'];
$keluhan =$_POST['kerja'];
mysql_query("insert into buatdatadokter (id, nama, alamat, lahir, spesialis, praktek, kerja)
	values ('".$id."','".$nama."','".$alamat."','".$lahir."','".$spesialis."','".$praktek."','".$kerja."')");
}

?>