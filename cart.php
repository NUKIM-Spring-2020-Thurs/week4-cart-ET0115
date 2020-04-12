<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Cart</title>
<center>
</head>
<body bgcolor="#000000" text="white">
<table border="1">
  <tr bgcolor="#000000"align=center>
   <td>Delete</td>
   <td>No.</td>
   <td>Goods</td>
   <td>Price</td>
   <td>Quantity</td>
</tr>
<?php
$total = 0;
while (list($arr, $value) = each($_COOKIE)){
  if (isset($_COOKIE[$arr])&& is_array($_COOKIE[$arr])){
      $color="#000000";
      echo "<tr bgcolor='".$color."'align=center><td>";
      echo "<a href='../delete.php?Id=".$arr."'>";
      echo "Delete</a></td>";
      $price=0;
      $quantity=0;
      while(list($name, $value)=each($_COOKIE[$arr])){
        echo "<td>" . $value . "</td>";
        if ($name=="Price") $price = $value;
        if ($name=="Quantity") $quantity = $value;
     }
     $total+=$price*$quantity;
     echo "</tr>";
  }
}
if ($total!=0){
   echo "<tr bgcolor=black><td colspan=5 align=right>";
   echo "Total: ".$total." NT dollars</td></tr>";
}
?>
</table>
<a href="../catalog.php"style="color:white;">Back to Form</a>
</body>
</center>
</html>