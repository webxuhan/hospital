<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>登录</title>
  <link href="__PUBLIC__/Css/Wopop_files/style_log.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Wopop_files/style.css">
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Wopop_files/userpanel.css">
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Wopop_files/jquery.ui.all.css">
</head>

<body class="login" mycollectionplug="bind">
<div class="login_m">
<div class="login_logo"><img src="__PUBLIC__/Images/logo.png" width="196" height="46"></div>
<div class="login_boder">

<div class="login_padding" id="login_model">
<form action="__URL__/checklogin" method="post">
  <h2>用户名</h2>
  <label>
    <input type="text" id="username" name="user_name" class="txt_input txt_input2" placeholder="请输入用户名" required>
  </label>
  <h2>密码</h2>
  <label>
    <input type="password" name="user_pwd" id="userpwd" class="txt_input" placeholder="请输入密码" required>
  </label>
 
  <p class="forgot">
  <span style="float:left;"><a href="__APP__/Register/index">注册</a></span>
  <a id="iforget" href="javascript:void(0);">忘记密码？</a></p>
  <div class="rem_sub">
  <div class="rem_sub_l">
  <label><input type="checkbox" name="checkbox" id="save_me">&nbsp;记住密码</label>
   </div>
    <label>
      <input type="submit" class="sub_button"  id="button" value="登录" style="opacity: 0.7;">
    </label>
  </div>
  </form>
</div>

<div id="forget_model" class="login_padding" style="display:none">

<!--login_padding  Sign up end-->
</div><!--login_boder end-->
</div><!--login_m end-->
 <br> <br>
<p align="center">山西省太原市  <a href="">山西人民医院</a></p>

</body></html>