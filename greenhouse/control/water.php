<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>�������Ҽ��ƽ̨</title>
    <meta  http-equiv="Content-Type" content="text/html; charset=gbk" />
    <meta name="author" content="Jude" />
    <meta name="description" content="greenhouse" />
	<meta name="keywords" content="cau greenhouse" />
    <link rel="stylesheet" type="text/css" href="../mystyle.css" />
	<?php 
	$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if($con)
	{
		mysql_select_db(SAE_MYSQL_DB, $con);
		$result = mysql_query("SELECT * FROM Mode ORDER BY ID DESC LIMIT 0,1");
		$row = mysql_fetch_array($result);
		$water = $row['WATER'];
	}
	function show_water($water) 
	{
		if($water=="true")
			echo "��";
		else
			echo "��";
	}
	function turn_water($water) 
	{
		if($water=="true")
			echo "��";
		else
			echo "��";
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
	<li><a href="/control/light.php" title="��������ˮ��">�����</a></li>
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
	<h1>ˮ�õĿ���</h1>
	<hr/>
	<h2>��ǰˮ��״̬</h2>
	<p><?php show_water($water); ?></p>
	<hr/>
	<h2>��ִ�в���</h2>
	<p style="font-weight: bold;"><?php turn_water($water) ?>ˮ�ã�</p>
	<form name="form" action="/savecommand.php" method="post" target="hehe" style="text-indent: 2em;">
		<input type="text" id="device" name="device" value="water" style="display: none;" />
		<input type="text" id="action" name="action" value="<?php echo $water; ?>" style="display: none;" />
		����ʱ��(�ر�ˮ��ʱ������д)��<input type="text" id="time" name="time" />
		<input type="submit" value="�ύ" id="buttonsubmit"/>
	</form>
	<hr/>
	<iframe name="hehe" style="display: none" ></iframe>
    
    </div>
    
	<div id="footer">
	<p>���������Ҽ��ƽ̨Ŀǰ���޸���ʹ�ã�������Ȥ����ϵ<a href="mailto:xiaxiao@cau.edu.cn" id="email">��������</a></p>
	<p>��Ȩ���У�����һ��Ȩ�������������Ҽ��ƽ̨���������ݽ������ԣ����κη������⼰���ղ��е��κ����Ρ�</p>
	</div>
    
    </div>
</body>
</html>

