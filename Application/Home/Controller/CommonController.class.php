<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

	public function _initialize(){
		if($user = session('name')){
			$data = array(
				'user'=>$user
				);
//			session('[destroy]');  //消除session	
			$this->assign($data);
			
		}
	}

}