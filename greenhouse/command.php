<html>
<head>
</head>
<?php 
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if($con)
{
	mysql_select_db(SAE_MYSQL_DB, $con);
	$sql = "SELECT * FROM Command ORDER BY ID DESC LIMIT 0,1";
	$result = mysql_query($sql,$con);
	$row = mysql_fetch_array($result);
}
?>
<p id="number"><?php echo $row['ID']; ?></p>
<p id="device"><?php echo $row['DEVICE']; ?></p>
<p id="action"><?php echo $row['ACTION']; ?></p>
<p id="time"><?php echo $row['TIME']; ?></p>
</html>