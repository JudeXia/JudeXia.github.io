<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>智能温室监控平台</title>
    <meta  http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if($con)
	{
		mysql_select_db(SAE_MYSQL_DB, $con);
		$result=mysql_query("SELECT * FROM Factors ORDER BY ID DESC LIMIT 0,1");
		if($result)
			$row = mysql_fetch_array($result);
		else
			$row = "NULL";
		echo "<div align='center'>
		<table border='1' class='custom newdata'>
		<tr>
		<th>空气温度/℃</th>
		<td>" . $row['TEMPE1'] . "</td>
		</tr>
		<tr class='alt'>
		<th>空气湿度/%</th>
		<td>" . $row['HUMID1'] . "</td>
		</tr>
		<tr>
		<th>光照度/lx</th>
		<td>" . $row['ILLUM'] . "</td>
		</tr>
		<tr class='alt'>
		<th>土壤温度/℃</th>
		<td>" . $row['TEMPE2'] . "</td>
		</tr>
		<tr>
		<th>土壤湿度/%</th>
		<td>" . $row['HUMID2'] . "</td>
		</tr>
		<tr class='alt'>
		<th>上传时间</th>
		<td>" . $row['TIME'] . "</td>
		</tr>
		</table></div>
		";
	}
	?>
</body>
</html>	