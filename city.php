<?php
include_once("db1.php");
if($_REQUEST['state'])
{
$db=db();
$qr=$db->query("select * from state where state='{$_REQUEST['state']}'");
?>
<option value="0" placeholder >Select City</option>
<?php
while($state=$qr->fetch_assoc())
{
?>
<option value="<?php echo $state['city'] ;?>"><?php echo $state['city'] ;?></option>
<?php 
}
$db->close();
}
?>                        