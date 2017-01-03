<?php
header("content-type:text/html;charset=utf8");
// 本类由系统自动生成，仅供测试用途
class DeptAction extends Action {
    public function __construct(){
        parent::__construct();
        cookie('nav',MODULE_NAME,time()+24*3600);
    }

    public function index(){
        //科室信息
        $bdept = M('dept_big');
        $arr_big = $bdept->field('big_name')->select();
        $sql="select b.big_name,s.small_name from dept_big b,dept_small s 
            where b.big_id=s.big_id";
        $demo = new Model();
        $arr_small = $demo->query($sql);
        $dept=array();
        foreach ($arr_big as $bv){
            $big_name=$bv['big_name'];
            foreach ($arr_small as $sv){
                if($big_name==$sv['big_name']){
                    $dept[$big_name][]=$sv['small_name'];
                }
            }
        }
        $this->assign("dept",$dept);
        $this->display('dept');
    }

    public function dept_detail(){
        //科室详情
        if (isset($_GET['dp_name'])){
            $dp_name=$_GET['dp_name'];
            $dp = M('dept_small');
            $map['small_name'] = $_GET['dp_name'];
            $arr = $dp->where($map)->select();
            $this->assign("pt_detail",$arr);
            /*记住科室名称，分页需要*/
            cookie("dname",$dp_name,time()+24*3600);
        }
        $this->display('dept_detail');
    }

    public function doctor(){
         if (isset($_GET['dp_name'])){
            $dp_name=$_GET['dp_name'];
            $db = new Model();
            //分页
            $sql1="select count(d.doctor_name) as d_num
                from doctor d,dept_small s
                where d.small_id=s.small_id and s.small_name='{$dp_name}'";
            $c_num=$db->query($sql1);
            import('ORG.Util.Page');// 导入分页类
            $count = $c_num[0]['d_num'];// 查询满足要求的总记录数
            $Page = new Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数
            $show = $Page->show();// 分页显示输出

            $sql="select d.doctor_id,d.doctor_name,d.doctor_pic
            from doctor d,dept_small s
            where d.small_id=s.small_id and s.small_name='{$dp_name}' 
            limit $Page->firstRow,$Page->listRows";
            $arr_doc=$db->query($sql);
            $this->assign('dp_name',$dp_name);
            $this->assign("arr_doc",$arr_doc);
            $this->assign('page',$show);// 赋值分页输出

         }

        $this->display('doctor');
    }
}