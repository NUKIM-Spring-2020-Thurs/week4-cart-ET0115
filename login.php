<html>

<?php
if (isset($_COOKIE["UID"])) {
	$user=$_COOKIE["UID"];
	echo "Hope you come back again".$_COOKIE["UID"];
	setcookie("UID","",time()-3600);
}
else{
	$user="";
	echo "<center>Hi new friend!</center><br/>";
}
?>
<title>Login</title>
<center>
<h1>
Login~
<body bgcolor="#000000" text="white">
<form action="../check.php" method="POST">
username: <input type="text" name="uid" value="<?php echo $_COOKIE["UID"]; ?>" required><br/><br/>
password: <input type="password" name="passwd"required><br/><br/>
<input type="submit" value="login">
</form>
</body>
</h1>
</center>
</html>