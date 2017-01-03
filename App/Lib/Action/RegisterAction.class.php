<?php
// 本类由系统自动生成，仅供测试用途
class RegisterAction extends Action {
     public function __construct(){
        parent::__construct();
        cookie('nav',MODULE_NAME,time()+24*3600);
    }
    public function index(){
    	$this->display();
    }

    public function check(){
    	$user = M('user');
        $_POST['user_name'] = addslashes($_POST['user_name']);
        $map['user_name'] = $_POST['user_name'];
        $count = $user->where($map)->count();
        if($count == 0){
            $_POST['user_pwd'] = md5($_POST['user_pwd']);
            $user->data($_POST)->add();
            $this->success("注册成功",U('Login/index'));
        }else{
            $this->error("该用户名已被注册，请重新注册",U('Register/index'));
        }
    }
}