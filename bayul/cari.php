
<?php
if(!empty($_POST['cari'])){

$username=$_POST['username'];

$cari=mysql_query("select * from pasienbaru where namalengkap='".$username."'");
if($cari==true){
$row=mysql_num_rows($cari);
if($row > 0){
while( $tampil=mysql_fetch_array($cari)){
echo "<div id='isi'>";
echo "<class ='jud'>"; 
echo "Nama :  ".$tampil['namalengkap']."<br>";
echo "Alamat :   ".$tampil['alamat']."</br>";
echo "Gender :   ".$tampil['gender']."</br>";
echo "Gol Darah :   ".$tampil['gol']."</br>";
echo "Penderita :   ".$tampil['penderita']."</br>";
echo "Keluhan  :   ".$tampil['keluhan']."</br>";
echo "</div>";
}
}
else{
echo "&nbsp;&nbsp;&nbsp;&nbsp;Tidak ada pasien";
}
}

}
?>
