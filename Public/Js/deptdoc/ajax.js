function ajax_create(){
	var ajax;
	if(window.XMLHttpRequest){
		ajax=new XMLHttpRequest();
	}else{
		//IE低版本
		var version=['Microsoft.XMLHTTP','MSXML.XMLHTTP','MSXML2.XMLHTTP','Msxml2.XMLHTTP.7.0','Msxml2.XMLHTTP.6.0','Msxml2.XMLHTTP.5.0','Msxml2.XMLHTTP.4.0','MSXML2.XMLHTTP.4.0','MSXML2.XMLHTTP.3.0','MSXML2.XMLHTTP'];
		for(var k in version){
			ajax = new ActiveXObject(version[k]);
			if(ajax){break;}
		}
	}
	return ajax;
}
function ajax_progress(ajax,method,action,data,fname){
	//ajax发送收数据
	ajax.open(method,action,true);
	ajax.setRequestHeader('Content-Type',"application/x-www-form-urlencoded");
	ajax.send(data);
	//ajax接收数据
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4 && ajax.status==200){
			fname();
		}
	}
}

