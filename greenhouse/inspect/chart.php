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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="newdata.js" type="text/javascript"></script>
</head>
<body>
<div id = "chart1" style="min-width:800px;height:400px">
	<script>
	$(function () { 
    $('#chart1').highcharts({                   //ͼ��չʾ��������div��id����һ��
        chart: {
            type: 'column'                         //ָ��ͼ������ͣ�Ĭ��������ͼ��line��
        },
        title: {
            text: 'My first Highcharts chart'      //ָ��ͼ�����
        },
        xAxis: {
            categories: ['my', 'first', 'chart']   //ָ��x�����
        },
        yAxis: {
            title: {
                text: 'something'                  //ָ��y��ı���
            }
        },
        series: [{                                 //ָ��������
            name: 'Jane',                          //��������
            data: [1, 0, 4]                        //����
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