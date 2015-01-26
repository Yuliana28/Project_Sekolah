<html>
<head>
<title>SIMKLIN</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div id="kotak">
		<div id="login">
		<form method="post">
			<table border="0" cellpadding="5" cellspacing="0" style="margin-top:-20;margin-left:100;">
				<tr>
				<img src="img/ha.png" align="center" style="margin-left:30;margin-top:10;">
						<td><h6 class="text" style="margin-top:40;">Username
						<td></td>
						<td><img src="img/User.png" width="20" style="padding-top:10;padding-bottom:10;padding-left:5;position:absolute;margin-top:40;margin-left:-250;"><input class="input" type="text" placeholder="Username" name="username" style="padding-left:25;width:250;height:40;border-radius:20px;margin-top:40; required"/></td>
					</tr>
				<tr>
						<td><h6 class="text">Password</td>
						<td></td>
						<td><img src="img/l.png" width="20" style="padding-top:10;padding-bottom:10;padding-left:5;position:absolute;margin-left:-250;"><input class="input" type="password" placeholder="Password" name="password" style="padding-left:25;width:250;height:40;border-radius:20px; required"/></td>
				</tr>
				<tr align="center">
						<td colspan="3"><input class="submit" type="submit" name="login" value="Login"/></td>
				</tr>
			</table>
			
	</form>
	<?php
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("login");
	session_start();
	session_destroy();
	if(!empty($_POST['login'])){
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$all=mysql_query("select * from user where username='".$username."' and password='".$password."' ");
	$log=mysql_fetch_array($all);
	
	if($log){
	
		$rows=mysql_num_rows($all);
		
		if($rows > 0){
		
		session_start();
		$_SESSION['username']=$username;
		$type=$log['type'];
		$_SESSION['status']="loggedin";
	 if($type=="dokter"){
	 $_SESSION['type']=$log['type'];
	 header("location:home-dokter.php");
	 }
	 else if($type=="office"){
	 $_SESSION['type']=$log['type'];
	 header("location:home-office.php");
	 }
	 else if($type=="admin"){
	 $_SESSION['type']=$log['type'];
	 header("location:home-admin.php");
	 }
	 else if($type=="apoteker"){
	 $_SESSION['type']=$log['type'];
	 header("location:home-apoteker.php");
	 }
	 }
}
}

	 
		
	
	
	?>
</div>

</div>
</div>
	
</div>
</body>
</html>
