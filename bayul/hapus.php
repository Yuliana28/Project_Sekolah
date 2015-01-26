<?php
mysql_connect("localhost","root","") or die ("gagal melakukan koneksi");

mysql_select_db("pasienbaru") or die("gagal membuka database");

mysql_query("delete from pasienbaru where username='username'") or die("gagal menghapus data");
?>