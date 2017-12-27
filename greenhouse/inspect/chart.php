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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="newdata.js" type="text/javascript"></script>
</head>
<body>
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
	</body>
	</html>