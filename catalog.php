<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>ShopForm</title>
<?php
session_start();
if(isset($_SESSION["login"])){
	$date=strtotime("+7days",time());
	setcookie("UID",$_SESSION["UID"],$date);
	echo "<a href='../logout.php'>Logout</a>";
}
else{
	echo "Are you a hacker?<br/>";
	echo "<a href='../login.php'>Return to the login page.</a>";
}
if ( isset($_POST["Item"])){
   $_SESSION["Quantity"]=$_POST["Quantity"];
   $id=$_POST["Item"];
   $_SESSION["ID"]=$id;
   switch (strtoupper($id)){
      case "S1":
         $_SESSION["Name"]="Super notes";
         $_SESSION["Price"]=9999;
         break;
      case "S2":
         $_SESSION["Name"]="Broken iphone";
         $_SESSION["Price"]=2000;
         break;
      case "S3":
         $_SESSION["Name"]="Trash";
         $_SESSION["Price"]=99;
         break;   
   }  
   header("Location: ../addcart.php");
}
?>
</head>
<center>
<body bgcolor="#000000" text="white">
<form action="../catalog.php" method="post">
<h1>
Select goods: 
<select name="Item">
  <option value="S1">Super notes $9999</option>
  <option value="S2">Broken iphone $2000</option>
  <option value="S3">Trash $99</option> 
</select>
<input type="text" size="1" name="Quantity" value="1"/>
<input type="submit" value="Buy"/></br></br>
</form>
<a href="../cart.php"style="color:white;">Check shopping Cart</a>
</h1>
</body>
</center>
</html>