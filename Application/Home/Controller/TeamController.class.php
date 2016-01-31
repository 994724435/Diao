<?php

namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class TeamController extends Controller {
	public function team(){
		$index=M('Index');
		$result= $index->where(array('i_class'=>5))->select();
		$this->assign('result',$result);
		$this->display();
	}


}