<?php if (!defined('THINK_PATH')) exit();?><meta charset="UTF-8">
<link href="__PUBLIC__/Css/hospital/patient.css" rel="stylesheet" type="text/css" />
<div class="wrap">
	<form action="__URL__/patinfor" method="post">
	<table>
		<tr>
			<td colspan="2" class="title_bottom"><b>挂号信息</b></td>
		</tr>
		<tr>
			<td>医师：</td>
			<td><?php echo ($doctor_name); ?><input type="hidden" name="doctor_id" value="<?php echo ($doctor_id); ?>"></td>
		</tr>
		<tr>
			<td>挂号者姓名：</td>
			<td><input type="text" name="patient_name" required></td>
		</tr>
		<tr>
			<td>性别：</td>
			<td>
				<input type="radio" name="patient_sex" class="sex" value="1">男
				<input type="radio" name="patient_sex" class="sex" value="0">女
			</td>
		</tr>
		<tr>
			<td>身份证号：</td>
			<td><input type="text" name="patient_IDcard" required></td>
		</tr>
		<tr>
			<td>邮箱：</td>
			<td><input type="text" name="patient_email" required></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="提交" class="btn"></td>
		</tr>
	</table>
	</form>
</div>