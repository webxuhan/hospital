<?php
header("content-type:text/html;charset=utf8");
class AppointAction extends Action {
	public function __construct(){
        parent::__construct();
        cookie('nav',MODULE_NAME,time()+24*3600);
    }
    
    public function index(){
    	if(!$_POST['doctor_id']){
    		/*判断是什么挂号*/
			if (isset($_GET['num'])){
				$num=$_GET['num'];
				if($num==1){
					$value="普通挂号";
					$nid=1;
				}elseif($num==2){
					$value="专家挂号";
					$nid=2;
				}elseif($num==3){
					$value="急诊挂号";
					$nid=2;
				}
				/*记住医师类别*/	
				cookie("nid",$nid,time()+24*3600);	
				$this->assign("value",$value);
			}

			if(isset($_GET['doctor_id'])){
				$doctor_id = $_GET['doctor_id'];
				$dept_id = $this->dept($doctor_id);
			}elseif(isset($_POST['doctor_id']) && isset($_POST['dept_id'])){
				$doctor_id = $_POST['doctor_id'];
				$dept_id = $_POST['$dept_id'];
			}
			/*得到医生的id和科室  查询他们的详细信息*/
			if(isset($doctor_id) && isset($dept_id)){
				$this->doc_detail($dept_id,$doctor_id);
			}

			$this->assign('doctor_id',$doctor_id);
			//医生工作日期
			$arr_cal = $this->calendar();
			$this->assign('arr_cal',$arr_cal);
			//预约日期
			$arr_week = $this->weekday($doctor_id,$arr_cal);
			$this->assign('arr_week',$arr_week);

			//科室
			$dept = M('dept_small');
			$dept_arr = $dept->field('small_id,small_name')->select();
			// print_r($dept_arr);
			$this->assign('dept_arr',$dept_arr);
			$this->depttype();
	    	$this->display();
    	}else{
    		//得到医生详情
		$dept_id=$_POST['dept_id'];
		$doctor_id=$_POST['doctor_id'];
		$db = new Model();
		$sql="select d.doctor_name,d.doctor_pic,d.doctor_year,d.doctor_detail,
			t.dtype_name,s.small_name,n.doc_num
			from doctor d,dept_small s,doct_type t,doc_num n
			where d.dtype_id=t.dtype_id and d.small_id = s.small_id
			and d.doctor_id={$doctor_id} and s.small_id={$dept_id} 
			and d.doctor_id=n.doctor_id";
		$arr=$db->query($sql);
		//医生工作日期
		$arr_cal = $this->calendar();
		$this->assign('arr_cal',$arr_cal);
		//预约日期
		$arr_week = $this->weekday($doctor_id,$arr_cal);
		$this->assign('arr_week',$arr_week);

		$this->assign("doctor_name",$arr[0]['doctor_name']);
		$this->assign("doctor_pic",$arr[0]['doctor_pic']);
		$this->assign("doctor_year",$arr[0]['doctor_year']);
		$this->assign("doctor_detail",$arr[0]['doctor_detail']);
		$this->assign("dtype_name",$arr[0]['dtype_name']);
		$this->assign("small_name",$arr[0]['small_name']);
		$this->assign("doc_num",$arr[0]['doc_num']);
    		echo $this->fetch('fetch');
    	}
    	
    }

    public function depttype(){ 		
    	//print_r($_POST);
    	$kid = $_POST['kid'];
    	$nid = $_COOKIE['nid'];
    	$doc = M('doctor');
    	$map['small_id'] = $kid;
    	$map['dtype_id'] = $nid;
    	$doc_arr = $doc->field('doctor_id,doctor_name')->where($map)->select();
    	echo json_encode($doc_arr);
    	
	}

	public function doc_detail($dp_id,$doc_id){
		//得到医生详情
		$dept_id=$dp_id;
		$doctor_id=$doc_id;
		$db = new Model();
		$sql="select d.doctor_name,d.doctor_pic,d.doctor_year,d.doctor_detail,
			t.dtype_name,s.small_name,n.doc_num
			from doctor d,dept_small s,doct_type t,doc_num n
			where d.dtype_id=t.dtype_id and d.small_id = s.small_id
			and d.doctor_id={$doctor_id} and s.small_id={$dept_id} 
			and d.doctor_id=n.doctor_id";
		$arr=$db->query($sql);
		$this->assign("doctor_name",$arr[0]['doctor_name']);
		$this->assign("doctor_pic",$arr[0]['doctor_pic']);
		$this->assign("doctor_year",$arr[0]['doctor_year']);
		$this->assign("doctor_detail",$arr[0]['doctor_detail']);
		$this->assign("dtype_name",$arr[0]['dtype_name']);
		$this->assign("small_name",$arr[0]['small_name']);
		$this->assign("doc_num",$arr[0]['doc_num']);

	}

	public function dept($id){
		//获取科室id
		$map['doctor_id'] = $id;
		$doc = M('doctor');
		$dept_id =$doc->where($map)->field('small_id')->select();
		$dept_id = $dept_id[0]['small_id'];
		return $dept_id;
	}

	public function calendar(){
		/*获得当前日期，展示医生两个周的工作时间*/
		$month=date("m");
		$day=date("d");
		$xinqi=date("l");
		$year=date("Y");
		$time=time();
		$days=date("t",$time);
		$arr=array();
		$month1=$month+1;
		for($j=1;$j<12;$j++){
			$m=$day+$j;;
			if($m>$days){
				$month=$month1;
				$m-=$days;
			}
			if($month>12){
				$month=1;
			}
			$arr[$month."-".$m]=$this->getTimeWeek($time,$j);
		}
		return $arr;
		/*展示结束*/
	}

	public function getTimeWeek($time,$i=0){
			$weekarray = array("日","一", "二", "三", "四", "五", "六");
			$oneD = 24 * 60 * 60;
			return "周" . $weekarray[date("w", $time + $oneD * $i)];
		}

	public function weekday($id,$arr){
		$db = M('workdays');
		/*预约开始*/
		$map['doctor_id'] = $id;
		$arr_wds=$db->where($map)->field('work_one,work_two,work_three')->select();
		$arr_cal = $arr;
		$arr_c = array();
		foreach($arr_cal as $k=>$v){
			foreach($arr_wds as $wds){
				$arr_c[$k][$v]['yu']="——";
				foreach($wds as $w ){
					if($v==$w){
						$arr_c[$k][$v]['yu']="预约";
					}
				}
			}
		}
		/*预约结束*/
		return $arr_c;
	}
}