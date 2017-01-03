<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
     public function __construct(){
        parent::__construct();
        cookie('nav',MODULE_NAME,time()+24*3600);
    }
    public function index(){
    	$this->display();
    }

    public function checklogin(){
    	$user = M('user');
    	$map['user_name'] = addslashes($_POST['user_name']);
    	$map['user_pwd'] = md5($_POST['user_pwd']);
    	$count = $user->where($map)->count();
    	if($count == 1){
            cookie('username',$map['user_name'],time()+24*3600);
    		$this->success("登录成功",U('Index/index'));
    	}else{
    		$this->error("登录失败，请重新登录",U('Login/index'));
    	}
    }
}