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
        
    });
     
</script>

    <link rel="stylesheet" type="text/css" media="all" href="__PUBLIC__/Css/hospital/doctor.css"/>
    <link rel="stylesheet" type="text/css" media="all" href="__PUBLIC__/Css/hospital/dept_detail.css"/>

</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a href="#">山西省第一医院</a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
           <ul>
           		<li style="margin-top:10px;margin-right:20px;" id="yonghu">您好&nbsp;<?php echo ($_COOKIE['username']); ?></li>
                <li><a href="__APP__/Index" class="selected">主页</a></li>
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
        <div class="dept_wrap">
            <div class="dept_left">
                <img src="__PUBLIC__/Images/yike.png">
                <button class="btn1"></button>
                  <button class="btn2"></button>
            </div>
            <div class="dept_right">
            <?php if(is_array($arr_doc)): foreach($arr_doc as $key=>$v): ?><div class="gallery_box">
                    <div class="doc_l">
                        <a href="<?php echo ($v['doctor_pic']); ?>" rel="lightbox[portfolio]">  <img src="<?php echo ($v['doctor_pic']); ?>" alt="Image 07" class="imgage-with-frame" /></a>
                        <h5><?php echo ($v['doctor_name']); ?></h5>
                    </div>
                    <div class="doc_r">
                        <p> 许建英，医学博士 教授，博士生导师，享受政府特殊津贴。现任山西医学科学院，山西大医院呼吸科主任。中华医学会内科学分会全国委员，山西省呼吸病专业委员会主任委员，省呼吸医师分会副会长，省应急管理专家，“卫生部抗生素临床合理应用全国普及计划”专家，中华结核和呼吸杂志通讯编委、国际呼吸等杂志的编委。荣获山西省“五一”劳动奖章、省卫生系统有突出贡献人才、第二届中国呼吸医师提名奖、巾帼建功标兵及山西名医等荣誉称号。</p>
                         <button class="gua" id="<?php echo ($v['doctor_id']); ?>">预约挂号</button>
                    </div>
                </div><?php endforeach; endif; ?>  
        
        <div class="cleaner"></div>
        <div class="pagging" align="center">
            <?php echo ($page); ?>
        </div>   
        <div class="cleaner"></div>
                
        <div class="cleaner"></div>

    </div> <!-- END of templatemo_main_wrapper -->
</div> <!-- END of templatemo_main -->

                
            </div>     
        </div>  
       
    </div> <!-- END of templatemo_main_wrapper -->
</div> <!-- END of templatemo_main -->


    <div id="templatemo_footer_wrapper">
    	<div id="templatemo_footer">
        	Copyright © 2048 <a href="#">山西省医院</a> | Template from <a href="http://www.cssmoban.com" target="_parent" title="网站模板">山西源</a>
        </div> <!-- END of templatemo_footer -->
    </div> <!-- END of templatemo_footer_wrapper -->


<script type="text/javascript" src="__PUBLIC__/Js/hospital/jquery-1.3.2.min.js"></script>
<script>
window.onload=function(){
    document.getElementsByClassName("btn1")[0].onclick=function(){
        window.location= "__URL__/dept_detail?dp_name=<?php echo ($dp_name); ?>";
        };
    document.getElementsByClassName("btn2")[0].onclick=function(){
        window.location="__URL__/doctor?dp_name=<?php echo ($dp_name); ?>";
        };
}

$(".gua").click( function () { 
    id = this.id;
    window.location = "__APP__/Appoint?doctor_id="+id;
});
</script>

</body>
</html>