<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<meta charset="UTF-8">
<title>注册</title>
<link href="__PUBLIC__/Css/register.css" rel="stylesheet" type="text/css">
<div id="top">
	<img src="__PUBLIC__/Images/logo.png">
</div>
<div id="wrap">
<div id="register">
	<form action="__URL__/check" method="post">
	<input type="text" id="user" placeholder="请输入用户名" name="user_name"
	autofocus required pattern="^\w{3,16}$">
	<br>
	<input type="password" id="pwd" placeholder="请输入密码" name="user_pwd"
	required pattern="^\w{3,16}$">
	<br>
	<input type="password" id="repwd" placeholder="请再次输入密码" name="repwd"
	required>
	<br>
	<input type="text" id="yanzhen" placeholder="请输入图片验证码"
	required pattern="^[a-zA-Z0-9]{4}$">
	<span>
	<canvas id="sysck" width="100" height="50" title="点击换一张">
	系统不支持</canvas>
	</span>
	<br><br>
	<button id="sbmit">注册</button>
	</form>
	<br>
	<a href="__APP__/Login/index">返回登录</a>
</div>
</div>
<script src="__PUBLIC__/Js/register.js"> </script>