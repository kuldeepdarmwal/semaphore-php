<pre>
<div id="body" >
	<fieldset>
	<legend>Order summery page</legend>

<?php
include_once "TableDisplay.php";
include_once "Helper.php";
$var=$_SESSION['user'];
$obj = new Helper("ecomm");
$field="user_id,mobile,address,city,zip";
$table="user_details";
$condition="user_id='".$var."'";
$record=$obj->read_record($field, $table, $condition);
$arra=[];
$price=0;
$arra=array(explode("&",str_replace('%2F','/',(str_replace('%2C',',',urldecode(html_entity_decode($_SESSION['key'])))))));
include_once "ForLoopDisplay.php";
echo '<tr>';
include "DisplayTable.php";
echo "</tr>";
?>
<tr>
		<td colspan="4"><h4 style="color:blue;text-align:center">Total Price</h4></td>
		<td><h4 style="color:blue;text-align:center"><?php  echo $price;?></h4></td>
		</tr>
</table>
<h3>Address details :</h3>
<table border="3">
<tr>
<td>&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;</td>
</tr>
<?php
foreach ($record as $key ) {
    $_SESSION["user_details_id"]= $key['user_id'];
  foreach ($key as $subElement=>$val) {
	?>
		<tr>
		<td>&nbsp;&nbsp;&nbsp;<?php echo "$subElement";?>&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;<?php echo "$val";?>&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<?php
    }
}
?>
</table>
<form method="POST" action="Validate.php">
<input type="submit" name="btn_submit" class="btn btn-info" value="Address" />&nbsp;<input type="submit" name="btn_submit"  class="btn btn-info" value="Confirm" />&nbsp;<input type="submit" name="btn_submit" class="btn btn-info"  value="Cancel" />
</form>
	</fieldset>
</div>
</pre>
