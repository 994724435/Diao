<?php

namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class  StartController extends Controller {
	public function start(){
		$article=M('article');
		$artcate=M('artcate');
		$data= $article->where(array('art_cateid'=>1))->select();
		
		$catedata= $artcate->select();
		
		$this->assign('catedata',$catedata);
		$this->assign('catename',$catename['cate_name']);
		$this->assign('data',$data);
		$this->display();
	}
	
	public function detail(){
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