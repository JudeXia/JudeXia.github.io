<html>
<head>
</head>
<body>
<?php
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if($con)
{
mysql_select_db(SAE_MYSQL_DB, $con);

$sql="INSERT INTO Command (DEVICE, ACTION, TIME)
VALUES
('$_POST[device]', '$_POST[action]','$_POST[time]')";
mysql_query($sql);
}
?>
</body>