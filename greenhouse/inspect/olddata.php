<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>�������Ҽ��ƽ̨</title>
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
			<th class='olddatac1'>���</th>
			<th class='olddatac2'>�ϴ�ʱ��</th>
			<th class='olddatac3'>�����¶�</th>
			<th class='olddatac4'>����ʪ��</th>
			<th class='olddatac5'>���ն�</th>
			<th class='olddatac3'>�����¶�</th>
			<th class='olddatac4'>����ʪ��</th>
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
	<h1 align="left"><a href="/index.php" title="���Ҽ��ƽ̨" id="header_text">&nbsp;&nbsp;&nbsp;&nbsp;�������Ҽ��ƽ̨</a> </h1>
    
    </div>
	</div>
	
    
	<div id="navigator">
		<ul id="menu">
	<li id="i"><a href="/inspect/index.html" title="���һ������Ӽ��">���Ҽ��</a></li>
	<li id="c"><a href="/control/index.html" title="������ؿ���">���ҿ���</a></li>
	<li id="o"><a href="/tricks.html" title="�ֲ˹���">�ֲ˹���</a></li>
	</ul>
	 </div>
	 
	<div id="navsecond">
	<h2>���Ҽ��</h2>
	<ul>
	<li><a href="/inspect/newdata.php" title="������������">ʵʱ����</a></li>
	<li><a href="/inspect/olddata.php" title="������ʷ����">��ʷ����</a></li>
	<li><a href="/inspect/datamng.php" title="�������ݹ���">���ݹ���</a></li>
	</ul>

	<h2>���ҿ���</h2>
	<ul>
	<li><a href="/control/light.php" title="�������Ҳ����">�����</a></li>
	<li><a href="/control/fan.php" title="����ɢ�ȷ���">ɢ�ȷ���</a></li>
	<li><a href="/control/heat.php" title="���Ƽ�����">������</a></li>
	<li><a href="/control/water.php" title="����ˮ��">ˮ��</a></li>
	</ul>

	<h2>�ֲ˹���</h2>
	<ul>
	<li><a href="/tricks.html#trick1" title="��̨��ʲô��?">��̨��ʲô��</a></li>
	<li><a href="/tricks.html#trick2" title="��ʲô�����ֲ�?">��ʲô�����ֲ�</a></li>
	<li><a href="/tricks.html#trick3" title="���������">���������</a></li>
	<li><a href="/tricks.html#trick4" title="����������">����������</a></li>
	<li><a href="/tricks.html#trick5" title="�������溦����������">�������溦����������</a></li>
	</ul>

	<h2>��������</h2>
	<ul id="friendlink">
	<li><a href="http://www.cau.edu.cn" title="�й�ũҵ��ѧ">�й�ũҵ��ѧ</a></li>
	<li><a href="http://www.ciee.cn" title="�й�ũҵ��ѧ�ŵ�ѧԺ">CIEE</a></li>
	<li><a href="http://tieba.baidu.com/f?kw=%D1%F4%CC%A8%D6%D6%B2%CB" title='"��̨�ֲ�"����'>�ٶ�����: ��̨�ֲ�</a></li>
	<li><a href="http://sae.sina.com.cn/" title="������ƽ̨">SinaAppEngine</a></li>
	<li><a href="http://www.w3school.com.cn/index.html" title="W3School">W3School���߽̳�</a></li>
	</ul>
	</div>

    <div id="maincontent">
	<h1>��ʷ����</h1>
	<hr/>
	<div align="center" id="olddataTable">
	<?php getTable(0) ?>
	</div>
	<hr/>
	<div align="center">
	<form>
	<input type="button" value="��һҳ" onClick="previousPage()" id="previousP">
	<input type="button" value="��һҳ" onClick="nextPage(<?php gettotal() ?>)" id="nextP">
	&nbsp;&nbsp;&nbsp;��ת&nbsp;<input type="text" value="1" style="width:30px;" id="textP">/<span id="totalP"><?php gettotal() ?></span>
	&nbsp;<input type="button" value="��ת" onClick="gotoPage()">
	</form>
	</div>
	
    
    </div>
    
	<div id="footer">
	<p>���������Ҽ��ƽ̨Ŀǰ���޸���ʹ�ã�������Ȥ����ϵ<a href="mailto:xiaxiao@cau.edu.cn" id="email">��������</a></p>
	<p>��Ȩ���У�����һ��Ȩ�������������Ҽ��ƽ̨���������ݽ������ԣ����κη������⼰���ղ��е��κ����Ρ�</p>
	</div>
    
    </div>
</body>
</html>

