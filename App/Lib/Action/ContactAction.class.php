<?php
header("content-type:text/html;charset=utf8");
// 本类由系统自动生成，仅供测试用途
class ContactAction extends Action {
    public function index(){
    	
    	$this->display('contact');
    }

    public function check(){
    	$infor = M('infor');
    	if(isset($_POST['infor_name'])){
    		$bool = $infor->add($_POST);
	    	if($bool){
	            $this->success("提交成功",U('Index/index'));
	        }else{
	            $this->error("提交失败，请重新提交",U('Contact/contact'));
	        }
    	}
    	
    }
    
}