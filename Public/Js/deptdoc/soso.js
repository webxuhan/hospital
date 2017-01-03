/*科室显示*/
	/*k1=document.getElementById("k1");
	var http1=ajax_create();

	ajax_progress(http1,"get",URL+'?act=dept','NULL',getdp);
	function getdp(){
		xml=http1.responseXML;
		all_ys=xml.getElementsByTagName("dept");
		//alert(all_prov);
		for(var i=0;i<all_ys.length;i++){
			one_ys=all_ys.item(i);
			id=one_ys.firstChild.firstChild.nodeValue;
			name=one_ys.lastChild.innerHTML;
			var option = document.createElement("option");
			option.setAttribute("value",id);
			var text=document.createTextNode(name);
			option.appendChild(text);
			k1.appendChild(option);
		}
	}*/

	$.ajax({
		url: URL,
		method:'post',
		data:'act=dept',
		dataType: "json",
		success: function(rs){
			
			console.log(rs);
		}
	})

	
