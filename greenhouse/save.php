<html>
<head>
</head>
<body>
<?php
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if($con)
{
mysql_select_db(SAE_MYSQL_DB, $con);

/*$sql = "CREATE TABLE Factors
(
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
TIME varchar(60),
TEMPE varchar(15),
HUMID varchar(15),
ILLUM varchar(15)
)";*/
/*$sql = "CREATE TABLE Mode
(
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
LIGHT int(1),
FAN int(1),
HEAT int(1),
WATER int(1)
)";

mysql_query($sql,$con);*/

$sql="INSERT INTO Factors (TIME, TEMPE1, HUMID1, ILLUM, TEMPE2, HUMID2)
VALUES
('$_POST[time]', '$_POST[temperature1]','$_POST[humidity1]','$_POST[illumination]','$_POST[temperature2]','$_POST[humidity2]')";
mysql_query($sql);
$sql="INSERT INTO Mode (LIGHT, FAN, HEAT, WATER)
VALUES
('$_POST[light]', '$_POST[fan]','$_POST[heat]','$_POST[water]')";
mysql_query($sql);
echo mysql_error();
}
?>
</body>