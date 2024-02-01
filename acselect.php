<?php
include_once "db.php";

$db=dcon();

$qr=$db->query("select * from lena where number=9557452770");

?>


<select name="account" id="">

<?php while ($res=$qr->fetch_assoc()) { ?>

<option value=""> <?php echo $res['Account'];  ?> </option><?php } ?>

</select>



<?php $db->close(); ?>

