<?php
// 本类由系统自动生成，仅供测试用途
class PatientAction extends Action {
     public function __construct(){
        parent::__construct();
        cookie('nav',MODULE_NAME,time()+24*3600);
    }
    public function index(){
        $doc = M('doctor');
        $map['doctor_id'] = $_GET['doctor_id'];
        $doctor = $doc->where($map)->field('doctor_name')->select();
        $doctor_name = $doctor[0]['doctor_name'];

        $this->assign('doctor_id',$_GET['doctor_id']);
        $this->assign('doctor_name',$doctor_name);
        
    	$this->display('patient');
    }

    public function patinfor(){

    }

}