
<?php

ob_start();//緩衝區整個跑完之後header才會送
session_start();
$UID=$_POST["uid"];
$passwd=$_POST["passwd"];
$uid="robot";
$upwd="a1073346";
if($UID==$uid&&$passwd==$upwd){
	$_SESSION["login"]="S";
	$_SESSION["UID"]=$uid;
	//echo "SUCCESSSSSSS";
	header('location:../catalog.php');
}
else{
	$_SESSION["login"]="F";
	header('location:../failed.php');
	//echo "wrong username or password";
}
//echo "<meta http-equiv='refresh' content='3;url=login.php'/>";
//3秒回登入頁 比上面的header好一點 但比較多字

?>
