<pre>
<link rel="stylesheet" type="text/css" href="css/bodyCss.css">
<div id="body">
<h1 style="color:red;text-align:center">Your Cart</h1>
<?php

	include_once "TableDisplay.php";
	$var=$_SERVER['QUERY_STRING'];
	$_SESSION['key']=$var;
	$price=0;
	$arra=[];
	$arra=array(explode("&",str_replace('%2F','/',(str_replace('%2C',',',urldecode(html_entity_decode($_SERVER['QUERY_STRING'])))))));
	include_once "ForLoopDisplay.php";
	echo '<tr>';
	include_once "DisplayTable.php";
echo "</tr>";
?>
		<tr>
		<td colspan="4"><h4 style="color:blue;text-align:center">Total Price</h4></td>
		<td><h4 style="color:blue;text-align:center"><?php  echo $price;?></h4></td>
		</tr>
</table>
<form action="Summary.php" method="POST">
<input type="submit" class="btn btn-info" value="Confirm Order"/>&nbsp;<input type="button" value="Cancel"
class="btn btn-info" id="cancel_addtoCart"/>
</form>
</div>
</pre>
