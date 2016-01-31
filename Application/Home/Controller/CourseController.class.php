<?php

namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class CourseController extends Controller {
	public function course(){
		$procate=M('procate');
		$product=M('product');
		$result= $procate->select();    //专业
//		print_r($result);die;
        if($_GET['id']){
          $cate_name= $procate->where(array('cate_id'=>$_GET['id']))->find();	
          $Pres  = $product->where(array('pro_cate_id'=>$_GET['id']))->select(); 	
        }else{
          $Pres  = $product->select();    //所有班级	
        }
		 $this->assign('name',$cate_name['cate_name']);
        $this->assign('res',$Pres);
		$this->assign('result',$result);
		$this->display();
	}


}