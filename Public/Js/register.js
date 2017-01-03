/**
 * @author Administrator
 */

//获得随机颜色值，参数a是透明值0~1
	function color(a){
		r = parseInt(Math.random()*254);
		g = parseInt(Math.random()*254);
		b = parseInt(Math.random()*254);
		return "rgba("+r+","+g+","+b+","+a+")";
	}

	//获得随机的文字
	var fontarr= new Array();
	var upp= new Array();
	var num= new Array();
	var low =['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','y','v','w','x','y','z'];
	for(var i=0;i<low.length;i++){
		upp[i] = low[i].toUpperCase();	
		if(i<=9)
		{
			num[i] = i.toString();
		}
	}
	fontarr = Array.concat(low,upp,num);
	function font(){	
		len = fontarr.length;
		key = parseInt(Math.random()*len);
		return fontarr[key];
	}
	//页面一加载画布中形成随机文字
	var canvas = document.getElementById("sysck");
	function show(){
		var context = canvas.getContext("2d");
		context.clearRect(0,0,100,34);
		context.font = "16px 微软雅黑";
		
		context.beginPath();//背景色
		context.fillStyle=color(0.5);
		context.fillRect(0,0,100,34);
		context.closePath();
		//文字四个，y选用可显示的位置：15,20,25,30
		//x选用可显示的位置：10,35,60,80
		xarr=[10,35,60,80];
		yarr=[15,20,25,30];
		var fontstr="";
		for(var i=0;i<4;i++){
			context.beginPath();
			context.fillStyle=color(0.9);
			f = font();
			fontstr += f;
			x = xarr[i];
			k = parseInt(Math.random()*3);
			y = yarr[k];
			context.fillText(f,x,y);
			context.closePath();
			
		}
		
		//将随机文字存储到session中
		sessionStorage.setItem("sysck",fontstr);
	}
	show();
	//画布被点击，画布中的文字更新
	canvas.onclick = function(){
		show();
	};
	//表单提交验证
	document.getElementsByTagName("button")[0].addEventListener("click",function(){
		var username = document.getElementsByTagName("input")[0];
		var repwd = document.getElementsByTagName("input")[2];
		var userck = document.getElementById("yanzhen");
		var userpwd=document.getElementById("pwd");
		//1.验证用户名、验证码非空且满足要求
		//2.验证码输入正确
		//3.记住用户名在本地中
		//4.提交表单（跳转到index.html）
		username.setCustomValidity("");
		if(!username.checkValidity()){
			username.setCustomValidity("请输入正确的用户名");
			return;
		}
		userpwd.setCustomValidity("");
		if(!userpwd.checkValidity()){
			userpwd.setCustomValidity("请输入正确的密码");
			return;
		}
		repwd.setCustomValidity("");
		//alert(repwd.value);
		if(repwd.value!=pwd.value){
			repwd.setCustomValidity("请输入与上一次相同的密码");
			return;
		}
		userck.setCustomValidity("");
		if(!userck.checkValidity()){
			userck.setCustomValidity("验证码不能为空");
			return;
		}
		if(userck.value != sessionStorage.getItem("sysck")){
			userck.setCustomValidity("验证码错误");
			return;
		}
		localStorage.setItem("username",username.value);
		document.getElementsByTagName("form")[0].submit();
	},false);
