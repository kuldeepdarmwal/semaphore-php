<pre>
<?php
<<<<<<< HEAD
	session_start();
	include_once "TableDisplay.php";
=======
	include_once "stringconvert.php";
>>>>>>> 40952a36d8476baf5dcd0ff0f0fe27e738542016
	$var=$_SERVER['QUERY_STRING'];
	$_SESSION['key']=$var;
	$price=0;
	$arra=[];
<<<<<<< HEAD
	$arra=array(explode("&",str_replace('%2F','/',(str_replace('%2C',',',urldecode(html_entity_decode($_SERVER['QUERY_STRING'])))))));
	include_once "ForLoopDisplay.php";
	echo '<tr>';
	include_once "DisplayTable.php";
=======
	$arra=array(explode("&",str_replace('%2F','/',(str_replace('%2C',',',urldecode(html_entity_decode($_SESSION['key'])))))));
	 // Its conversion of querystring data into Array Format
	
	
	stringConvert1($arra,$price);
>>>>>>> 40952a36d8476baf5dcd0ff0f0fe27e738542016
echo "</tr>";

?>
		<tr>
		<td colspan="4"><h4 style="color:blue;text-align:center">Total Price</h4></td>
		<?php $_SESSION['price']=$_SESSION['price']+$price?>
		<td><h4 style="color:blue;text-align:center"><?php  echo $price;?></h4></td>
		</tr>
</table>
</div>
</pre>
