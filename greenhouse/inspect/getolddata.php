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
	$number=$_GET['q'];
	$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if($con)
	{
		mysql_select_db(SAE_MYSQL_DB, $con);
		$result=mysql_query("SELECT * FROM Factors ORDER BY ID DESC LIMIT 0,1");
			if($result)
			{
				$row = mysql_fetch_array($result);
				$total = $row['ID'];
			}
			else
				$row = "NULL";
				
		$result=mysql_query("SELECT * FROM Factors ORDER BY ID DESC LIMIT ".$number.",10");
		echo "<table border='1'  class='custom olddata'>
		<tr>
		<th class='olddatac1'>序号</th>
		<th class='olddatac2'>上传时间</th>
		<th class='olddatac3'>空气温度</th>
		<th class='olddatac4'>空气湿度</th>
		<th class='olddatac5'>光照度</th>
		<th class='olddatac3'>土壤温度</th>
		<th class='olddatac4'>土壤湿度</th>
		</tr>";
		$i = 1;
		while($row = mysql_fetch_array($result))
		{
			if($i%2==0)
				echo "<tr>";
			else
				echo '<tr class = "alt">';
			$a = $total-$row['ID']+1;
			echo "<td class='olddatac1'>" . $a . "</td>";
			echo "<td class='olddatac2'>" . $row['TIME'] . "</td>";
			echo "<td class='olddatac3'>" . $row['TEMPE1'] . "</td>";
			echo "<td class='olddatac4'>" . $row['HUMID1'] . "</td>";
			echo "<td class='olddatac5'>" . $row['ILLUM'] . "</td>";
			echo "<td class='olddatac3'>" . $row['TEMPE2'] . "</td>";
			echo "<td class='olddatac4'>" . $row['HUMID2'] . "</td>";
			echo "</tr>";
			$i++;
		}
		echo "</table>";
	}
?>
</body>
</html>