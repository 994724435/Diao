<?php

namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class  ContactController extends Controller {
	public function contact(){
		$this->display();
	}
	public function lianxi(){
		$this->display();
	}	
	
	public function baoming(){
		$this->display();
	}
}