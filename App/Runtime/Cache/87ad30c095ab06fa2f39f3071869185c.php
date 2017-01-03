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
         // console.log(getCookie('nav'));
         var cookies = getCookie('nav');
         console.log(cookies);
         $(".ddsmoothmenu>ul>li>a").removeClass("selected");
         switch(cookies){
            case 'Index':
                $(".ddsmoothmenu>ul>li").eq(1).children("a").addClass("selected");
                break;
            case 'Dept':
                $(".ddsmoothmenu>ul>li").eq(2).children("a").addClass("selected")
                break;
            case 'Appoint':
                $(".ddsmoothmenu>ul>li").eq(3).children("a").addClass("selected")
                break;
            case 'Contact':
                $(".ddsmoothmenu>ul>li").eq(4).children("a").addClass("selected")
                break;
            case 'Contact':
                $(".ddsmoothmenu>ul>li").eq(5).children("a").addClass("selected")
                break;
            case 'Register':
                $(".ddsmoothmenu>ul>li").eq(6).children("a").addClass("selected")
                break;
        }
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

	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/hospital/dept.css"/>

</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a href="#">山西省第一医院</a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
           <ul>
           		<li style="margin-top:10px;margin-right:20px;" id="yonghu">您好&nbsp;<?php echo ($_COOKIE['username']); ?></li>
                <li><a href="__APP__/Index" class="selected">主页 </a></li>
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
		        <div class="keshi">
			        <?php if(is_array($dept)): foreach($dept as $k=>$v): ?><table class="t1" cellspacing="0">
			            	<tr>
			                	<th colspan="4"><?php echo ($k); ?></th>
			                </tr>
			                <tr>
				                <?php $__FOR_START_11163__=1;$__FOR_END_11163__=count($v);for($i=$__FOR_START_11163__;$i < $__FOR_END_11163__;$i+=1){ ?><td><a href="__APP__/Dept/dept_detail/dp_name/<?php echo ($v[$i-1]); ?>"><?php echo ($v[$i-1]); ?></a></td>
					            	<?php if($i%4 == 0): ?></tr><?php endif; } ?>
			            </table><?php endforeach; endif; ?>  
		        </div>
   			</div> <!-- END of templatemo_main_wrapper -->
		</div> <!-- END of templatemo_main -->
    

    <div id="templatemo_footer_wrapper">
    	<div id="templatemo_footer">
        	Copyright © 2048 <a href="#">山西省医院</a> | Template from <a href="http://www.cssmoban.com" target="_parent" title="网站模板">山西源</a>
        </div> <!-- END of templatemo_footer -->
    </div> <!-- END of templatemo_footer_wrapper -->


</body>
</html>