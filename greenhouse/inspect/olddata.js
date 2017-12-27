var xmlHttp
	var page
	function gotoPage()
	{
		page = document.getElementById("textP").value
		page = (page-1)*10;
		showTable();
	}
	
	function nextPage(lastpage)
	{
		if(document.getElementById("textP").value==lastpage)
			alert("已经是最后一页！")
		else
		{
			document.getElementById("textP").value++
			page = document.getElementById("textP").value
			page = (page-1)*10;
			showTable()
		}
	}
	
	function previousPage()
	{
		if(document.getElementById("textP").value==1)
			alert("已经是第一页！")
		else
		{
			document.getElementById("textP").value--
			page = document.getElementById("textP").value
			page = (page-1)*10;
			showTable()
		}
	}

	function showTable()
	{ 
	xmlHttp=GetXmlHttpObject()
	if (xmlHttp==null)
	 {
	 alert ("Browser does not support HTTP Request")
	 return
	 }
	var url="getolddata.php"
	url=url+"?q="+page
	xmlHttp.onreadystatechange=stateChanged 
	xmlHttp.open("GET",url,true)	
	xmlHttp.send(null)
	}

	function stateChanged() 
	{ 
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	 { 
	 document.getElementById("olddataTable").innerHTML=xmlHttp.responseText 
	 } 
	}

	function GetXmlHttpObject()
	{
	var xmlHttp=null;
	try
	 {
	 // Firefox, Opera 8.0+, Safari
	 xmlHttp=new XMLHttpRequest();
	 }
	catch (e)
	 {
	 //Internet Explorer
	 try
	  {
	  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
	  }
	 catch (e)
	  {
	  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	 }
	return xmlHttp;
	}