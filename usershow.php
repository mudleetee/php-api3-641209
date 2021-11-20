<?
require('routeros_api.class.php');		
$API = new routeros_api();
//$API->debug = true;
if ($API->connect('192.168.1.1', 'admin', 'password')) {
$ARRAY3 = $API->comm("/ip/hotspot/user/print");
//$ARRAY3 = $API->comm("/ip/hotspot/active/print");
$API->disconnect();

}
?>
<form action="del.php" method ="get">
<select name="name" >
  <option selected="selected">เลือกฉันสิ</option>
	<?php foreach($ARRAY3 as $name) { ?>
	<option value="<?= $name['name'] ?>">
	<?= $name['name'] ?></option>
	<?php } ?>
	
</select> 


<input type='submit'>
</form>

<?php
echo $_GET['name']
?>
