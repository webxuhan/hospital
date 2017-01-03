<?php
	class AppointModel extends Model{

		public function dept($id){
			//获取科室id
			$map['doctor_id'] = $id;
			$doc = M('doctor');
			$dept_id =$doc->where($map)->field('small_id')->select();
			$dept_id = $dept_id[0]['small_id'];
			return $dept_id;
		}
	}
