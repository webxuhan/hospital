<?php if (!defined('THINK_PATH')) exit();?><!--盒子开始 医师介绍-->
<div class="hezi">
    <div class="doc_l">
        <a href="<?php echo ($doctor_pic); ?>" rel="lightbox[portfolio]">  <img src="<?php echo ($doctor_pic); ?>" alt="Image 07" class="imgage-with-frame" /></a>
        <h5><?php echo ($doctor_name); ?></h5>
    </div>
    <div class="doc_r">
        <p> 许建英，医学博士 教授，博士生导师，享受政府特殊津贴。现任山西医学科学院，山西大医院呼吸科主任。名医等荣誉称号。</p>
        <p style="font-weight:bold;"><?php echo ($dtype_name); ?></p>
        <p><?php echo ($doctor_detail); ?></p>
        <p>执医年限：<span><?php echo ($doctor_year); ?></span>年</p>
    </div>
    <!--右侧预约总量开始-->
     <div class="doc_n">
            <div class="ghnum_t">
                <p class="gh_t"><?php echo ($doc_num); ?></p>
                <p class="gh_f">预约总量</p>
            </div>
            <div class="ghnum_t"  style="border-left:1px solid #dddddd;">
                <p class="gh_t">222</p>
                <p class="gh_f">剩余总量</p>
            </div>
            <div class="ghnum_d">
                <img src="__PUBLIC__/Images/yiyuan_logo.png" style="float:left;margin-top:25px;">
            <p style="float:left;width:60px;margin:25px -10px;"><b>执业点</b></p>
            <p style="width:210px;margin-top:-20px;">山西省人民医院（<?php echo ($small_name); ?>）</p>
            </div>
     </div>
      <!--右侧预约总量结束-->
</div>
<!--盒子结束-->
<!--提示开始-->
<div class="xinxi">
    <p class="tishi">温馨提示：</p>
    <p class="ts_n">可预约7日内号源，每日07:00放号，每日17:0.
0截止当日预约，最迟就诊当日17:00预约取消。需提前30分钟取号。建议您提前50分钟到医院，携带您的有效身份证件办理诊疗卡取号。</p>
    <button class="tishi2">预约须知</button>
</div>
<!--提示结束-->
<!--挂号开始-->
<table border="1px" cellspacing="0" bordercolor="#50bde8">
    <tr>
        <td colspan="16" height="50px" style="font-size:24px;color:black;padding-left:10px;">预约挂号</td>
    </tr>

    <tr>
        <td colspan="16" height="50px">
        <img src="__PUBLIC__/Images/yiyuan_logo.png" style="float:left;margin-top:15px;">
            <p>执业点</p>
            <div class="zhiyd">山西省人民医院（<?php echo ($small_name); ?>）</div>
        </td>
    </tr>

    <tr height="60px" class="riqi">
        <td></td>
    <?php if(is_array($arr_cal)): foreach($arr_cal as $k=>$v): ?><td><?php echo ($k); ?><br><?php echo ($v); ?></td><?php endforeach; endif; ?>
    </tr>

    <tr height="50px" class="riqi">
        <td>挂号</td>
        <?php if(is_array($arr_week)): foreach($arr_week as $mk=>$week): if(is_array($week)): foreach($week as $wk=>$ww): if(is_array($ww)): foreach($ww as $key=>$w): if($w == '预约'): ?><td><a href="__APP__/ Patient?doctor_id=<?php echo ($doctor_id); ?>&mk=<?php echo ($mk); ?>&wk=<?php echo ($wk); ?>"><?php echo ($w); ?></a></td>
                    <?php else: ?>
                        <td><?php echo ($w); ?></td><?php endif; endforeach; endif; endforeach; endif; endforeach; endif; ?>
    </tr>
</table>
<!--挂号结束-->