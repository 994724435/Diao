<?php

namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class ProductController extends CommonController{
	public function product(){
        $memb = M('Member');
		$cate =M('mcate');
        if($_GET['id']){
        	$data=$memb->where(array('p_cate'=>$_GET['id']))->select();
			$catename1=$cate->where(array('m_id'=>$_GET['id']))->select();
        }else{
        	$data=$memb->select();
        }
		
        
		$catename=$cate->select();
        $this->assign('data',$data);
		$this->assign('catename',$catename);  //所有父类名称
		$this->assign('catename1',$catename1[0]['m_name']);  //所有父类名称
        $this->display();
	}

    public function detail(){
    	 $menmber = M('Member');
		 $data= $menmber->where(array('p_id'=>$_GET['id']))->select();
		 $num=  $data[0]['p_visit']+1;    //浏览数
		 $menmber->where(array('p_id'=>$_GET['id']))->save(array('p_visit'=>$num));
		 
		 $data1= $menmber->where(array('p_id'=>$_GET['id']-1))->select();  //上一篇
		 $data2= $menmber->where(array('p_id'=>$_GET['id']+1))->select();
		 $this->assign('data',$data[0]);
		 $this->assign('data1',$data1[0]);
		 $this->assign('data2',$data2[0]);		 
		 $this->display();
    }


}