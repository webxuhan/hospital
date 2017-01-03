<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="fresh zone, free theme, free templates, templatemo, dualSlider, CSS, HTML" />
<meta name="description" content="Fresh Zone Theme, free CSS template provided by templatemo.com" />
<link href="__PUBLIC__/Css/hospital/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/hospital/ddsmoothmenu.css" />

<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/hospital/ddsmoothmenu.js">
/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="__PUBLIC__/Css/hospital/jquery.dualSlider.0.2.css" />

<script src="__PUBLIC__/Js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/Js/hospital/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="__PUBLIC__/Js/hospital/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="__PUBLIC__/Js/hospital/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $("#carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        console.log(getCookie('nav'));

        $(".ddsmoothmenu>ul>li>a").on("click",function(){
           $(".ddsmoothmenu>ul>li>a").removeClass("selected");
           $(this).addClass("selected");
        })
    });
     
    function getCookie(sName){
        // cookies are separated by semicolons
        var aCookie = document.cookie.split("; ");
        //alert(document.cookie);
        for (var i=0; i < aCookie.length; i++)
        {
            // a name/value pair (a crumb) is separated by an equal sign
            var aCrumb = aCookie[i].split("=");
            if (sName == aCrumb[0])
            return unescape(aCrumb[1]);
        } // a cookie with the requested name does not exist
        return "";
    }

</script>

    <link rel="stylesheet" type="text/css" media="all" href="__PUBLIC__/Css/hospital/yuyue.css"/>

</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a href="#">山西省第一医院</a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
           <ul>
           		<li style="margin-top:10px;margin-right:20px;" id="yonghu">您好&nbsp;<?php echo ($_COOKIE['username']); ?></li>
                <li><a href="__APP__/Index" class="selected">主页1</a></li>
                <li><a href="__APP__/Dept/index">科室</a></li>
                <li><a href="#">预约挂号</a>
                	 <ul>
                        <li><a href="__APP__/Appoint?num=1">普通挂号</a></li>
                        <li><a href="__APP__/Appoint?num=2">专家挂号</a></li>
                        <li><a href="__APP__/Appoint?num=3">急诊挂号</a></li>
                    </ul>
                </li>
                <li><a href="__APP__/Contact/index">建议</a></li>
                <li><a href="#">用户</a>
                    <ul>
                        <li><a href="__APP__/Login">用户登录</a></li>
                        <li><a href="__APP__/Register">用户注册</a></li>
                         <li><a href="__APP__/Index/logout">用户注销</a></li>
                    </ul>
                </li>
                <li><a href="#">管理员</a>  
                	 <ul>
                        <li><a href="#">登录后台</a></li>
                    </ul>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- END of templatemo_header -->
</div> <!-- END of templatemo_header_wrapper -->


    	<div id="templatemo_main_wrapper">
    <div id="templatemo_main">

        <div class="yuyue">
            <?php if(isset($value)): ?><!--搜索选择框开始-->
            <div class="soso">
                <form action="#" method="post">
                   <input type="text" value="<?php echo ($value); ?>" class="xuan" disabled="disabled"> 
                    <select class="xuan1" id="k1" name="keshi">
                        <option>-----------请选择科室-----------</option>
                        <?php if(is_array($dept_arr)): foreach($dept_arr as $key=>$dept): ?><option value="<?php echo ($dept["small_id"]); ?>"><?php echo ($dept["small_name"]); ?></option><?php endforeach; endif; ?>
                    </select>
                    <select class="xuan2" id="k2" name="yisheng" disabled="disabled">
                        <option>-----------请选择医生-----------</option>
                        
                    </select>
                    <input type="button" value="确认" class="xuan3">
                </form>
            </div>
            <!--搜索选择框结束--><?php endif; ?>
            <div class="xinxi">
        <p class="tishi">温馨提示：</p>
        <p class="ts_n">可预约7日内号源，每日07:00放号，每日17:0.
    0截止当日预约，最迟就诊当日17:00预约取消。需提前30分钟取号。建议您提前50分钟到医院，携带您的有效身份证件办理诊疗卡取号。</p>
        <button class="tishi2">预约须知</button>
    </div>
    
        </div>
          
       
    </div> <!-- END of templatemo_main_wrapper -->
</div> <!-- END of templatemo_main -->


    <div id="templatemo_footer_wrapper">
    	<div id="templatemo_footer">
        	Copyright © 2048 <a href="#">山西省医院</a> | Template from <a href="http://www.cssmoban.com" target="_parent" title="网站模板">山西源</a>
        </div> <!-- END of templatemo_footer -->
    </div> <!-- END of templatemo_footer_wrapper -->


    <!-- <script src="__PUBLIC__/Js/jquery-1.9.1.min.js"></script> -->
    <!-- <script type="text/javascript" src="__PUBLIC__/Js/deptdoc/ajax.js"></script> -->
    <!-- <script type="text/javascript" src="__PUBLIC__/Js/deptdoc/soso.js"></script> -->
    <script>
        $(function(){
            //给选择科室监听事件
            $('#k1').change(function(){
               $("#k2").children(":not(:first)").remove();
               if($(this).val() == "-----------请选择科室-----------"){  
                    $("#k2").attr("disabled",true);
               }else{
                    $("#k2").attr("disabled",false);
                    $.ajax({
                    url: '<?php echo U("Appoint/depttype");?>',
                    method:'post',
                    data:'kid='+$(this).val(),  
                    dataType: "json",
                    success: function(rs){ 
                        console.log("r1",rs);
                       if(rs!=null){
                         rs.forEach(function(item){
                            var doctorOption = "<option value='"+item.doctor_id+"'>"+item.doctor_name+"</option>";
                            $("#k2").append(doctorOption);
                        });
                       }
                    }
                })     
               }
            });
            //点击提交挂号信息
           
            $(".xuan3").off("click");
            $(".xuan3").on("click",function(){
                 if($("#k1").val()!="-----------请选择科室-----------" && $("#k2").val()!="-----------请选择医生-----------"){
                    $.ajax({
                        url:'<?php echo U("Appoint/index");?>',
                        dataType:"html",
                        method:"post",
                        data:'dept_id='+$("#k1").val()+'&doctor_id='+$("#k2").val(),
                        success: function(rs){
                           $(".yuyue").append(rs);
                       }
                    });
                    
                 }else{
                    //确认之前验证
                    alert("请选择科室和医生！");
                 }
            });
        });
        
    </script>

</body>
</html>