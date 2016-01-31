<?php

namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class  JoinController extends Controller {
	public function news(){
		$article=M('article');
		$artcate=M('artcate');
		if($_GET['id']){
			$data= $article->where(array('art_cateid'=>$_GET['id']))->select();
			$catedata= $artcate->select();
			$catename= $artcate->where(array('cate_id'=>$_GET['id']))->find();
		}else{
			$data= $article->select();
		}
		$map['cate_id']  = array('egt',2);
		$catedata= $artcate->where($map)->select();  //不包含合作明星（1）

		$this->assign('catedata',$catedata);
		$this->assign('catename',$catename['cate_name']);
		$this->assign('data',$data);
		$this->display();
	}
	
	public function join(){
		$article=M('article');
		$data= $article->where(array('art_id'=>$_GET['id']))->select();
		$num=  $data[0]['art_visit']+1;    //浏览数
		$article->where(array('art_id'=>$_GET['id']))->save(array('art_visit'=>$num));
		$data1= $article->where(array('art_id'=>$_GET['id']-1))->select();
		$data2= $article->where(array('art_id'=>$_GET['id']+1))->select();
		$this->assign('data',$data[0]);
		$this->assign('data1',$data1[0]);
		$this->assign('data2',$data2[0]);
		$this->display();
	}
	
}