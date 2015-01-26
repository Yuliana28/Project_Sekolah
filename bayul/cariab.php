
<?php

if(!empty($_POST['cariab'])){

$nama=$_POST['nama'];

$cari=mysql_query("select * from input where nama='".$nama."'");
if($cariab==true){
$row=mysql_num_rows($cariab);
if($row > 0){
while( $tampil=mysql_fetch_array($cariab)){
echo "<div id='isi'>";
echo "<class ='jud'>"; 
echo "Nama Lengkap :  ".$tampil['nama']."<br>";
echo "Posisi  :   ".$tampil['jabatan']."</br>";
echo "</div>";
}
}
else{
echo "&nbsp;&nbsp;&nbsp;&nbsp;Tidak ada";
}
}

}
?>
