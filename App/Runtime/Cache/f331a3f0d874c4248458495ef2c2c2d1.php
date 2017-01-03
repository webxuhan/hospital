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
        $(".ddsmoothmenu>ul>li>a").on("click",function(){
           $(".ddsmoothmenu>ul>li>a").removeClass("selected");
           $(this).addClass("selected");
        })
    });
     
</script>

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


        <div id="templatemo_slider_wrapper">
    <div id="templatemo_slider">
    <div id="carousel">
        <div class="panel">
                <div class="details_wrapper">
                    <div class="details">
                        <div class="detail">
                            <h2><a href="#">医院风貌</a></h2>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;人民医院是山西省委省政府投资建设的规模最大、功能最全、标准最高的现代化综合性医疗卫生机构，具有医疗、教学、科研、防保、急救、康复六位一体的功能和区域医疗中心的作用。</p>
                            <a href="#" title="Read more" class="more">更多</a>
                        </div><!-- /detail -->
                        
                        <div class="detail">
                            <h2><a href="#">舒适的病房区</a></h2>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;安静的病房区正好可以使病人们处于一个良好的环境中，从而保持心情愉快，减少了外界因素的干扰，旁边的护士站也尽责的观察者每个病人的状态。</p>
                            <a href="#" title="Read more" class="more">更多</a>
                        </div><!-- /detail -->
                        
                        <div class="detail">
                            <h2><a href="#">关爱健康</a></h2>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;我院致力于关注每一位患者的情况以及广大人民群众的健康状况。希望大家注意好自己的身体，随时关注自己的健康问题，保持最佳状态。</p>
                            <a href="#" title="Read more" class="more">更多</a>
                        </div><!-- /detail -->
                    
                    </div><!-- /details -->
                    
                </div><!-- /details_wrapper -->
                
                <div class="paging">
                    <div id="numbers"></div>
                    <a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
                    <a href="javascript:void(0);" class="next" title="Next">Next</a>
                </div><!-- /paging -->
                
                <a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a>
                <a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a>
                
            </div><!-- /panel -->
            
            <div id="slider-image-frame">
                <div class="backgrounds">
                    
                    <div class="item item_1">
                        <img src="__PUBLIC__/Images/slider/07.jpg" alt="Image 07" />
                    </div><!-- /item -->
                    
                    <div class="item item_2">
                        <img src="__PUBLIC__/Images/slider/05.jpg" alt="Image 05" />
                    </div><!-- /item -->
                    
                    <div class="item item_3">
                        <img src="__PUBLIC__/Images/slider/08.jpg" alt="Image 08" />
                    </div><!-- /item -->
                    
                </div><!-- /backgrounds -->
            </div>
        </div>
    </div> <!-- END of templatemo_slider -->
</div> <!-- END of templatemo_slider_wrapper -->

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
        <div class="homepage_post col half float_l">
            <h2>医学指南: 山西省第十三届肾脏病学术年会</h2>
            <div class="post_meta">山西省医院 | 山西省太原市2016年10月21日</div>
            <img src="__PUBLIC__/Images/templatemo_image_10.jpg" class="image_fl imgage-with-frame" alt="Image 10"/>
            <p><em> 欢迎我省各级医院肾脏病医护人员、血液净化、营养专业人员及研究生积极参与！</em></p>
            <p><a href="#" target="_parent"> 山西省第十三届肾脏病学术年会</a> 暨第五届黄河论坛、第三届中原论坛会议定于2016年10月21日~23日在山西省人民医院（太原市双塔寺街29号）举行。届时将邀请国内外知名的肾脏病学家进行专题讲座。会议将围绕“急性肾损伤（<a href="#" rel="nofollow"><strong>AKI</strong></a> ）防治”这一主题，对临床常见肾脏病的诊断、治疗及预防进行学术交流，总结肾脏病学的临床和基础研究经验，旨在推动我省肾脏病学的交流和肾脏病工作的深入开展。</p>
            <a href="#" class="more"></a>
        </div>
        
        <div class="col half float_r">
            <h2>&nbsp;&nbsp;医院新闻</h2>
            <p><em>&nbsp;&nbsp;&nbsp;时刻关注医院新闻，了解医院最新动态</em></p> 
            
            <ul class="templatemo_list">
                <li class="flow"><a href="#">我院举办世界关节炎日暨骨质疏松日义诊活动</a></li>
                <li class="flow"><a href="#">省委任命张晓清同志担任我院党委书记</a></li>
                <li class="flow"><a href="#">我院关于招聘聘用制护士的通知</a></li>
                <li class="flow"><a href="#">敬老月难忘前辈 送温暖传递真情</a></li>
                <li class="flow"><a href="#">我院开展全国高血压日暨重阳节爱心义诊活动</a></li>
                <li class="flow"><a href="#">二十五载春秋割舍不断日本客人对省医的情怀</a></li>
                <li class="flow"><a href="#">李荣山院长率队到医务处指导调研</a></li>
                <li class="flow"><a href="#">我院获省卫计委离退休人员健身舞比赛金奖</a></li>
            </ul>
        </div>
        
        <div class="cleaner h40"></div>
        
        <div id="food-gallery">
            <h2>医资力量</h2>
            <?php if(is_array($yishi)): foreach($yishi as $key=>$one): ?><div class="col one_fourth fp_rw">  
                <img src='<?php echo ($one["doctor_pic"]); ?>' alt="Image 06" class="imgage-with-frame" />
                <h5><?php echo ($one["doctor_name"]); ?></h5>
                <p><?php echo ($one["small_name"]); echo ($one["dtype_name"]); ?></p>
                <p><?php echo ($one["doctor_detail"]); ?></p>
            </div><?php endforeach; endif; ?>
        </div>
                
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main_wrapper -->
</div> <!-- END of templatemo_main -->
    

    <div id="templatemo_footer_wrapper">
    	<div id="templatemo_footer">
        	Copyright © 2048 <a href="#">山西省医院</a> | Template from <a href="http://www.cssmoban.com" target="_parent" title="网站模板">山西源</a>
        </div> <!-- END of templatemo_footer -->
    </div> <!-- END of templatemo_footer_wrapper -->


</body>
</html>