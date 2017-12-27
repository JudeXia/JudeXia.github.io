<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>智能温室监控平台</title>
    <meta  http-equiv="Content-Type" content="text/html; charset=gbk" />
    <meta name="author" content="Jude" />
    <meta name="description" content="greenhouse" />
	<meta name="keywords" content="cau greenhouse" />
</head>
<body>
<?php
	$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if($con)
	{
		mysql_select_db(SAE_MYSQL_DB, $con);
		$sql = "DROP TABLE Factors";
		mysql_query($sql,$con);
		$sql = "CREATE TABLE Factors
		(
		ID int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(ID),
		TIME varchar(25),
		TEMPE1 varchar(15),
		HUMID1 varchar(15),
		ILLUM varchar(15),
		TEMPE2 varchar(15),
		HUMID2 varchar(15)
		)";
		mysql_query($sql,$con);
	}
	mysql_close();
?>
<p>数据已清空！</p>
<p>点击<a href="datamng.php">这里</a>返回数据管理。</p>
</body>
</html>