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
	<script src="http://code.highcharts.com/adapters/standalone-framework.js"></script>
	<script src="newdata.js" type="text/javascript"></script>
</head>
<body onload="showTable()">
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
	<br/>
	<h1>实时数据</h1>
	<br/><br/><hr/>
	<div id="newdataTable">
	</div>
	<hr/>
	<div align="center">
	<form action="">
	<input type="button" value="手动刷新" style="height:30px;width:100px;font-size: 16px;" onclick="showTable()">
	</form>	
	</div>
	
	<hr/>
	<div id = "chart1" style="min-width:800px;height:400px">
	<script>
	$(function () { 
    $('#chart1').highcharts({                   //图表展示容器，与div的id保持一致
        chart: {
            type: 'column'                         //指定图表的类型，默认是折线图（line）
        },
        title: {
            text: 'My first Highcharts chart'      //指定图表标题
        },
        xAxis: {
            categories: ['my', 'first', 'chart']   //指定x轴分组
        },
        yAxis: {
            title: {
                text: 'something'                  //指定y轴的标题
            }
        },
        series: [{                                 //指定数据列
            name: 'Jane',                          //数据列名
            data: [1, 0, 4]                        //数据
        }, {
            name: 'John',
            data: [5, 7, 3]
        }]
    });
	});
</script>
	</div>
	
	
    </div>
    
	<div id="footer">
	<p>本智能温室监控平台目前仅限个人使用，如有兴趣请联系<a href="mailto:xiaxiao@cau.edu.cn" id="email">本人邮箱</a></p>
	<p>版权所有，保留一切权利。本智能温室监控平台的所有内容仅供测试，对任何法律问题及风险不承担任何责任。</p>
	</div>
    
    </div>
</body>
</html>