<?php
header("content-type:text/html;charset=utf8");
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$username = cookie('username');
    	$this->assign('username',$username);
    	$sql = "select d.doctor_name,d.doctor_pic,d.doctor_detail,t.dtype_name,s.small_name
		from doctor d,dept_small s,doct_type t 
		where d.dtype_id=t.dtype_id and d.small_id=s.small_id
		order by t.dtype_id desc
		limit 4";
		$demo = new Model();
		$list = $demo->query($sql);
		$this->assign('yishi',$list);
    	$this->display();
    }

    public function logout(){
        // 退出
    	cookie('username',$username,null);
    	$this->success('退出成功',U('Login/index'));
    }

    
}