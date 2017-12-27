<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>智能温室监控平台</title>
    <meta  http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta name="author" content="Jude" />
    <meta name="description" content="greenhouse" />
	<meta name="keywords" content="cau greenhouse" />
    <link rel="stylesheet" type="text/css" href="../mystyle.css" />
	<script src="olddata.js" type="text/javascript"></script>
	<?php
	function gettotal()
	{
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
			echo ceil($total/10);
		}
	}
	
	function getTable($number)
	{
		$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
		if($con)
		{
			mysql_select_db(SAE_MYSQL_DB, $con);
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
				echo "<td class='olddatac1'>" . $i . "</td>";
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
	}
	?>
</head>
<body>
	<div id="wrapper">
	<div id="header">
    <div id="header_index">
	<h1 align="left"><a href="/index.php" title="温室监控平台" id="header_text">&nbsp;&nbsp;&nbsp;&nbsp;智能温室监控平台</a> </h1>
    
    </div>
	</div>
	
    
	<div id="navigator">
		<ul id="menu">
	<li id="i"><a href="/inspect/index.html" title="温室环境因子监测">温室监测</a></li>
	<li id="c"><a href="/control/index.html" title="温室相关控制">温室控制</a></li>
	<li id="o"><a href="/tricks.html" title="种菜攻略">种菜攻略</a></li>
	</ul>
	 </div>
	 
	<div id="navsecond">
	<h2>温室监测</h2>
	<ul>
	<li><a href="/inspect/newdata.php" title="温室最新数据">实时数据</a></li>
	<li><a href="/inspect/olddata.php" title="温室历史数据">历史数据</a></li>
	<li><a href="/inspect/datamng.php" title="温室数据管理">数据管理</a></li>
	</ul>

	<h2>温室控制</h2>
	<ul>
	<li><a href="/control/light.php" title="控制温室补光灯">补光灯</a></li>
	<li><a href="/control/fan.php" title="控制散热风扇">散热风扇</a></li>
	<li><a href="/control/heat.php" title="控制加热器">加热器</a></li>
	<li><a href="/control/water.php" title="控制水泵">水泵</a></li>
	</ul>

	<h2>种菜攻略</h2>
	<ul>
	<li><a href="/tricks.html#trick1" title="阳台种什么菜?">阳台种什么菜</a></li>
	<li><a href="/tricks.html#trick2" title="用什么容器种菜?">用什么容器种菜</a></li>
	<li><a href="/tricks.html#trick3" title="土壤与肥料">土壤与肥料</a></li>
	<li><a href="/tricks.html#trick4" title="播种与移苗">播种与移苗</a></li>
	<li><a href="/tricks.html#trick5" title="常见病虫害的诊断与防治">常见病虫害的诊断与防治</a></li>
	</ul>

	<h2>友情链接</h2>
	<ul id="friendlink">
	<li><a href="http://www.cau.edu.cn" title="中国农业大学">中国农业大学</a></li>
	<li><a href="http://www.ciee.cn" title="中国农业大学信电学院">CIEE</a></li>
	<li><a href="http://tieba.baidu.com/f?kw=%D1%F4%CC%A8%D6%D6%B2%CB" title='"阳台种菜"贴吧'>百度贴吧: 阳台种菜</a></li>
	<li><a href="http://sae.sina.com.cn/" title="新浪云平台">SinaAppEngine</a></li>
	<li><a href="http://www.w3school.com.cn/index.html" title="W3School">W3School在线教程</a></li>
	</ul>
	</div>

    <div id="maincontent">
	<h1>历史数据</h1>
	<hr/>
	<div align="center" id="olddataTable">
	<?php getTable(0) ?>
	</div>
	<hr/>
	<div align="center">
	<form>
	<input type="button" value="上一页" onClick="previousPage()" id="previousP">
	<input type="button" value="下一页" onClick="nextPage(<?php gettotal() ?>)" id="nextP">
	&nbsp;&nbsp;&nbsp;跳转&nbsp;<input type="text" value="1" style="width:30px;" id="textP">/<span id="totalP"><?php gettotal() ?></span>
	&nbsp;<input type="button" value="跳转" onClick="gotoPage()">
	</form>
	</div>
	
    
    </div>
    
	<div id="footer">
	<p>本智能温室监控平台目前仅限个人使用，如有兴趣请联系<a href="mailto:xiaxiao@cau.edu.cn" id="email">本人邮箱</a></p>
	<p>版权所有，保留一切权利。本智能温室监控平台的所有内容仅供测试，对任何法律问题及风险不承担任何责任。</p>
	</div>
    
    </div>
</body>
</html>

