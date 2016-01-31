<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class IndexController extends CommonController {
	public function index(){
		$memb = M('Index');
		$menber=M('Member');
		$menberall= $menber->select();
		$menber3= $menber->where(array('p_cate'=>3))->select();  //彩妆图纸
		$menber4= $menber->where(array('p_cate'=>4))->select();  //彩妆作品
		$menber5= $menber->where(array('p_cate'=>5))->select();  //发型
		$menber6= $menber->where(array('p_cate'=>6))->select();  //影视
		$menber7= $menber->where(array('p_cate'=>7))->select();  //美甲
		$menber8= $menber->where(array('p_cate'=>8))->select();  //半永久
        $tran=$memb->where(array('i_class'=>4))->select();       //培训
        $teacher=$memb->where(array('i_class'=>5))->select();    //师资力量
		$banner=M('Banner');
		$ban_res= $banner->select();
		$this->assign('menberall',$menberall);
		$this->assign('menber3',$menber3);
		$this->assign('menber4',$menber4);
		$this->assign('menber5',$menber5);
		$this->assign('menber6',$menber6);
		$this->assign('menber7',$menber7);
		$this->assign('menber8',$menber8);
		$this->assign('ban_res',$ban_res);
		$this->assign('tran',$tran[0]);
		$this->assign('teacher',$teacher);
		$this->display();
	}




		
	


}